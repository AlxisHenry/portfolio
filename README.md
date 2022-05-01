
# Mise en place du projet en développement

> *Mise en place de l'environnement de développement avec Laravel.*

- Cloner le repository

`git clone git@github.com:AlxisHenry/CCI-2021-PORTFOLIO.git main`

- Installation des dépendances

`composer install`

`npm install`

- Configurations

`cp .env.example .env`

`php artisan key:generate`

`php artisan cache:clear`

`sudo chown -R ubuntu:www-data /var/www/main`

- Développement

Vous pouvez commencer à coder à vous rendant à la racine du projet.

`npm run watch`