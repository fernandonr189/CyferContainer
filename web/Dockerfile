FROM ubuntu:jammy

RUN apt-get update && apt-get -y upgrade && DEBIAN_FRONTEND=noninteractive apt-get -y install \
    apache2 php php-mysql libapache2-mod-php curl lynx-common lynx git

RUN php="$(php -v)" && echo $php
RUN a2enmod php8.1
RUN a2enmod rewrite

RUN sed -i "s/short_open_tag = Off/short_open_tag = On/" /etc/php/8.1/apache2/php.ini
RUN sed -i "s/error_reporting = .*$/error_reporting = E_ERROR | E_WARNING | E_PARSE/" /etc/php/8.1/apache2/php.ini

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

ENV DATABASE_IP db
ENV DATABASE_NAME cyfer_db
ENV DATABASE_USER cyfer_db_user
ENV DATABASE_PW password

EXPOSE 80

ADD Proyecto-WEB /var/www/site
ADD apache-config.conf /etc/apache2/sites-enabled/000-default.conf

RUN chmod 777 /var/www/site/php/images
RUN chmod 777 /var/www/site/php

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN cd /var/www/site/php/ && composer install

CMD /usr/sbin/apache2ctl -D FOREGROUND