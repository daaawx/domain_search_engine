from django.urls import path

from domain_search_engine.dse.views import (
    home,
    search,
    check_domain,
)

urlpatterns = [
    path('', view=home, name='home'),
    path('search/', view=search, name='search'),
    path('check_domain/', view=check_domain, name='check_domain'),
]
