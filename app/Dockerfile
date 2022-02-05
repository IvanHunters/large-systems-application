FROM php:7.4-fpm

COPY ./ /var/www/html
# debian packages
RUN apt-get update && apt-get install -y --no-install-recommends \
    htop \
    wget \
    lynx \
    curl \
    mc \
    vim \
    libmcrypt-dev \
    libicu-dev \
    libfreetype6-dev \
    libjpeg-dev \
    libpng-dev \
    libxml2-dev \
    unzip \
    locales \
    tzdata \
    nano

RUN docker-php-ext-install mysqli \
        && docker-php-ext-install pdo_mysql

# php composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN cd /var/www/html \
    && cp .env.example .env \
    && composer install

RUN php artisan key:generate 


RUN chmod -R 777 /var/www/html/storage

# cleanup
RUN apt-get clean \
    && rm -fr /var/lib/apt/lists/* \
    && rm -fr /tmp/* \
    && rm -fr /var/tmp/*

WORKDIR /var/www/html
