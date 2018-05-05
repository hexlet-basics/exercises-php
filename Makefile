compose: compose-build compose-install compose-test

compose-test:
	docker-compose run php make test -s

compose-install:
	docker-compose run php composer install

compose-bash:
	docker-compose run php bash

compose-build:
	docker-compose build

docker-release: docker-build docker-push

docker-build:
	docker build -t hexlet/hexlet-basics-exercises-php .

docker-push:
	docker push hexlet/hexlet-basics-exercises-php

SUBDIRS := $(wildcard modules/**/*/.)

lint:
	yamllint modules

test: $(SUBDIRS)
$(SUBDIRS):
	@echo
	make -C $@ test
	@echo

.PHONY: all $(SUBDIRS)
