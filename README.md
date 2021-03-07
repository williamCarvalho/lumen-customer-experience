# Api Customer Experience

## Configuração

Abra a pasta root do projeto no terminal, em seguida execute os comandos na ordem:
- composer install
- cp .env.example .env
- docker-compose build
- docker-compose up -d
- docker exec -it api_php_cx /bin/bash
- php artisan migrate
- php artisan db:seed

## Endpoints
**Cliente**
- List: GET http://localhost:9090/api/clients
- Insert: POST http://localhost:9090/api/clients
- Update: PUT http://localhost:9090/api/clients/{id}
- Delete: DELETE http://localhost:9090/api/clients/{id}
- Paginate: GET http://localhost:9090/api/clients?_page=&_limit=
- Sort: GET http://localhost:9090/api/clients?_sort=&_order=
- Filter: GET http://localhost:9090/api/clients?status=success

**Colaborador**
- List: GET http://localhost:9090/api/collaborators
- Insert: POST http://localhost:9090/api/collaborators
- Update: PUT http://localhost:9090/api/collaborators/{id}
- Delete: DELETE http://localhost:9090/api/collaborators/{id}
- Paginate: GET http://localhost:9090/api/collaborators?_page=&_limit=
- Sort: GET http://localhost:9090/api/collaborators?_sort=&_order=
- Filter: GET http://localhost:9090/api/collaborators?status=success

**Loja**
- List: GET http://localhost:9090/api/stores
- Insert: POST http://localhost:9090/api/stores
- Update: PUT http://localhost:9090/api/stores/{id}
- Delete: DELETE http://localhost:9090/api/stores/{id}
- Paginate: GET http://localhost:9090/api/stores?_page=&_limit=
- Sort: GET http://localhost:9090/api/stores?_sort=&_order=
- Filter: GET http://localhost:9090/api/stores?status=success


**Transação**
- Insert: POST http://localhost:9090/api/transactions
- Update: PUT http://localhost:9090/api/transactions/{id}


**Avaliação**
- Insert: POST http://localhost:9090/api/evaluations
- Update: PUT http://localhost:9090/api/evaluations/{id}
