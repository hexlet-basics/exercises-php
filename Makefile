compose: compose-build
	docker-compose up

gcloud-builds-submit:
	gcloud builds submit --config cloudbuild.yaml .

compose-test:
	docker-compose -f docker-compose.test.yml up

compose-lint-code:
	docker-compose run exercises make lint-code

compose-lint-yaml:
	docker-compose run exercises make lint-yaml

compose-lint:
	docker-compose run exercises make lint

compose-install:
	docker-compose run exercises composer install

compose-bash:
	docker-compose run exercises bash

compose-build:
	docker-compose build

SUBDIRS := $(wildcard modules/**/*/.)

lint: lint-yaml lint-code

lint-yaml:
	yamllint modules

lint-code:
	./vendor/bin/phpcs src modules

test: $(SUBDIRS)
$(SUBDIRS):
	@echo
	make -C $@ test
	@echo

.PHONY: all $(SUBDIRS)
