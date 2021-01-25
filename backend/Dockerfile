FROM alpine:3.11

# Install packages
RUN apk update && apk add --no-cache curl gnupg php7 php7-pdo php7-pdo_mysql php7-fpm php7-json php7-openssl \
        php7-curl php7-xml php7-phar php7-intl php7-dom php7-xmlreader php7-ctype php7-session php7-mbstring \
        php7-gd php7-tokenizer php7-xmlwriter nginx supervisor composer ca-certificates && update-ca-certificates 
           
# Configure nginx
COPY docker/nginx.conf /etc/nginx/nginx.conf

# Configure PHP-FPM
COPY docker/fpm-pool.conf /etc/php7/php-fpm.d/www.conf
COPY docker/php.ini /etc/php7/conf.d/zzz_custom.ini

# Configure supervisord
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Add application
WORKDIR /app
COPY . .
RUN composer install --no-dev

# Expose php
EXPOSE 3001

ENV PATH $PATH:/opt/mssql-tools/bin

# Let supervisord start nginx & php-fpm
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]

# Configure a healthcheck to validate that everything is up&running
HEALTHCHECK --timeout=10s CMD curl --silent --fail http://127.0.0.1:3001/fpm-ping