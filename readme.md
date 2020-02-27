# Steps to deploy zerouti project

## Reference Material
- [Nginx Configuration](https://www.digitalocean.com/community/tutorials/how-to-install-and-configure-laravel-with-lemp-on-ubuntu-18-04#step-5-%E2%80%94-setting-up-nginx)
- [PHP Configuration](https://www.rosehosting.com/blog/how-to-install-php-7-3-on-ubuntu-16-04/)

##### Update OS
- `apt update && apt upgrade`

##### Install Nginx
- `apt install nginx`

##### Create virtual host at sites-available, copy and paste configuration contents of nginx.stub that comes with this project which found under root directory.
- `sudo nano /etc/nginx/sites-available/zerouti`

##### Activate the new virtual host configuration file, create a symbolic link to 
- `sudo ln -s /etc/nginx/sites-available/zerouti /etc/nginx/sites-enabled/`

##### To confirm that the configuration doesnt contain any syntax errors, you can use:
- `sudo nginx -t`

##### Then go to /etc/nginx/sites-available/default file remove (comment out) default flag and add it to new virtual host file
- [Laravel Nginx configurations stub](https://laravel.com/docs/6.x/deployment)

##### To apply the changes, reload Nginx with:
- `sudo systemctl reload nginx`

##### Install PHP
- `LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php`
- `apt install php7.3 php7.3-cli php7.3-common`
- `apt install php7.3-bcmath php7.3-curl php7.3-fpm php7.3-gd php7.3-mbstring php7.3-xml php7.3-zip php7.3-mysql`

##### Install GIT
- `apt install git`

##### Install Composer
- `apt install composer`

##### Install MySql
- `apt install mysql`

##### Restart mysql server.
- `sudo systemctl restart mysql` 

##### Clone project
- `git clone https://github.com/myDignityTz/zerouti.git zerouti`
- `cd zerouti`

##### Install laravel project dependencies
- `composer install`

##### Setup configuration environment variables
- `cp .env.example .env`

##### Give permission
- `sudo chown -R www-data.www-data /var/www/zerouti/storage`
- `sudo chown -R www-data.www-data /var/www/zerouti/bootstrap/cache`
