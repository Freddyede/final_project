import requests


def get_method(params1):
    return requests.get(params1, headers={"Authorization": "testToken", "Demandes": "GET"}).json()


def post_method():
    return "Hello Post"
