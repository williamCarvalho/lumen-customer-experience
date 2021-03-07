---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost:9090/docs/collection.json)

<!-- END_INFO -->

#1 - Client


APIs for managing clients
<!-- START_1af1a947e16afcb5289fad8940c57ec5 -->
## List clients

Returns a list of clients.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:9090/api/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/api/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Heloise Juliana Ramos",
        "email": "heloisejulianaramos-75@sodexo.com",
        "phone": "1138750343",
        "cpf": "35717888937",
        "status": "A",
        "created_at": "2021-03-07T15:53:28.000000Z",
        "updated_at": "2021-03-07T15:53:28.000000Z"
    },
    {
        "id": 2,
        "name": "Erick Henrique Novaes",
        "email": "erickhenriquenovaes-99@life.com",
        "phone": "69989563150",
        "cpf": "09019546910",
        "status": "A",
        "created_at": "2021-03-07T15:53:29.000000Z",
        "updated_at": "2021-03-07T15:53:29.000000Z"
    },
    {
        "id": 3,
        "name": "Isaac José Monteiro",
        "email": "isaacjosemonteiro-72@autvale.com",
        "phone": "65987441199",
        "cpf": "68439601387",
        "status": "A",
        "created_at": "2021-03-07T15:53:29.000000Z",
        "updated_at": "2021-03-07T15:53:29.000000Z"
    }
]
```

### HTTP Request
`GET api/clients`


<!-- END_1af1a947e16afcb5289fad8940c57ec5 -->

<!-- START_dfd23a7e4e59c7e8fd40b41e652b1be8 -->
## Insert client

Store a new client.

> Example request:

```bash
curl -X POST \
    "http://localhost:9090/api/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/api/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/clients`


<!-- END_dfd23a7e4e59c7e8fd40b41e652b1be8 -->

<!-- START_796ebd737f86810f05ca321a6e4c971e -->
## Update client

Update a existing client.

> Example request:

```bash
curl -X PUT \
    "http://localhost:9090/api/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/api/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/clients/{id}`


<!-- END_796ebd737f86810f05ca321a6e4c971e -->

<!-- START_643932242390522b05177f0fe35a719e -->
## Delete client

Deletes a existing client.

> Example request:

```bash
curl -X DELETE \
    "http://localhost:9090/api/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/api/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/clients/{id}`


<!-- END_643932242390522b05177f0fe35a719e -->

#2 - Collaborator


APIs for managing collaborators
<!-- START_0135a354e2fdc617b4749fdc5947d8fc -->
## List collaborators

Returns a list of collaborators.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:9090/api/collaborators" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/api/collaborators"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Felipe Nicolas Monteiro",
        "status": "A",
        "created_at": "2021-03-07T15:53:29.000000Z",
        "updated_at": "2021-03-07T15:53:29.000000Z"
    },
    {
        "id": 2,
        "name": "Mirella Clara Antônia da Conceição",
        "status": "A",
        "created_at": "2021-03-07T15:53:29.000000Z",
        "updated_at": "2021-03-07T15:53:29.000000Z"
    },
    {
        "id": 3,
        "name": "Jorge Martin Brito",
        "status": "A",
        "created_at": "2021-03-07T15:53:29.000000Z",
        "updated_at": "2021-03-07T15:53:29.000000Z"
    }
]
```

### HTTP Request
`GET api/collaborators`


<!-- END_0135a354e2fdc617b4749fdc5947d8fc -->

<!-- START_c52b4a816475727c08c537bd371b21e4 -->
## Insert collaborator

Store a new collaborator.

> Example request:

```bash
curl -X POST \
    "http://localhost:9090/api/collaborators" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/api/collaborators"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/collaborators`


<!-- END_c52b4a816475727c08c537bd371b21e4 -->

<!-- START_a23323ed5c5e2e550b2707b25e9dfc66 -->
## Update collaborator

Update a existing collaborator.

> Example request:

```bash
curl -X PUT \
    "http://localhost:9090/api/collaborators/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/api/collaborators/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/collaborators/{id}`


<!-- END_a23323ed5c5e2e550b2707b25e9dfc66 -->

