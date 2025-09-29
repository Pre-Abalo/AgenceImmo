# Étape 1 : base PHP avec extensions
FROM php:8.2-cli

# Installer dépendances système
RUN apt-get update && apt-get install -y \
    unzip git curl libpq-dev libonig-dev libzip-dev zip \
    && docker-php-ext-install pdo pdo_pgsql

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copier code
WORKDIR /app
COPY . .

# Installer dépendances Laravel
RUN composer install --no-dev --optimize-autoloader
RUN php artisan key:generate

# Installer Node + build front
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install && npm run build

# Port
EXPOSE 8000

# Commande de démarrage
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
