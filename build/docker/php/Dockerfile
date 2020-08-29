FROM php:7.4-fpm

RUN apt-get update && apt-get install -y libpq-dev libpng-dev \
        libzip-dev \
        zip \
        wget \
    && docker-php-ext-configure zip --with-libzip \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql gd \
        zip

WORKDIR /var/www

