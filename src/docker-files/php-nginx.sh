#!/bin/bash

cd /var/www/html/

php artisan config:cache
php artisan migrate  --force

touch storage/logs/laravel.log

rm -rf /var/www/html/storage/httpcache/*
cd /var/www/html
php artisan cache:clear
php artisan view:cache

php composer clear-cache
php composer dump-autoload --optimize


chown www-data:www-data /var/www/html/public -R
chown www-data:www-data /var/www/html/resources -R
chown www-data:www-data /var/www/html/storage -R

/etc/init.d/supervisor start

cron
nginx &
php-fpm -D | tail -f storage/logs/laravel.log
