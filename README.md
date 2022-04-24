
# Mise en place du projet

> *Mise en place de l'environnement de développement avec Laravel.*

Commencer par installer les différents packages npm :

`npm install`

Copier le fichier de configuration `.env.example` en un `.env`,

`cp .env.example .env`

Générer une nouvelle APP_KEY (se génère dans le .env),

`php artisan key:generate`

En dernier, compiler les assets avec :

`npm run mix`
