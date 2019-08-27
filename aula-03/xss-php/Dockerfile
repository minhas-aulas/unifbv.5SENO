FROM ubuntu:18.04

RUN apt-get update
RUN apt-get install -y software-properties-common
RUN add-apt-repository ppa:ondrej/php
RUN apt-get install -y nginx
RUN apt-get install -y php7.3-fpm

COPY default /etc/nginx/sites-available/default
RUN echo "daemon off;" >> /etc/nginx/nginx.conf
COPY index.php /var/www/html
COPY bootstrap /var/www/html

EXPOSE 80

CMD service php7.3-fpm start && nginx