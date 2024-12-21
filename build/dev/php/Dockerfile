ARG PHP_VERSION=""
FROM php:${PHP_VERSION:+${PHP_VERSION}-}fpm-alpine

RUN apk update; apk upgrade; \
        apk add --no-cache freetype-dev \
        libjpeg-turbo-dev libpng-dev \
        libpng libjpeg-turbo libjpeg-turbo-utils \
        icu-dev icu 

RUN pecl install && \
    docker-php-ext-configure intl && \
    docker-php-ext-configure gd \
    --with-freetype --with-jpeg && \
    docker-php-ext-install -j$(nproc) intl gd
