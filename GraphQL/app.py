from ariadne import QueryType, make_executable_schema, load_schema_from_path
from ariadne.asgi import GraphQL
import uvicorn
from resolvers import resolve_hello, resolve_greeting,  resolve_phone, resolve_birth, resolve_getPerson

type_defs = load_schema_from_path("schema.graphql")

query = QueryType()

query.set_field("hello", resolve_hello)
query.set_field("greeting", resolve_greeting)
query.set_field("phone", resolve_phone)
query.set_field("birth", resolve_birth)
query.set_field("getPerson", resolve_getPerson)

schema = make_executable_schema(type_defs, query)

app = GraphQL(schema)

if __name__ == "__main__":
    uvicorn.run(app, host = "127.0.0.1", port=8000)