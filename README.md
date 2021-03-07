# Api Customer Experience

## Requisitos
- php 7.3
- MariaDB 10.4
- phpMyAdmin

## Configuração
Abra a pasta root do projeto no terminal, em seguida execute os comandos respeitando a ordem:
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