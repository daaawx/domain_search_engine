from django.db import models


class DomainModel(models.Model):
    search_term = models.CharField(max_length=25)
    url = models.URLField(max_length=200)
    title = models.CharField(max_length=350)
    ssl = models.BooleanField(default=False)
    verified = models.BooleanField(default=False)
