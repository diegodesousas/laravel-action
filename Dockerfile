FROM phpearth/php:7.2

RUN apk add --no-cache composer
RUN apk add --no-cache php7.2-dom php7.2-xml php7.2-xmlwriter php7.2-tokenizer php7.2-session php7.2-dev gcc g++
RUN pecl install xdebug
RUN echo "zend_extension=/usr/lib/php/7.2/modules/xdebug.so" >> /etc/php/7.2/php.ini
