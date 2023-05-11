# # ambil dari php fpm kita
# FROM hex4coder/php-8.2-fpm-alpine:latest

# WORKDIR /var/www/html

# # Install Composer
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# # Install Node JS and NPM
# RUN apk add --update npm




FROM hex4coder/php-8.2-fpm-alpine:with-composer-npm

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions xml 

RUN install-php-extensions gd
RUN install-php-extensions zip
RUN install-php-extensions iconv
RUN install-php-extensions simplexml 
RUN install-php-extensions xmlreader
RUN install-php-extensions zlib