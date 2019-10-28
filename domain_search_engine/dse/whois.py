import requests


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

        r = requests.post('https://reverse-whois-api.whoisxmlapi.com/api/v2', headers=self.headers, data=payload)

        self.count = r.json()['domainsCount']
        self.domains_list = r.json()['domainsList']

    def __init__(self, api_key):
        self.API_KEY = api_key
        self.headers = {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        }


if __name__ == '__main__':
    whois = WhoisCheck('')
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
