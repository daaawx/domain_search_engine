import json
import requests
from django.conf import settings
from fake_useragent import UserAgent
import tldextract
from bs4 import BeautifulSoup


# https://reverse-whois-api.whoisxmlapi.com/docs
class WhoisCheck:
    count = 0
    domains_list = []

    def check(self, search):
        payload = {
            'basicSearchTerms': {
                'include': [
                    search,
                ],
                'exclude': [
                ],
            },
            'searchType': 'current',
            'mode': 'purchase',  # preview is free (only count)
            'apiKey': self.API_KEY,
            'responseFormat': 'json'
        }

        r = requests.post('https://reverse-whois-api.whoisxmlapi.com/api/v2', headers=self.headers,
                          data=json.dumps(payload))
        obj = r.json()

        return obj['domainsList']

    def scrape(self, query):

        ua = UserAgent()
        headers = {
            'User-Agent': ua.random,
            'Referer': 'https://www.google.com/',
            'Accept-Language': 'en-US,en;q=0.9',
        }
        
        url = f'https://dnslytics.com/search?q={query}'

        r = requests.get(url, headers=headers)

        soup = BeautifulSoup(r.content, 'lxml')
        links = soup.select('table a')

        return [i.text for i in links]

    def format_title(self, url):
        sub, dom, suf = tldextract.extract(url)
        return dom

    def get_info(self, url):
        ua = UserAgent()
        headers = {
            'User-Agent': ua.random,
            'Accept-Language': 'en-US,en;q=0.9',
        }

        try:
            r = requests.get(url, headers=headers)
            title = BeautifulSoup(r.text, 'lxml').title.text
            has_ssl = r.url.startswith('https')
        except:
            title = self.format_title(url)
            has_ssl = False

        return title, has_ssl

    def __init__(self, api_key):
        self.API_KEY = api_key
        self.headers = {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        }


if __name__ == '__main__':
    whois = WhoisCheck("at_ArZ4eRzpqxy6AONA462eYvPfw8mt1")
    whois.check('taxi')
    print(whois.count)
    print(whois.domains_list)

# OUTPUT
# {
#    "domainsCount": 2,
#    "domainsList": [
#         "airbnb.app",
#         "airbnbhost.app"
#     ]
# }
