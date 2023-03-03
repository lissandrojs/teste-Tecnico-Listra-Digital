FROM node:14

WORKDIR /app

RUN npm install

COPY . .

RUN npm run build

FROM php:8.0-apache

# Instalação de dependências
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    libzip-dev \
    npm \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install intl \
    && docker-php-ext-install zip

# Instalação do Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Diretorio de trabalho
WORKDIR /var/www/html

COPY . .

RUN cp .env.example .env

RUN php artisan key:generate

#Dependencias Laravel
RUN composer install

# Executa as migrations e seeds
RUN php artisan migrate:fresh --seed

EXPOSE 8000

# Inicia o servidor PHP-FPM
CMD ["php-fpm"]
