compose-test:
	docker-compose run php make test -s

compose-install:
	docker-compose run php composer install

compose-bash:
	docker-compose run php bash

compose-build:
	docker-compose build

test:
	make -C modules/10-basics/10-hello-world test

docker-build:
	docker build -t hexlet/hexlet-basics-exercises-php .

docker-push:
	docker push hexlet/hexlet-basics-exercises-php
