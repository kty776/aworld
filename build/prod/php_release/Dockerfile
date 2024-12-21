ARG PHP_VERSION=""
FROM php:${PHP_VERSION:+${PHP_VERSION}-}fpm-alpine

RUN apk update; apk upgrade; \
        apk add --no-cache freetype-dev \
        libjpeg-turbo-dev libpng-dev \
        libpng libjpeg-turbo libjpeg-turbo-utils \
        icu-dev icu \
        git && \
        git config --global user.name "A-world" && \
        git config --global user.email "doghot1234@gmail.com"

RUN pecl install && \
    docker-php-ext-configure intl && \
    docker-php-ext-configure gd \
    --with-freetype --with-jpeg && \
    docker-php-ext-install -j$(nproc) intl gd

RUN cd /var/www/html/ && \
    mkdir aworld && \
    cd aworld && \
    git init && \
    git remote add origin https://github.com/kty776/aworld.git && \
    git config core.sparseCheckout true && \
    echo src/php/ >.git/info/sparse-checkout && \
    git pull origin master