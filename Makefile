compose: compose-build compose-install compose-test

gcloud-builds-submit:
	gcloud builds submit --config cloudbuild.yml .

compose-test:
	docker-compose -f docker-compose.test.yml up

compose-install:
	docker-compose run exercises composer install

compose-bash:
	docker-compose run exercises bash

compose-build:
	docker-compose build

# docker-release: docker-build docker-push

# docker-build:
# 	docker build -t hexlet/hexlet-basics-exercises-php .

# docker-push:
# 	docker push hexlet/hexlet-basics-exercises-php

SUBDIRS := $(wildcard modules/**/*/.)

lint:
	yamllint modules

test: $(SUBDIRS)
$(SUBDIRS):
	@echo
	make -C $@ test
	@echo

.PHONY: all $(SUBDIRS)
