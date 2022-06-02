# Dependencies
composer install
npm install

# Rights
sudo chown -R ubuntu:ubuntu /var/www/main
sudo chown -R ubuntu:www-data /var/www/main/public
sudo chown -R ubuntu:www-data /var/www/main/storage
sudo chown -R ubuntu:www-data /var/www/main/bootstrap

# Databases configurations
php artisan migrate:fresh
sh database/imports/import.sh

# Laravel configurations
cp .env.example .env
php artisan key:generate
php artisan cache:clear
php artisan optimize
php artisan optimize:clear
npm run dev
