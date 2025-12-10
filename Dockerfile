# Stage 1: Build PHP dependencies
FROM php:8.2-fpm AS php-base

RUN apt-get update && apt-get install -y \
    git unzip libpng-dev libonig-dev libxml2-dev libzip-dev zip curl npm \
    libpq-dev \                     # <-- REQUIRED FOR POSTGRES
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip \
    && docker-php-ext-install pdo_pgsql pgsql    # <-- NOW WORKS

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . /var/www/html

RUN composer install --no-dev --optimize-autoloader

# Build assets (Vite)
RUN npm install && npm run build

RUN chown -R www-data:www-data storage bootstrap/cache

# Stage 2: Production Image
FROM php:8.2-cli

WORKDIR /var/www/html

COPY --from=php-base /var/www/html /var/www/html

EXPOSE 10000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