<!-- START_117ed827d439305149bcebd55b6340c9 -->
## Delete collaborator

Deletes a existing collaborator.

> Example request:

```bash
curl -X DELETE \
    "http://localhost:9090/api/collaborators/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/api/collaborators/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/collaborators/{id}`


<!-- END_117ed827d439305149bcebd55b6340c9 -->

#3 - Store


APIs for managing stores
<!-- START_03ef733a4a0de089e74fe4c8dc863453 -->
## List stores

Returns a list of stores.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:9090/api/stores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/api/stores"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Lojas Americanas S.A.",
        "status": "A",
        "created_at": "2021-03-07T15:53:30.000000Z",
        "updated_at": "2021-03-07T15:53:30.000000Z"
    },
    {
        "id": 2,
        "name": "Magazine Luiza",
        "status": "A",
        "created_at": "2021-03-07T15:53:30.000000Z",
        "updated_at": "2021-03-07T15:53:30.000000Z"
    },
    {
        "id": 3,
        "name": "Submarino",
        "status": "A",
        "created_at": "2021-03-07T15:53:30.000000Z",
        "updated_at": "2021-03-07T15:53:30.000000Z"
    }
]
```

### HTTP Request
`GET api/stores`


<!-- END_03ef733a4a0de089e74fe4c8dc863453 -->

<!-- START_318c837814faa65bd129e59fb8c48161 -->
## Insert store

Store a new store.

> Example request:

```bash
curl -X POST \
    "http://localhost:9090/api/stores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/api/stores"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/stores`


<!-- END_318c837814faa65bd129e59fb8c48161 -->

<!-- START_64f7382bacdd2fc828db41e4f1515fde -->
## Update store

Update a existing store.

> Example request:

```bash
curl -X PUT \
    "http://localhost:9090/api/stores/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/api/stores/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/stores/{id}`


<!-- END_64f7382bacdd2fc828db41e4f1515fde -->

<!-- START_97c59ee94caf618b7d2a51bbd8e8a51c -->
## Delete store

Deletes a existing store.

> Example request:

```bash
curl -X DELETE \
    "http://localhost:9090/api/stores/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/api/stores/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/stores/{id}`


<!-- END_97c59ee94caf618b7d2a51bbd8e8a51c -->

#4 - Transaction


APIs for managing transactions
<!-- START_9af0b9f04f16a1c9705c5300772f6f16 -->
## List transactions

Returns a list of transactions.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:9090/api/transactions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/api/transactions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "date": "2021-01-01",
        "value": 10.51,
        "id_client": 1,
        "id_store": 2,
        "id_collaborator": 3,
        "created_at": "2021-03-07T15:53:30.000000Z",
        "updated_at": "2021-03-07T15:53:30.000000Z"
    },
    {
        "id": 2,
        "date": "2021-02-01",
        "value": 15.09,
        "id_client": 2,
        "id_store": 3,
        "id_collaborator": 1,
        "created_at": "2021-03-07T15:53:31.000000Z",
        "updated_at": "2021-03-07T15:53:31.000000Z"
    },
    {
        "id": 3,
        "date": "2021-03-01",
        "value": 5.13,
        "id_client": 3,
        "id_store": 1,
        "id_collaborator": 2,
        "created_at": "2021-03-07T15:53:31.000000Z",
        "updated_at": "2021-03-07T15:53:31.000000Z"
    },
    {
        "id": 4,
        "date": "2020-12-10",
        "value": 12.11,
        "id_client": 3,
        "id_store": 2,
        "id_collaborator": 1,
        "created_at": "2021-03-07T20:13:01.000000Z",
        "updated_at": "2021-03-07T20:23:16.000000Z"
    },
    {
        "id": 5,
        "date": "2020-12-10",
        "value": 13.11,
        "id_client": 3,
        "id_store": 2,
        "id_collaborator": 1,
        "created_at": "2021-03-07T20:23:32.000000Z",
        "updated_at": "2021-03-07T20:23:32.000000Z"
    }
]
```

### HTTP Request
`GET api/transactions`


<!-- END_9af0b9f04f16a1c9705c5300772f6f16 -->

<!-- START_a524d236dd691776be3315d40786a1db -->
## Insert transaction

Store a new transaction.

> Example request:

```bash
curl -X POST \
    "http://localhost:9090/api/transactions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/api/transactions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/transactions`


