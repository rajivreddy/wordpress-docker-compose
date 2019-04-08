# ALM Base php-apache image
FROM rajivnix/php-apache:7.2

WORKDIR /var/www/html
# Install zip and unzip
RUN apt-get update && apt-get install -y unzip zip
# Removing default apache config
RUN rm -rf /etc/apache2/sites-enabled/000-default.conf
COPY ./docker-utils/apache2/sites/*.conf /etc/apache2/sites-enabled
# Copy code base to apache root Dir
COPY ./docroot /var/www/html
# changing Dir permissions to apache default user
RUN chown www-data:www-data /var/www

EXPOSE 80
