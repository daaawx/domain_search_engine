from django.shortcuts import render


def home(request):
    return render(request, 'pages/home.html')


def search(request):
    return render(request, 'pages/search.html')
