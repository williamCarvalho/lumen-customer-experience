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

## Documentação
Acesse a url local da documentação para maiores informações sobre os **Endpoints**:
- http://localhost:9090/docs