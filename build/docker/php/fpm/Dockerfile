FROM php:7.4-fpm

RUN apt-get update \
    && apt-get install -y libpq-dev libpng-dev \
        libzip-dev \
        zip \
        wget \
    && docker-php-ext-configure zip \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql gd \
        zip \
    && apt-get install -y --no-install-recommends \
        supervisor

COPY ./php/config/supervisor/supervisord.conf /etc/supervisor
COPY ./php/config/supervisor/supervisor/* /etc/supervisor/conf.d/

WORKDIR /app

