FROM jchellem/php-dev:main-8.1-cli

RUN apt update && \
    apt install python3 ffmpeg -yqq
