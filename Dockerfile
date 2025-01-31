FROM hexletbasics/base-image

RUN apt-get update && \
  apt-get install -yqq \
  php \
  php-common \
  php-cli \
  php-gd \
  php-curl \
  php-mbstring \
  php-xml

ENV COMPOSER_NO_INTERACTION 1
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /tmp
ENV COMPOSER_VERSION 2.3.10

RUN php -r "readfile('https://getcomposer.org/installer');" > /composer-setup.php
RUN php /composer-setup.php --install-dir=/usr/local/bin --filename=composer

WORKDIR /exercises-php

RUN mkdir -p /usr/local/etc/php/conf.d/
RUN echo "include_path = \".:/exercises-php\"" > /usr/local/etc/php/conf.d/code-basics.ini

COPY composer.json composer.lock .
RUN composer install

COPY . .

ENV PATH=/exercises-php/bin:$PATH
