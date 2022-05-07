UpdateProject () {

    echo '------------------------------';
    echo 'Mise à jour du projet en cours';
    echo '------------------------------';

    cd /var/www/main

    echo 'Recherche des dernières modification sur Github'
    sudo chown -R ubuntu:ubuntu /var/www/main
    git pull
    echo 'Paramétrage de Laravel'
    composer install
    npm install
    php artisan cache:clear
    echo 'Attribution des droits à Apache'
    sudo chown -R www-data:www-data /var/www/main

}

InitProject () {

    echo '---------------------------------';
    echo 'Initialisation du projet en cours';
    echo '---------------------------------';

    echo 'Clean de /var/www/main'
    sudo rm -rf /var/www/main
    sudo mkdir /var/www/main
    sudo chown -R ubuntu:www-data /var/www/main

    echo 'Clone du projet dans /var/www/main'
    git clone https://github.com/AlxisHenry/CCI-2021-PORTFOLIO.git /var/www/main

    sudo chown -R ubuntu:ubuntu /var/www/main
    cd /var/www/main

    echo 'Paramétrage de Laravel'
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan cache:clear

    echo 'Attribution des droits à Apache'
    sudo chown -R www-data:www-data /var/www/main
    sudo systemctl reload apache2

}

echo '------------------------------------';
echo 'Fichiers présents dans /var/www/main';
echo '------------------------------------';

ls -al /var/www/main

if [ -d /var/www/main/public ]; then
  UpdateProject;
else
  InitProject;
fi

echo '------------------';
echo 'Projet mis à jour.';
echo '------------------';