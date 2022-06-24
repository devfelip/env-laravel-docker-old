FROM wyveo/nginx-php-fpm:php80
WORKDIR /usr/share/nginx
#RUN rm -rf /usr/share/nginx/html
RUN chmod -R 755 /usr/share/nginx/html
#COPY . /usr/share/nginx
#RUN chmod o+w /usr/share/nginx -R
#RUN ln -s projs html
