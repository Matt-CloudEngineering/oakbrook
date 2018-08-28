#!/usr/bin/env bash
echo "Provisioning virtual machine..."

echo "Initial Update"
apt-get update -y  > /dev/null

echo "Installing Git"
apt-get install git -y > /dev/null

echo "Installing Nginx"
apt-get install nginx -y > /dev/null

echo "Updating PHP repository"
apt-get install python-software-properties build-essential -y > /dev/null
add-apt-repository ppa:ondrej/php -y > /dev/null
apt-get update -y > /dev/null

echo "Installing PHP"
apt-get install php7.0 php5-dev php7.0-cli php7.0-fpm -y > /dev/null

echo "Installing PHP extensions"
apt-get install curl php7.0-curl php7.0-gd php7.0-mcrypt php7.0-mysql php7.0-mbstring -y > /dev/null

echo "Configuring PHP"
cp /var/www/provision/cli-php.ini /etc/php/7.0/cli/php.ini
cp /var/www/provision/fpm-php.ini /etc/php/7.0/fpm/php.ini

echo "Installing PHPUnit"
wget https://phar.phpunit.de/phpunit.phar > /dev/null
chmod +x phpunit.phar > /dev/null
mv phpunit.phar /usr/local/bin/phpunit > /dev/null

echo "Installing Composer"
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer > /dev/null

echo "Installing Zip"
apt-get install zip -y > /dev/null

echo "Preparing MySQL"
# debconf-utils allows the root password to be inputed as a command line argument, needed for installation
apt-get install debconf-utils -y > /dev/null
debconf-set-selections <<< "mysql-server mysql-server/root_password password adidas27"
debconf-set-selections <<< "mysql-server mysql-server/root_password_again password adidas27"

echo "Installing MySQL"
apt-get install mysql-server -y > /dev/null

echo "Configuring MySQL"
cp /var/www/provision/my.cnf /etc/mysql/my.cnf  > /dev/null
sed -i 's/bind-address.*/bind-address = 0.0.0.0/' /etc/mysql/my.cnf  > /dev/null# This will overwrite any changes to my.cnf made for bind-address
service mysql restart  > /dev/null

echo "Configuring Nginx"
cp /var/www/provision/nginx_vhost /etc/nginx/sites-available/nginx_vhost > /dev/null
ln -s /etc/nginx/sites-available/nginx_vhost /etc/nginx/sites-enabled/  > /dev/null
rm -rf /etc/nginx/sites-available/default  > /dev/null
service nginx restart > /dev/null

echo "Installing Node/NPM"
apt-get update -y > /dev/null
apt-get install nodejs-legacy -y > /dev/null
apt-get install npm -y > /dev/null

//echo "Installing NPM Modules"
//sudo npm install --global gulp  > /dev/null

echo "Setting up Project!!"
cd /var/www
composer install > install.log
cp .env.example .env
php artisan key:generate >> install.log

echo "Complete!"
