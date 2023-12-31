FROM php:8.0-apache

WORKDIR /var/www/html

COPY . /var/www/html

RUN apt-get update && \
    apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip

RUN a2enmod rewrite

EXPOSE 80