FROM alpine:3.8

ADD nginx.conf /etc/nginx/
ADD api.conf /etc/nginx/conf.d/

RUN apk add --update nginx \
	&& echo "upstream php-upstream { server php:9001; }" > /etc/nginx/conf.d/upstream.conf \
	&& mkdir -p /var/www/html \
	&& adduser -D -g '' -G www-data www-data

CMD ["nginx"]

EXPOSE 80
EXPOSE 443
