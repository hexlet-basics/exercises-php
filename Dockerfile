FROM hexletbasics/base-image:latest

RUN add-apt-repository ppa:ondrej/php
RUN apt-get install -yqq php7.4 php7.4-common php7.4-opcache php7.4-cli php7.4-gd php7.4-curl php7.4-mbstring php7.4-xml

ENV COMPOSER_NO_INTERACTION 1
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /tmp
ENV COMPOSER_VERSION 1.10.5

RUN php -r "readfile('https://getcomposer.org/installer');" > /composer-setup.php
RUN php /composer-setup.php --install-dir=/usr/local/bin --filename=composer

WORKDIR /exercises-php

RUN mkdir -p /usr/local/etc/php/conf.d/
RUN echo "include_path = \".:/exercises-php\"" > /usr/local/etc/php/conf.d/code-basics.ini

COPY --from=hexletbasics/base-image:latest /tmp/basics/common/* ./
COPY . .

RUN composer install
