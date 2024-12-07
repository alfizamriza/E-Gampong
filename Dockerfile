FROM php:8.1-apache

# Install extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy application code
COPY . /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
