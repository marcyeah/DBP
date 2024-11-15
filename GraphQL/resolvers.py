def resolve_hello(obj, info):
    return "Hola, que tal!"

def resolve_greeting(obj, info, name):
    return f"Hola, {name}"

people_db = {
    "1": {"id": "1", "name": "Alice", "age": 20, "bd": "27/08/1999", "phone": ""},
    "2": {"id": "2", "name": "Bob", "age": 25, "bd": "01/02/1986", "phone": ""},
}

def resolve_phone (obj, info, id, ph):
    people_db.get(id).update({"phone": ph})
    return people_db.get(id).get("phone")

def resolve_birth(obj, info, id):
    return people_db.get(id).get("bd")

def resolve_getPerson(obj, info, id):
    return people_db.get(id)