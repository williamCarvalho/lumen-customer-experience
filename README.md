# Api Customer Experience

## Imagens do ambiente docker
- php 7.3
- MariaDB 10.4
- phpMyAdmin

## Configuração
**Iniciar docker**

Abra a pasta root do projeto no terminal, em seguida execute os comandos respeitando a ordem:
- docker-compose build
- docker-compose up -d

**Windows 10**

Certos ambientes windows 10 podem ter dificuldade em reconhecer os dois primeiros comandos do docker-compose, neste caso ignore a etapa  anterior e execute os comandos abaixo em um terminal com acesso de administrador:
- docker compose up -d --build

**Iniciar Lumen**

- docker exec -it api_php_cx /bin/bash
- composer install
- cp .env.example .env
- php artisan migrate
- php artisan db:seed

## Documentação
Acesse a url local da documentação para maiores informações sobre os **Endpoints**:
- http://localhost:9090/docs
