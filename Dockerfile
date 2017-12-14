FROM composer

RUN apk --update add autoconf automake build-base libtool nasm
# RUN pecl update-channels && pecl install xdebug
# RUN echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini

WORKDIR /exercises

COPY composer.json composer.json
COPY composer.lock composer.lock
RUN composer install

COPY . /exercises
