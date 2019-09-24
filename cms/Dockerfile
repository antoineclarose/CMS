FROM ubuntu:latest
MAINTAINER Antoine Chagnon Larose <aclarose@creditshop.com>

# Install apache, PHP, and supplimentary programs. openssh-server, curl, and lynx-cur are for debugging the container.
RUN apt-get update && apt-get -y upgrade && apt-get install -y software-properties-common && add-apt-repository ppa:ondrej/php && apt-get -y install curl && DEBIAN_FRONTEND=noninteractive apt-get -y install \
    apache2 php7.0 php7.0-mysql libapache2-mod-php7.0 php7.0-gd php7.0-mbstring lynx lynx-common libpng-dev libxml2-dev bash git npm;


# Enable apache mods.
RUN a2enmod php7.0 && a2enmod rewrite && a2enmod proxy && a2enmod proxy_http



# Manually set up the apache environment variables
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid


# Expose apache.
EXPOSE 8083
# Update the default apache site with the config we created.
COPY cms.apache.conf /etc/apache2/sites-enabled/000-default.conf


RUN cd  /var/www; \
    git clone https://github.com/directus/directus.git; \
    chown -R www-data:www-data /var/www/directus; \
    cd /var/www/directus; \
    chown -R www-data:www-data /var/www/directus; \
    chown 777 /var/www/directus/public; \
    chown 777 /var/www/directus/logs; \
    chown 777 /var/www/directus/public/uploads

COPY api.php /var/www/directus/config/api.php

# Update the PHP.ini file, enable <? ?> tags and quieten logging.
#RUN chown 777 /etc/php/7.0/apache2/php.ini && sed -i "s/short_open_tag = Off/short_open_tag = On/" /etc/php/7.0/apache2/php.ini \
# && sed -i "s/error_reporting = .*$/error_reporting = E_ERROR | E_WARNING | E_PARSE/" /etc/php/7.0/apache2/php.ini
# && echo "extension = pdo.so" >> /etc/php/7.0/apache2/php.ini \
# && echo "extension = pdo_mysql.so" >> /etc/php/7.0/apache2/php.ini;

# Init DB
#RUN cd /var/www/directus/bin  && ./directus install:database && ./directus install:install -e alarose@creditshop.com> -p Password1!

# By default start up apache in the foreground, override with /bin/bash for interative.
CMD source /etc/apache2/envvars
CMD ["apachectl", "-D", "FOREGROUND"]