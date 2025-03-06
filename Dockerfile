FROM ruby:slim AS builder
RUN apt-get update -y && \
    apt-get install -y --no-install-recommends \
        build-essential \
        curl \
        git \
        imagemagick \
        inotify-tools \
        locales \
        procps \
        zlib1g-dev
RUN apt-get clean && \
    apt-get autoremove && \
    rm -rf /var/lib/apt/lists/* /var/cache/apt/archives/*  /tmp/*

RUN sed -i '/en_US.UTF-8/s/^# //g' /etc/locale.gen && \
    locale-gen
ENV JEKYLL_ENV=production \
    LANG=it_IT.UTF-8 \
    LANGUAGE=it_IT:it \
    LC_ALL=it_IT.UTF-8
RUN gem install --no-document jekyll bundler

WORKDIR /app
COPY ./source/ .
COPY ./robots.txt .

RUN bundle install --no-cache

RUN bundle exec jekyll build

FROM nginx
LABEL author "Riccardo Ciucci <riccardo@ciucci.dev>"
LABEL author "Leonardo Puccini"
WORKDIR /usr/share/nginx/html
RUN mkdir -p assets
COPY --from=builder /app/_site/ .