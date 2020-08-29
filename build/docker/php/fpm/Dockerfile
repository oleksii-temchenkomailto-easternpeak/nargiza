FROM php:7.2-fpm

RUN apt-get update \
    && apt-get install -y libpq-dev libpng-dev \
        libzip-dev \
        zip \
        wget \
    && docker-php-ext-configure zip --with-libzip \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql gd \
        zip \
    && apt-get install -y --no-install-recommends \
        supervisor

COPY ./php/config/supervisor/supervisord.conf /etc/supervisor
COPY ./php/config/supervisor/supervisor/* /etc/supervisor/conf.d/

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/supervisord.conf"]

WORKDIR /var/www

