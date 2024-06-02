FROM php:7.4-fpm

# Install PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www/html
