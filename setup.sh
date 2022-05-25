# Configuration
cp .env.example .env

# Packages
composer install
npm install

# Access
sudo chown -R ubuntu:ubuntu /var/www/main
sudo chown -R ubuntu:www-data /var/www/main/public
sudo chown -R ubuntu:www-data /var/www/main/storage
sudo chown -R ubuntu:www-data /var/www/main/bootstrap

# Laravel configuration
php artisan key:generate
php artisan cache:clear
php artisan optimize
php artisan optimize:clear
npm run prod
