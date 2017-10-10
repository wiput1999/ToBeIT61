# PHP 7.1 Apache as Base
FROM php:7.1-apache

# Update Core PHP extension.
RUN apt-get update -yqq
RUN apt-get install git libcurl4-gnutls-dev libicu-dev libmcrypt-dev libvpx-dev libjpeg-dev libpng-dev libxpm-dev zlib1g-dev libfreetype6-dev libxml2-dev libexpat1-dev libbz2-dev libgmp3-dev libldap2-dev unixodbc-dev libpq-dev libsqlite3-dev libaspell-dev libsnmp-dev libpcre3-dev libtidy-dev -yqq

# Compile PHP, include these extensions.
RUN docker-php-ext-install mbstring mcrypt pdo_mysql curl json intl gd xml zip bz2 opcache

# Install and enable mongodb extension
RUN pecl install mongodb
RUN docker-php-ext-enable mongodb

# Install composer
RUN curl -sS https://getcomposer.org/installer | php

# Change document root to subdirectory "public"
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Enable mod_rewrite
RUN a2enmod rewrite

# Copy php.ini
COPY config/php.ini /usr/local/etc/php/

# Copy application into document root
COPY application/ /var/www/html/

# Create storage symlink directory (public/storage <--> storage/app/public)
RUN php artisan storage:link-docker

# Run permission for storage
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 777 /var/www/html/storage

# Mark public storage for external volume
VOLUME /var/www/html/storage/app/public

# Copy entrypoint script
COPY docker-laravel-entrypoint /usr/local/bin/

# Set entrypoint script
ENTRYPOINT ["docker-laravel-entrypoint"]
# Set default executing command
CMD ["apache2-foreground"]