<!-- END_a524d236dd691776be3315d40786a1db -->

<!-- START_90a79515ca17c4a010c1f71a3b746aed -->
## Update transaction

Update a existing transaction.

> Example request:

```bash
curl -X PUT \
    "http://localhost:9090/api/transactions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/api/transactions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/transactions/{id}`


<!-- END_90a79515ca17c4a010c1f71a3b746aed -->

#5 -Evaluation


APIs for managing evaluations
<!-- START_476f3a62653602f21bcff4d90cb56c8b -->
## List evaluations

Returns a list of evaluations.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:9090/api/evaluations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/api/evaluations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "comment": "Ut pharetra ullamcorper dapibus. Mauris tempor tortor sed scelerisque gravida.",
        "note": 8,
        "id_transaction": 1,
        "created_at": "2021-03-07T15:53:31.000000Z",
        "updated_at": "2021-03-07T15:53:31.000000Z"
    },
    {
        "id": 2,
        "comment": "Vestibulum sed sapien dolor. Donec non accumsan felis, laoreet rutrum libero.",
        "note": 9,
        "id_transaction": 2,
        "created_at": "2021-03-07T15:53:31.000000Z",
        "updated_at": "2021-03-07T15:53:31.000000Z"
    },
    {
        "id": 3,
        "comment": "Curabitur eget mauris in ligula eleifend rhoncus. Sed sit amet ante purus. Ut lobortis ante.",
        "note": 7,
        "id_transaction": 3,
        "created_at": "2021-03-07T15:53:32.000000Z",
        "updated_at": "2021-03-07T15:53:32.000000Z"
    },
    {
        "id": 4,
        "comment": "teste 2",
        "note": 10,
        "id_transaction": 4,
        "created_at": "2021-03-07T20:15:05.000000Z",
        "updated_at": "2021-03-07T20:15:19.000000Z"
    }
]
```

### HTTP Request
`GET api/evaluations`


<!-- END_476f3a62653602f21bcff4d90cb56c8b -->

<!-- START_a92a25f6cd9ebb30055495189842d2f2 -->
## Insert evaluation

Store and update an evaluation.

> Example request:

```bash
curl -X POST \
    "http://localhost:9090/api/evaluations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/api/evaluations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/evaluations`


<!-- END_a92a25f6cd9ebb30055495189842d2f2 -->

#general


