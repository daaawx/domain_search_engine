from django.db import models
import tldextract


def format_title(url):
    sub, dom, suf = tldextract.extract(url)
    return dom


class DomainModel(models.Model):
    search_term = models.CharField(max_length=25, unique=True)
    url = models.URLField(max_length=200)
    title = models.CharField(max_length=100)
    ssl = models.BooleanField(default=False)
