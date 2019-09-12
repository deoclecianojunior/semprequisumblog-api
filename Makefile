.PHONY: up down build console

up:
	docker-compose up -d;

down:
	docker-compose down;

build:
	docker-compose build;

console:
	docker container exec -it -w /var/www/api/public php_semprequisumblog /bin/sh;