<!-- START_b49197dda1e390d1c17aa2d177702247 -->
## Dump api-docs.json content endpoint.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:9090/docs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/docs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "openapi": "3.0.0",
    "info": {
        "title": "Customer Experience OpenApi",
        "description": "Api for customer experience evaluation.",
        "contact": {
            "email": "william.melise@gmail.com"
        },
        "license": {
            "name": "MIT License",
            "url": "https:\/\/github.com\/williamCarvalho\/lumen-customer-experience\/blob\/main\/LICENSE"
        },
        "version": "1.0.0"
    },
    "servers": [
        {
            "url": "http:\/\/localhost:9090\/api",
            "description": "Customer Experience API"
        }
    ],
    "paths": {
        "\/clients": {
            "get": {
                "tags": [
                    "client"
                ],
                "summary": "Returns a list of clients",
                "description": "Returns a object of clients",
                "operationId": "getClientsList",
                "responses": {
                    "200": {
                        "description": "A list with clients"
                    }
                }
            },
            "post": {
                "tags": [
                    "client"
                ],
                "summary": "Store a new client",
                "description": "Store a client and returns a message",
                "operationId": "storeClient",
                "requestBody": {
                    "required": true,
                    "content": {
                        "multipart\/form-data": {}
                    }
                },
                "responses": {
                    "200": {
                        "description": "Store a client and returns a message."
                    }
                }
            }
        },
        "\/clients\/{id}": {
            "put": {
                "tags": [
                    "client"
                ],
                "summary": "Update a existing client",
                "description": "Update a client and returns a message",
                "operationId": "updateClient",
                "parameters": [
                    {
                        "name": "id",
                        "in": "path",
                        "description": "Client id",
                        "required": true,
                        "schema": {
                            "type": "integer"
                        }
                    }
                ],
                "requestBody": {
                    "required": true,
                    "content": {
                        "multipart\/form-data": {}
                    }
                },
                "responses": {
                    "200": {
                        "description": "Update a client and returns a message."
                    }
                }
            },
            "delete": {
                "tags": [
                    "client"
                ],
                "summary": "Deletes a existing client",
                "description": "Deletes a client and returns a message",
                "operationId": "deleteClient",
                "parameters": [
                    {
                        "name": "id",
                        "in": "path",
                        "description": "Client id",
                        "required": true,
                        "schema": {
                            "type": "integer"
                        }
                    }
                ],
                "responses": {
                    "200": {
                        "description": "Deletes a client and returns a message."
                    }
                }
            }
        },
        "\/collaborators": {
            "get": {
                "tags": [
                    "collaborator"
                ],
                "summary": "Returns a list of collaborators",
                "description": "Returns a object of collaborators",
                "operationId": "getCollaboratorsList",
                "responses": {
                    "200": {
                        "description": "A list with collaborators"
                    }
                }
            },
            "post": {
                "tags": [
                    "collaborator"
                ],
                "summary": "Store a new collaborator",
                "description": "Store a collaborator and returns a message",
                "operationId": "storeCollaborator",
                "requestBody": {
                    "required": true,
                    "content": {
                        "multipart\/form-data": {}
                    }
                },
                "responses": {
                    "200": {
                        "description": "Store a collaborator and returns a message."
                    }
                }
            }
        },
        "\/collaborators\/{id}": {
            "put": {
                "tags": [
                    "collaborator"
                ],
                "summary": "Update a existing collaborator",
                "description": "Update a collaborator and returns a message",
                "operationId": "updateCollaborator",
                "parameters": [
                    {
                        "name": "id",
                        "in": "path",
                        "description": "Collaborator id",
                        "required": true,
                        "schema": {
                            "type": "integer"
                        }
                    }
                ],
                "requestBody": {
                    "required": true,
                    "content": {
                        "multipart\/form-data": {}
                    }
                },
                "responses": {
                    "200": {
                        "description": "Update a collaborator and returns a message."
                    }
                }
            },
            "delete": {
                "tags": [
                    "collaborator"
                ],
                "summary": "Deletes a existing collaborator",
                "description": "Deletes a collaborator and returns a message",
                "operationId": "deleteCollaborator",
                "parameters": [
                    {
                        "name": "id",
                        "in": "path",
                        "description": "Collaborator id",
                        "required": true,
                        "schema": {
                            "type": "integer"
                        }
                    }
                ],
                "responses": {
                    "200": {
                        "description": "Deletes a collaborator and returns a message."
                    }
                }
            }
        },
        "\/evaluations": {
            "get": {
                "tags": [
                    "evaluation"
                ],
                "summary": "Returns a list of evaluations",
                "description": "Returns a object of evaluations",
                "operationId": "getEvaluationsList",
                "responses": {
                    "200": {
                        "description": "A list with evaluations"
                    }
                }
            },
            "post": {
                "tags": [
                    "evaluation"
                ],
                "summary": "Store and update an evaluation",
                "description": "Store a evaluation and returns a message",
                "operationId": "storeEvaluation",
                "requestBody": {
                    "required": true,
                    "content": {
                        "multipart\/form-data": {}
                    }
                },
                "responses": {
                    "200": {
                        "description": "Store a evaluation and returns a message."
                    }
                }
            }
        },
        "\/stores": {
            "get": {
                "tags": [
                    "store"
                ],
                "summary": "Returns a list of stores",
                "description": "Returns a object of stores",
                "operationId": "getStoresList",
                "responses": {
                    "200": {
                        "description": "A list with stores"
                    }
                }
            },
            "post": {
                "tags": [
                    "store"
                ],
                "summary": "Store a new store",
                "description": "Store a store and returns a message",
                "operationId": "storeStore",
                "requestBody": {
                    "required": true,
                    "content": {
                        "multipart\/form-data": {}
                    }
                },
                "responses": {
                    "200": {
                        "description": "Store a store and returns a message."
                    }
                }
            }
        },
        "\/stores\/{id}": {
            "put": {
                "tags": [
                    "store"
                ],
                "summary": "Update a existing store",
                "description": "Update a store and returns a message",
                "operationId": "updateStore",
                "parameters": [
                    {
                        "name": "id",
                        "in": "path",
                        "description": "Store id",
                        "required": true,
                        "schema": {
                            "type": "integer"
                        }
                    }
                ],
                "requestBody": {
                    "required": true,
                    "content": {
                        "multipart\/form-data": {}
                    }
                },
                "responses": {
                    "200": {
                        "description": "Update a store and returns a message."
                    }
                }
            },
            "delete": {
                "tags": [
                    "store"
                ],
                "summary": "Deletes a existing store",
                "description": "Deletes a store and returns a message",
                "operationId": "deleteStore",
                "parameters": [
                    {
                        "name": "id",
                        "in": "path",
                        "description": "Store id",
                        "required": true,
                        "schema": {
                            "type": "integer"
                        }
                    }
                ],
                "responses": {
                    "200": {
                        "description": "Deletes a store and returns a message."
                    }
                }
            }
        },
        "\/transactions": {
            "get": {
                "tags": [
                    "transaction"
                ],
                "summary": "Returns a list of transactions",
                "description": "Returns a object of transactions",
                "operationId": "getTransactionsList",
                "responses": {
                    "200": {
                        "description": "A list with transactions"
                    }
                }
            },
            "post": {
                "tags": [
                    "transaction"
                ],
                "summary": "Store a new transaction",
                "description": "Store a transaction and returns a message",
                "operationId": "storeTransaction",
                "requestBody": {
                    "required": true,
                    "content": {
                        "multipart\/form-data": {}
                    }
                },
                "responses": {
                    "200": {
                        "description": "Store a transaction and returns a message."
                    }
                }
            }
        },
        "\/transactions\/{id}": {
            "put": {
                "tags": [
                    "transaction"
                ],
                "summary": "Update a existing transaction",
                "description": "Update a transaction and returns a message",
                "operationId": "updateTransaction",
                "parameters": [
                    {
                        "name": "id",
                        "in": "path",
                        "description": "Transaction id",
                        "required": true,
                        "schema": {
                            "type": "integer"
                        }
                    }
                ],
                "requestBody": {
                    "required": true,
                    "content": {
                        "multipart\/form-data": {}
                    }
                },
                "responses": {
                    "200": {
                        "description": "Update a transaction and returns a message."
                    }
                }
            }
        }
    },
    "tags": [
        {
            "name": "Customer Experience",
            "description": "API Endpoints of Customer Experience"
        }
    ]
}
```

### HTTP Request
`GET docs`


<!-- END_b49197dda1e390d1c17aa2d177702247 -->

<!-- START_f7b7ea397f8939c8bb93e6cab64603ce -->
## Display Swagger API page.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:9090/api/documentation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/api/documentation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET api/documentation`


<!-- END_f7b7ea397f8939c8bb93e6cab64603ce -->

<!-- START_98d225804634be7700d8fd9cb9b24265 -->
## swagger-ui-assets/{asset}
> Example request:

```bash
curl -X GET \
    -G "http://localhost:9090/swagger-ui-assets/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/swagger-ui-assets/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
null
```

### HTTP Request
`GET swagger-ui-assets/{asset}`


<!-- END_98d225804634be7700d8fd9cb9b24265 -->

<!-- START_a2c4ea37605c6d2e3c93b7269030af0a -->
## Display Oauth2 callback pages.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:9090/api/oauth2-callback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:9090/api/oauth2-callback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET api/oauth2-callback`


<!-- END_a2c4ea37605c6d2e3c93b7269030af0a -->


