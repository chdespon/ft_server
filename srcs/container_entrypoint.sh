#!/bin/sh

mkdir /var/www/localhost

cp nginx.conf /etc/nginx/sites-available/localhost
ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/

mv wordpress /var/www/localhost/wordpress
mv phpMyAdmin /var/www/localhost/phpMyAdmin

mkdir -p /var/www/localhost/wordpress/wp-content/uploads/2020/11
mv images/fond-1.jpg images/logo-1.png /var/www/localhost/wordpress/wp-content/uploads/2020/11/

service mysql start
echo "CREATE DATABASE wordpress;" | mysql -u root
echo "CREATE USER 'wordpress'@'localhost';" | mysql -u root
echo "SET password FOR 'wordpress'@'localhost' = password('password');    " | mysql -u root
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpress'@'localhost' IDENTIFIED BY 'password';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root
mysql wordpress -u root < /root/wordpress.sql

cd ssl
chmod +x mkcert
./mkcert -install
./mkcert localhost
cd ..

service nginx reload
service nginx configtest
service nginx start
service nginx status

/etc/init.d/php7.3-fpm start
/etc/init.d/php7.3-fpm status

if [ $INDEX = off ]
then
	bash script/set_index.sh n
fi

tail -f /var/log/nginx/access.log /var/log/nginx/error.log