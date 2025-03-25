FROM ubuntu:latest

RUN apt-get update && apt-get install -y \
    php \
    php-mailparse \
    php-imap \
    php-mysql \
    php-xml \
    composer \
    apache2 \
    adduser \
    git

RUN adduser uvdesk -q --disabled-password --gecos ""

RUN \
    rm -rf /var/www/html/index.html \
    && a2enmod rewrite \
    && chown -R uvdesk:uvdesk /var/www/html

WORKDIR /var/www/html

COPY . /var/www/html

COPY ./.docker/config/apache2/httpd.conf /etc/apache2/apache2.conf

COPY ./.env /var/www/html/

RUN chown -R uvdesk:uvdesk /var/www/html

USER uvdesk

RUN composer install

USER root

RUN \
    chmod -R 777 /var/www/html/var \
                 /var/www/html/config \
                 /var/www/html/public \
                 /var/www/html/migrations


RUN \
    chmod -R 777 /var/www/html/.env \
                 /var/www/html/.env.dev \
                 /var/www/html/.env.example \
                 /var/www/html/.env.test

CMD ["apachectl", "-D", "FOREGROUND"]
