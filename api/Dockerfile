# Utilise PHP avec extensions pour Laravel
FROM php:8.2-fpm

# Installer des dépendances système
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copier le projet dans le container
WORKDIR /var/www/html
COPY . .

# Installer les dépendances Laravel
RUN composer install --no-interaction --optimize-autoloader

# Permissions pour storage et bootstrap/cache
RUN chown -R www-data:www-data storage bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# Exposer le port PHP-FPM
EXPOSE 9000

CMD ["php-fpm"]