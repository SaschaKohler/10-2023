#!/bin/sh

cd /var/www || exit

php artisan db:seed
