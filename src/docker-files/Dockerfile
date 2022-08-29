FROM php:8.0-fpm

# Update packages and install composer and PHP dependencies.
RUN apt-get update && \
  DEBIAN_FRONTEND=noninteractive apt-get install -y \
    libpq-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libmcrypt-dev \
    libpng-dev \
    libbz2-dev \
    libxml2-dev \
    libzip-dev \
    cron \
    procps \
    mc \
    wget \
    gnupg \
    git \
    jpegoptim \
    libonig-dev \
    optipng \
    pngquant \
    gifsicle \
    curl libcurl4-gnutls-dev librtmp-dev \
    && pecl channel-update pecl.php.net \
    && pecl install apcu

# PHP Extensions
RUN docker-php-ext-install zip \
    && docker-php-ext-install bz2 \
    && docker-php-ext-install mbstring \
    && docker-php-ext-install pdo pdo_pgsql \
    && docker-php-ext-install pcntl \
    && docker-php-ext-install opcache \
    && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-install gd curl \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && docker-php-ext-install exif \
    && docker-php-ext-enable exif \
    && docker-php-ext-install xml


# Memory Limit
RUN echo "memory_limit=2048M" > $PHP_INI_DIR/conf.d/memory-limit.ini
RUN echo "max_execution_time=900" >> $PHP_INI_DIR/conf.d/memory-limit.ini
RUN echo "extension=apcu.so" > $PHP_INI_DIR/conf.d/apcu.ini
RUN echo "post_max_size=20M" >> $PHP_INI_DIR/conf.d/memory-limit.ini
RUN echo "upload_max_filesize=20M" >> $PHP_INI_DIR/conf.d/memory-limit.ini

# Time Zone
RUN echo "date.timezone=${PHP_TIMEZONE:-UTC}" > $PHP_INI_DIR/conf.d/date_timezone.ini

# Display errors in stderr
RUN echo "display_errors=stderr" > $PHP_INI_DIR/conf.d/display-errors.ini

# Disable PathInfo
RUN echo "cgi.fix_pathinfo=0" > $PHP_INI_DIR/conf.d/path-info.ini

# Disable expose PHP
RUN echo "expose_php=0" > $PHP_INI_DIR/conf.d/path-info.ini

# Install nginx
RUN echo 'deb http://nginx.org/packages/mainline/debian/ stretch nginx' >> /etc/apt/sources.list \
    && curl -fsSL http://nginx.org/keys/nginx_signing.key | apt-key add - >/dev/null 2>&1 \
    && apt-get update -y \
    && sleep 5 \
    && apt-get install -y nginx --allow-unauthenticated

# Install Composer and nodejs
RUN curl -k -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN curl -k -sS https://deb.nodesource.com/setup_10.x -o nodesource_setup.sh && sed -i 's/curl/curl -k /g' nodesource_setup.sh  && bash nodesource_setup.sh
RUN apt-get install -y nodejs

RUN chown root:root /var/www/html

ADD . /var/www/html
WORKDIR /var/www/html

RUN rm -rf public/css public/js storage/httpcache _ide_helper.php .phpstorm.meta.php
RUN rm -rf composer.lock

RUN composer install
RUN composer dump-autoload

RUN php artisan route:cache
RUN php artisan view:cache
RUN php artisan config:cache
RUN php artisan storage:link
RUN php artisan key:generate

RUN chmod 777 /var/www/html/bootstrap/cache -R
RUN chmod 777 /var/www/html/storage/ -R

#RUN npm install --save-dev webpack
#RUN npm install
#RUN npm install -g svgo
#RUN npm run production


RUN chmod 777 public/mix-manifest.json || true
RUN chmod 777 public/js/app.js public/css/app.css storage/app/ || true
RUN chown -R www-data:www-data public/

RUN chmod -R 777 /var/www/html/storage

RUN mkdir /var/www/html/storage/app/public -p || true
RUN chmod -R 777 /var/www/html/storage/app/public

RUN mkdir /var/cache/nginx -p
RUN mkdir /var/lib/nginx -p
RUN touch /var/run/nginx.pid

ADD docker-files/php-nginx.sh /php-nginx.sh
RUN chmod +x /php-nginx.sh

ADD /docker-files/laravel.conf /etc/supervisor/conf.d/laravel.conf

COPY /docker-files/nginx.conf /etc/nginx/nginx.conf
ADD /docker-files/sites-enabled /etc/nginx/sites-enabled
RUN rm -rf /etc/nginx/conf.d/default.conf
RUN mkdir /etc/nginx/ssl/ -p
ADD /docker-files/server.crt /etc/nginx/ssl/server.crt
ADD /docker-files/server.key /etc/nginx/ssl/server.key

RUN apt-get update && \
  DEBIAN_FRONTEND=noninteractive apt-get install -y libwebp-dev webp  imagemagick libmagickwand-dev libwebp-dev libwebp-dev libpng-dev
RUN docker-php-ext-configure gd     --with-jpeg=/usr/lib   --with-webp=/usr/lib   --with-freetype=/usr/include/freetype2 &&   docker-php-ext-install gd

CMD ["/bin/bash", "/php-nginx.sh"]
