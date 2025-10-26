# Mulai dari "kotak bekal" PHP resmi yang sudah ada Apache-nya
FROM php:8.2-apache

# Instal ekstensi PHP yang dibutuhin buat MySQL
# dan alat-alat lain (composer, git, zip)
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    && docker-php-ext-install mysqli pdo pdo_mysql

# Instal Composer (buat manajemen library PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Nyalain modul rewrite Apache (penting buat framework kayak Laravel/Symfony)
RUN a2enmod rewrite
