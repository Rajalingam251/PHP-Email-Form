# Use the official PHP image with Apache
FROM php:8.1-apache

# Install necessary PHP extensions
RUN apt-get update && apt-get install -y \
    libonig-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo mbstring

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install and configure PHPMailer dependencies
RUN docker-php-ext-install sockets

# Set working directory inside the container
WORKDIR /var/www/html

# Copy project files to the container
COPY . .

# Expose port 80 for the web server
EXPOSE 80

# Start Apache in foreground mode
CMD ["apache2-foreground"]
