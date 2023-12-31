FROM mysql:latest
COPY base.sql /docker-entrypoint-initdb.d/
ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=blog-php
ENV MYSQL_USER=blog-php
ENV MYSQL_PASSWORD=blog-php