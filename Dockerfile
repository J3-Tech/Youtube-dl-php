FROM ghcr.io/j3-tech/docker-php-dev:main-8.2-cli

RUN apt update && \
    apt install python3 -y

RUN install-php-extensions xdebug
