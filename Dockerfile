FROM php:7.4-cli

COPY composer.lock* composer.json* /var/www/

WORKDIR /var/www

COPY . /var/www

EXPOSE 8000

CMD [ "php", "artisan", "serve" ]