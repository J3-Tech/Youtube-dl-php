FROM ghcr.io/j3-tech/docker-php-dev:main

RUN apt update && \
    apt install python3 -y
