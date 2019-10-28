import requests
from fake_useragent import UserAgent


def ssl_check(url):
    ua = UserAgent()
    headers = {
        'User-Agent': ua.random,
        'Accept-Language': 'en-US,en;q=0.9',
    }
   
    try:
        r = requests.get(url, headers=headers)
        return r.url.startswith('https')
    except:
        return False
