FROM php:7.4-apache

WORKDIR /var/www/html
COPY ./src /var/www/html/

RUN apt-get update && apt-get install -y \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mysqli

EXPOSE 80