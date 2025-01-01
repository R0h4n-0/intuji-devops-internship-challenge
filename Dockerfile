FROM php:7.4-apache
COPY .  /var/www/html/
EXPOSE 85
CMD ["apache2-foreground"]
