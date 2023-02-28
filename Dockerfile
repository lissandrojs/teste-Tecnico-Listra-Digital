FROM node:14

WORKDIR /app

RUN npm install

COPY . .

RUN npm run build

FROM php:7.4-fpm

# Instala as dependências
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip pdo_mysql

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
