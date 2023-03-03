
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

# Copia os arquivos do projeto para o container
COPY . /var/www/html

# Instalação das dependências do Laravel
RUN composer install --no-dev --no-interaction --optimize-autoloader

# Instalação das dependências do Vue
RUN npm install

# Geração dos arquivos do Vue
RUN npm run production

# Permissões de arquivos
RUN chown -R www-data:www-data /var/www/html/storage && chmod -R 775 /var/www/html/storage

# Exposição da porta do Apache
EXPOSE 80

# Inicialização do Apache
CMD ["apache2-foreground"]