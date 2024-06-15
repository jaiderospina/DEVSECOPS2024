FROM php:8.1-apache

# Copiar los archivos del proyecto al directorio raíz del servidor web
COPY . /var/www/html/

# Establecer los permisos adecuados
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Instalar extensiones de PHP necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Exponer el puerto 80 para el servidor web
EXPOSE 80