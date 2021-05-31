FROM php:7.4-fpm

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

RUN \
    apt-get update \
    && apt-get install -y \
        curl \
        libpng-dev \
        libonig-dev \
        libxml2-dev \
        librabbitmq-dev \
        zip \
        unzip \
        git \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* \
    && pecl install amqp \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd intl \
    && docker-php-ext-enable amqp \
    && groupadd -g 1000 www && useradd -u 1000 -ms /bin/bash -g www www \
    && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && sed -i 's#;date\.timezone =#date\.timezone = Europe/Warsaw#' "$PHP_INI_DIR/php.ini"

USER www
