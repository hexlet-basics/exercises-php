-include /opt/basics/common/common.mk

compose-setup: compose-build compose-install

compose:
	docker-compose up

compose-build:
	docker-compose build

compose-install:
	docker-compose run exercises composer install

code-lint:
	composer run-script phpcs -- --standard=PSR12 modules

code-lint-fix:
	composer run-script phpcbf -- --standard=PSR12 modules

compose-bash:
	docker-compose run exercises bash

compose-test:
	docker-compose run exercises make test
