FROM php:7.4.5-cli

ENV LANG C.UTF-8
ENV LC_ALL C.UTF-8

RUN apt-get update && apt-get install -yqq git curl python3-pip libyaml-dev zip unzip
RUN apt-get install -yqq nodejs npm

RUN pip3 install yamllint
RUN apt-get install -yqq jq
RUN pip3 install yq
RUN npm install -g ajv-cli

ENV COMPOSER_NO_INTERACTION 1
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /tmp
ENV COMPOSER_VERSION 1.10.5

RUN php -r "readfile('https://getcomposer.org/installer');" > /composer-setup.php
RUN php /composer-setup.php --install-dir=/usr/local/bin --filename=composer

WORKDIR /exercises-php

COPY composer.json composer.json
COPY composer.lock composer.lock
RUN composer install

RUN echo "include_path = \".:/exercises-php\"" > /usr/local/etc/php/conf.d/code-basics.ini

COPY . .
