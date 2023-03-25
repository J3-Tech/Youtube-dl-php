FROM jchellem/php-dev:main

RUN apt update && \
    apt install python3 -y

RUN install-php-extensions xdebug
