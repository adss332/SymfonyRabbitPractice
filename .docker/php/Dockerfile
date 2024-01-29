FROM php:8.2-fpm
USER root

RUN apt-get update && apt-get install -y \
      apt-utils \
      libpq-dev \
      curl \
      default-mysql-client \
      libpng-dev \
      iptables-persistent \
      libzip-dev \
      libfreetype6-dev \
      libjpeg62-turbo-dev \
      vim \
      zip unzip \
      iputils-ping \
      git \
      nodejs \
      librabbitmq-dev \
      librabbitmq4 \
      npm && \
      docker-php-ext-install pdo_mysql && \
      docker-php-ext-install bcmath && \
      docker-php-ext-configure gd --with-freetype --with-jpeg && \
      docker-php-ext-install gd && \
      docker-php-ext-install zip && \
      pecl install amqp && \
      docker-php-ext-enable amqp && \
      docker-php-ext-install exif && \
      apt-get clean && \
      rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* \

ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin

RUN curl -sS https://get.symfony.com/cli/installer | bash && \
    mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

WORKDIR /var/www/QueueTesting
