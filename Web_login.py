import requests

url = "http://192.168.88.211:8000/accounts/login/"
headers = {
    "Content-Type": "application/x-www-form-urlencoded",
    "User-Agent": "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36",
    "Referer": "http://192.168.88.211:8000/accounts/login/",
    "Accept-Encoding": "gzip, deflate",
    "Accept-Language": "th-TH,th;q=0.9,en;q=0.8",
    "Cookie": "csrftoken=0XHOUJPpUClmgpio8xxw6eOXhNKBT77j"
}

data = {
    "csrfmiddlewaretoken": "B0Y5PETEAjh8TfNf2cpB3jhwcUSBV5cyrNvJzdyTkLskZuVt0zMXZnVjjxs2E29H",
    "username": "test1",
    "password": "P@55vv0rd"
}
while True :
    response = requests.post(url, headers=headers, data=data)


