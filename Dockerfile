FROM php:7.1-cli-jessie

ENV LANG C.UTF-8
ENV LC_ALL C.UTF-8

RUN apt-get update && apt-get install -yqq git python3-pip
RUN apt-get install -yqq libyaml-dev

RUN pip3 install yamllint

ENV COMPOSER_NO_INTERACTION 1
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /tmp
ENV COMPOSER_VERSION 1.6.4

RUN php -r "readfile('https://getcomposer.org/installer');" > /composer-setup.php
RUN php /composer-setup.php --install-dir=/usr/local/bin --filename=composer
# RUN cp /usr/lib/php/7.2/php.ini-development /etc/php/7.2/cli/php.ini

# COPY xdebug.ini /etc/php/7.2/mods-available/xdebug.ini
# COPY opcache.ini /etc/php/7.2/mods-available/opcache.ini

# RUN apk --update add autoconf automake build-base libtool nasm
# RUN apk add python3
# RUN pecl update-channels && pecl install xdebug
# RUN echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini

WORKDIR /exercises-php

COPY composer.json composer.json
COPY composer.lock composer.lock
RUN composer install

COPY . /exercises-php
