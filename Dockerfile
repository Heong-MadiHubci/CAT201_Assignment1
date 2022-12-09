FROM php:7.1-apache-stretch
WORKDIR /var/www/html

COPY . .

RUN chown -R nobody .
RUN chmod 777 /var/
RUN chmod 777 /var/www/
RUN chmod 777 /var/www/html/
RUN chmod 777 /var/www/html/convertedFile/
RUN mkdir -p /usr/share/man/man1

# repo needed for jdk install below.
RUN echo 'deb http://deb.debian.org/debian stretch-backports main' > /etc/apt/sources.list.d/backports.list

# Update image & install application dependant packages.
RUN apt-get update && apt-get install -y \
nano \
libxext6 \
libfreetype6-dev \
libjpeg62-turbo-dev \
libpng-dev \
libmcrypt-dev \
libxslt-dev \
libpcre3-dev \
libxrender1 \
libfontconfig \
uuid-dev \
ghostscript \
curl \
wget \
ca-certificates-java

RUN apt-get -t stretch-backports install -y default-jdk-headless

EXPOSE 80


