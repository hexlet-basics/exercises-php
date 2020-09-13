-include /opt/basics/common/common.mk

compose-setup: compose-build compose-install

compose:
	docker-compose up

compose-build:
	docker-compose build

compose-install:
	docker-compose run exercises composer install

code-lint:
	composer exec --verbose phpcs -- modules

code-lint-fix:
	composer exec --verbose phpcbf -- modules

compose-bash:
	docker-compose run exercises bash

compose-test:
	docker-compose run exercises make test
