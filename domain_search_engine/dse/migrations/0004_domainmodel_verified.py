# Generated by Django 2.2.6 on 2019-10-29 17:19

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('dse', '0003_auto_20191029_0053'),
    ]

    operations = [
        migrations.AddField(
            model_name='domainmodel',
            name='verified',
            field=models.BooleanField(default=False),
        ),
    ]
