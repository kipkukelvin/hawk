# Stage 1: Build PHP dependencies
FROM php:8.2-fpm AS php-base

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libpq-dev \
    zip \
    curl \
    npm \
    && docker-php-ext-install \
        pdo_mysql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
        zip \
        pdo_pgsql \
    && docker-php-ext-enable pdo_pgsql

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . /var/www/html

RUN composer install --no-dev --optimize-autoloader

# Build Vite assets
RUN npm install && npm run build

RUN chown -R www-data:www-data storage bootstrap/cache

# Stage 2: Production Image
FROM php:8.2-fpm

WORKDIR /var/www/html

COPY --from=php-base /var/www/html /var/www/html

# Expose the default Render port
EXPOSE 10000

# Start PHP-FPM (use Nginx or Render’s internal routing for HTTP)
CMD ["php-fpm"]
