FROM php:7.3
RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring
RUN git clone https://github.com/erangakodikara/covidrepo.git && cd covidrepo && git checkout development
WORKDIR /app
RUN cp -r ../covidrepo/* /app
RUN ls -al
RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=81
EXPOSE 81