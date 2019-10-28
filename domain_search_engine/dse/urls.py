from django.urls import path

from domain_search_engine.dse.views import (
    home, search
)

urlpatterns = [
    path('', view=home, name='home'),
    path('search/', view=search, name='search'),
]
