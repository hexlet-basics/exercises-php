FROM hexletbasics/base-image

WORKDIR /exercises-php

ENV COMPOSER_NO_INTERACTION=1
ENV COMPOSER_ALLOW_SUPERUSER=1
ENV COMPOSER_HOME=/tmp
ENV COMPOSER_VERSION=2.8.6
ENV PATH=/exercises-php/bin:/exercises-php/vendor/bin/:$PATH

RUN apt-get update && \
  apt-get install -yqq --no-install-recommends \
  php \
  php-cli \
  php-common \
  php-curl \
  php-gd \
  php-mbstring \
  php-xdebug \
  php-xml && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/*


RUN php -r "readfile('https://getcomposer.org/installer');" > /composer-setup.php && \
  php /composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
  rm /composer-setup.php

RUN mkdir -p /usr/local/etc/php/conf.d/ && \
  echo "include_path = \".:/exercises-php\"" > /usr/local/etc/php/conf.d/code-basics.ini && \
  echo "zend_extension=xdebug.so" > /usr/local/etc/php/conf.d/xdebug.ini && \
  echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/xdebug.ini

COPY composer.json composer.lock ./
RUN composer install --prefer-dist --optimize-autoloader

COPY . .
