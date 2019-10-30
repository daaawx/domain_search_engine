from django.contrib.admin.views.decorators import staff_member_required
from django.core.paginator import Paginator, PageNotAnInteger, EmptyPage
from django.http import JsonResponse
from django.shortcuts import render
from django.views.decorators.csrf import csrf_exempt

from domain_search_engine.dse.models import DomainModel
from .whois import WhoisCheck
from django.conf import settings


def home(request):
    return render(request, 'pages/home.html')


def search(request):
    context = {
        'query': '',
        'count': 0,
        'items': [],
    }

    if request.method == 'GET' and request.GET.get('q'):
        query = request.GET.get('q')
        page = request.GET.get('page', 1)

        if not DomainModel.objects.filter(search_term=query):
            whois = WhoisCheck(settings.WHOIS_API_KEY)
            domains_list = whois.check(query)
            domains_list.extend(whois.scrape(query))

            obj_list = [DomainModel(search_term=query, url=item, title=whois.format_title(item)) for item in
                        domains_list if query in item]

            DomainModel.objects.bulk_create(obj_list)

        db_query = DomainModel.objects.filter(search_term=query)

        context['query'] = query
        context['count'] = db_query.count()

        items = db_query.all().order_by('id')
        paginator = Paginator(items, 50)

        try:
            context['items'] = paginator.page(page)
        except PageNotAnInteger:
            context['items'] = paginator.page(1)
        except EmptyPage:
            context['items'] = paginator.page(paginator.num_pages)

    return render(request, 'pages/search.html', context=context)


@csrf_exempt
def check_domain(request):
    if request.method == 'POST':
        query = request.POST.get('query')
        url = request.POST.get('url')

        print(query)
        print(url)

        whois = WhoisCheck(settings.WHOIS_API_KEY)
        title, has_ssl = whois.get_info(f'http://{url}')

        obj = DomainModel.objects.filter(search_term=query, url=url)[0]
        if title:
            obj.title = title
        obj.ssl = has_ssl
        obj.verified = True
        obj.save()

        return JsonResponse({
            'title': title,
            'ssl': has_ssl,
        })
