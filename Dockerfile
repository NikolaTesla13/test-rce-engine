FROM php:8.1.0-apache

COPY ./public /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
