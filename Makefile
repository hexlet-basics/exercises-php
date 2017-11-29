test:
	docker-compose run php composer test

install:
	docker-compose run php composer install

bash:
	docker-compose run php bash

build:
	docker-compose build
