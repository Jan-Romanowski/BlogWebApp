# Base image
FROM php:8.4-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpq-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    nodejs \
    npm \
    postgresql-client \
    && docker-php-ext-install pdo pdo_pgsql mbstring xml bcmath


# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . /var/www/html

# Install PHP dependencies (cached if composer.json unchanged)
COPY composer.json composer.lock ./
RUN composer install --no-interaction --prefer-dist

# Copy rest of the project
COPY . /var/www/html

# Copy .env if missing and generate app key
RUN if [ ! -f ".env" ]; then cp .env.example .env; fi
RUN php artisan key:generate

# Expose port
EXPOSE 8000

# Start Laravel with entrypoint script
CMD ["sh", "/var/www/html/start.sh"]
