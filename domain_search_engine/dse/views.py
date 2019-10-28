from django.shortcuts import render
from .whois import WhoisCheck


def home(request):
    return render(request, 'pages/home.html')


def search(request):
    if request.method == 'GET':
        query = request.GET['q']
    return render(request, 'pages/search.html')
