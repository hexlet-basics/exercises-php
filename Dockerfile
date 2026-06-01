FROM hexletbasics/base-image

ARG PHP_VERSION=8.4

WORKDIR /exercises-php

ENV COMPOSER_NO_INTERACTION=1
ENV COMPOSER_ALLOW_SUPERUSER=1
ENV COMPOSER_HOME=/tmp
ENV COMPOSER_VERSION=2.8.6
ENV PATH=/exercises-php/bin:/exercises-php/vendor/bin/:$PATH

RUN curl -sSLo /usr/share/keyrings/deb.sury.org-php.gpg https://packages.sury.org/php/apt.gpg && \
  echo "deb [signed-by=/usr/share/keyrings/deb.sury.org-php.gpg] https://packages.sury.org/php/ $(. /etc/os-release && echo "$VERSION_CODENAME") main" > /etc/apt/sources.list.d/php.list && \
  apt-get update && \
  apt-get install -yqq --no-install-recommends \
  php${PHP_VERSION} \
  php${PHP_VERSION}-cli \
  php${PHP_VERSION}-common \
  php${PHP_VERSION}-curl \
  php${PHP_VERSION}-gd \
  php${PHP_VERSION}-mbstring \
  php${PHP_VERSION}-xdebug \
  php${PHP_VERSION}-xml && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/*

RUN php -r "readfile('https://getcomposer.org/installer');" > /composer-setup.php && \
  php /composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
  rm /composer-setup.php

RUN echo "include_path = \".:/exercises-php\"" > /etc/php/${PHP_VERSION}/cli/conf.d/code-basics.ini && \
  echo "xdebug.mode=debug" >> /etc/php/${PHP_VERSION}/cli/conf.d/code-basics.ini

COPY composer.json composer.lock ./
RUN composer install --prefer-dist --optimize-autoloader && \
  composer clear-cache && \
  rm -rf /tmp/* && \
  # NOTE: Хак на случай, если --prefer-dist не срабатывает и качаются зависимости из исходников
  find vendor -type d -name '.git' -exec rm -rf \{\} \+

COPY . .
