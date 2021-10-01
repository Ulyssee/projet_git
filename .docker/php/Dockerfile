FROM php:5.6.40-apache

USER root

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    libmemcached-dev \
    zlib1g-dev \
    libpng-dev \
    zlib1g-dev \
    libxml2-dev \
    libzip-dev \
    libonig-dev \
    unzip \
    curl \
    git \
    zip \
    && pecl install memcached-2.2.0 \
    && docker-php-ext-enable memcached \
    && docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install zip \
    && docker-php-source delete

COPY ./vhost.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite