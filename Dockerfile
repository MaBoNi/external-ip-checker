# Use a lightweight PHP image with Apache
FROM php:7.4-apache

# Copy source code into the container
COPY ./src /var/www/html

# Set permissions for the Apache web directory
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Enable Apache mod_rewrite if needed (not needed here, but good practice)
RUN a2enmod rewrite