FROM php:8.2-fpm-alpine

ARG PUID=1000
ENV PUID ${PUID}
ARG PGID=1000
ENV PGID ${PGID}

# persistent / runtime deps
RUN apk add --no-cache \
            acl \
            file \
            gettext \
            git \
            openssl \
            $PHPIZE_DEPS \
            libzip-dev \
            icu \
            icu-dev \
            zip \
            freetype-dev \
            libjpeg-turbo-dev \
            libpng-dev \
            libpq-dev \
            postgresql-client\
            imagemagick-dev \
            imagemagick \
            libjpeg-turbo \
            npm \
            chromium \
            libgomp \
            freetype-dev \
            chromium \
            nss \
            freetype \
            harfbuzz \
            ca-certificates \
            ttf-freefont \
            nodejs \
            yarn \
    && pecl install imagick \
  ;


RUN apk add --update npm
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl
RUN docker-php-ext-enable intl
RUN docker-php-ext-enable imagick
RUN docker-php-ext-install pdo pdo_pgsql zip pgsql pcntl
#RUN docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql
RUN docker-php-ext-install exif && docker-php-ext-enable exif
RUN docker-php-ext-install zip && docker-php-ext-enable zip
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd
#RUN pecl install redis && docker-php-ext-enable redis
RUN docker-php-ext-enable opcache

#RUN pecl install xdebug
#RUN docker-php-ext-enable xdebug


COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY docker/laravel/php.ini /usr/local/etc/php/conf.d/php.ini
#COPY docker/laravel/docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini


# https://getcomposer.org/doc/03-cli.md#composer-allow-superuser
ENV COMPOSER_ALLOW_SUPERUSER=1

# copy init script
COPY docker/laravel/init.sh /usr/local/bin/init.sh
RUN chmod +x /usr/local/bin/init.sh
COPY docker/laravel/seed.sh /usr/local/bin/seed.sh
RUN chmod +x /usr/local/bin/seed.sh
#
RUN addgroup -S -g "$PGID" sebi0815 && adduser -S -u "$PUID" user -G sebi0815

ENV PUPPETEER_EXECUTABLE_PATH=/usr/bin/chromium-browser

RUN yarn add puppeteer@13.5.0

# Add user so we don't need --no-sandbox.
RUN addgroup -S pptruser && adduser -S -G pptruser pptruser \
    && mkdir -p /home/pptruser/Downloads /app \
    && chown -R pptruser:pptruser /home/pptruser \
    && chown -R pptruser:pptruser /app

# Run everything after as non-privileged user.
USER pptruser
WORKDIR /var/www

# USER user
# Expose port 9000 and start php-fpm server (for FastCGI Process Manager)
CMD ["php-fpm"]

EXPOSE 9000

#
#
#
#WORKDIR /var/www
#
#CMD ["php-fpm"]
##
#EXPOSE 9000

# Install system dependencies
#RUN apt-get update && apt-get install -y \
#    git \
#    curl \
#    libpng-dev \
#    libonig-dev \
#    libxml2-dev \
#    zip \
#    unzip
#
## Clear cache
#RUN apt-get clean && rm -rf /var/lib/apt/lists/*
#
## Install PHP extensions
#RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd
#
## Get latest Composer
#COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
#
# Create system user to run Composer and Artisan Commands
#RUN adduser -G www-data,root -u $uid  $user
#RUN mkdir -p /home/$user/.composer && \
#    chown -R $user:$user /home/$user

# Set working directory
#WORKDIR /var/www
#
#USER $user
