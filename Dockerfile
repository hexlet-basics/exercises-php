FROM composer:1.8

ENV LANG C.UTF-8
ENV LC_ALL C.UTF-8php:7.3

RUN apk add --no-cache python3 # libyaml-dev

RUN pip3 install yamllint

# # RUN cp /usr/lib/php/7.2/php.ini-development /etc/php/7.2/cli/php.ini

# COPY xdebug.ini /etc/php/7.2/mods-available/xdebug.ini
# COPY opcache.ini /etc/php/7.2/mods-available/opcache.ini
# RUN pecl update-channels && pecl install xdebug
# RUN echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini

WORKDIR /exercises-php

COPY composer.json composer.json
COPY composer.lock composer.lock
RUN composer install

RUN apk add --no-cache make

COPY . /exercises-php
