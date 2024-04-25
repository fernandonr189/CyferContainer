FROM mariadb:latest

RUN apt-get update && apt-get upgrade -y

ENV MYSQL_USER=cyfer_db_user \
    MYSQL_PASSWORD=password \
    MYSQL_DATABASE=cyfer_db \
    MYSQL_ROOT_PASSWORD=xxx

ADD . /

EXPOSE 3306

CMD ["mariadb"]