compose: compose-build compose-install compose-test

gcloud-builds-submit:
	gcloud builds submit --config cloudbuild.yaml .

compose-test:
	docker-compose -f docker-compose.test.yml up

compose-install:
	docker-compose run exercises composer install

compose-bash:
	docker-compose run exercises bash

compose-build:
	docker-compose build

SUBDIRS := $(wildcard modules/**/*/.)

lint:
	yamllint modules

test: $(SUBDIRS)
$(SUBDIRS):
	@echo
	make -C $@ test
	@echo

.PHONY: all $(SUBDIRS)
