FROM hexletbasics/base-image

ARG PHP_VERSION='8.1'

RUN add-apt-repository ppa:ondrej/php
RUN apt-get update && \
  apt-get install -yqq \
  php${PHP_VERSION} \
  php${PHP_VERSION}-common \
  php${PHP_VERSION}-opcache \
  php${PHP_VERSION}-cli \
  php${PHP_VERSION}-gd \
  php${PHP_VERSION}-curl \
  php${PHP_VERSION}-mbstring \
  php${PHP_VERSION}-xml

ENV COMPOSER_NO_INTERACTION 1
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /tmp
ENV COMPOSER_VERSION 2.3.10

RUN php -r "readfile('https://getcomposer.org/installer');" > /composer-setup.php
RUN php /composer-setup.php --install-dir=/usr/local/bin --filename=composer

WORKDIR /exercises-php

RUN mkdir -p /usr/local/etc/php/conf.d/
RUN echo "include_path = \".:/exercises-php\"" > /usr/local/etc/php/conf.d/code-basics.ini

COPY . .

RUN composer install

ENV PATH=/exercises-php/bin:$PATH
