#!/bin/sh

if [ $1 = "y" ]
then
	sed -i 's/autoindex off/autoindex on/g' /etc/nginx/sites-enabled/localhost
	rm -rf /var/www/localhost/index.html
	echo "index ON"
	service nginx reload
elif [ $1 = "n" ]
then
	sed -i 's/autoindex on/autoindex off/g' /etc/nginx/sites-enabled/localhost
	cp /var/www/html/index.nginx-debian.html /var/www/localhost/index.html
	echo "index OFF"
	service nginx reload
else
	echo "Parameter must be y or n"
fi