ARG APACHE_VERSION=""
FROM httpd:${APACHE_VERSION}-alpine

RUN echo "Include /usr/local/apache2/conf/apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf

RUN echo "Listen 443" \
    >> /usr/local/apache2/conf/httpd.conf

COPY ./apache.conf /usr/local/apache2/conf/apache.conf