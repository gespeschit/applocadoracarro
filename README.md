# Locadora de Carro

Sistema utilizando o framework Laravel com ambinete de desenvolvimento criado Laradock (Docker).

### LARADOCK

Arquivo .env

#### NGINX 
NGINX_HOST_HTTP_PORT=8081
NGINX_HOST_HTTPS_PORT=4443
NGINX_HOST_LOG_PATH=./logs/nginx/
NGINX_SITES_PATH=./nginx/sites/
NGINX_PHP_UPSTREAM_CONTAINER=php-fpm
NGINX_PHP_UPSTREAM_PORT=9000
NGINX_SSL_PATH=./nginx/ssl/

#### MYSQL 
MYSQL_VERSION=latest
MYSQL_DATABASE=default
MYSQL_USER=default
MYSQL_PASSWORD=secret
MYSQL_PORT=3306
MYSQL_ROOT_PASSWORD=root
MYSQL_ENTRYPOINT_INITDB=./mysql/docker-entrypoint-initdb.d

#### PHP MY ADMIN 

##### Accepted values: mariadb - mysql

PMA_DB_ENGINE=mysql

###### Credentials/Port:

PMA_USER=default
PMA_PASSWORD=secret
PMA_ROOT_PASSWORD=secret
PMA_PORT=1010
PMA_MAX_EXECUTION_TIME=600
PMA_MEMORY_LIMIT=256M
PMA_UPLOAD_LIMIT=2G

#### REDIS

REDIS_PORT=6379

##### REDIS CLUSTER ###

REDIS_CLUSTER_PORT_RANGE=7000-7005


## SUBINDO OS CONTAINERS
docker-compose up -d --buid ngnix mysql phpmyadmin redis

## Rotas

Marcas
|Verbo|URN|
|----------|:-------------:|
|GET/HEAD  |  api/marca |
|----------|:-------------:|
|POST      |    api/marca |
|----------|:-------------:|
| GET/HEAD | api/marca/{marca}|
|----------|:-------------:|
| PUT/PATCH | api/marca/{marca} |
|----------|:-------------:|
|DELETE    | api/marca/{marca}|
|----------|:-------------:|


