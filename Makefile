compose-test:
	docker-compose run php make test -s

compose-install:
	docker-compose run php composer install

compose-bash:
	docker-compose run php bash

compose-build:
	docker-compose build

test:
	find modules/**/* -type d -exec printf "\n{}\n" \; -exec make -C {} \;

docker-release: docker-build docker-push

docker-build:
	docker build -t hexlet/hexlet-basics-exercises-php .

docker-push:
	docker push hexlet/hexlet-basics-exercises-php
