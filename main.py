import requests

"""
get_request = requests.get(
    "http://192.168.137.1/api?request=fetch-people"
)

print (get_request.json())
"""

"""
person = requests.get(
    "http://192.168.137.1/api",
    params={
        "request" : "fetch-person",
        "id" : 3
    }
)
response = person.json()
if response:
    print (response)
else:
    print ("Samahani")
"""


name = "Miguna"
gender = "Male"

create_user = requests.post (
    "http://localhost/api",
    params = {
        'name': name,
        'jinsia': gender,
        'request': 'create-person'
    }
)

print (create_user.text)

