domain := "alexishenry.eu"
server := "neon"
artisan := php artisan

.PHONY: help
help: ## Affiche cette aide
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY: lint
lint: ## Lance le linter
	@vendor/bin/phpstan analyse -c phpstan.neon --xdebug

.PHONY: deploy
deploy: ## Déploie une nouvelle version du site
	ssh -A $(server) 'cd $(domain) && git pull origin main && make install'

.PHONY: install
install: ## Réalise les installations nécessaires
	$(artisan) down
	composer install --no-dev --optimize-autoloader
	$(artisan) migrate
	$(artisan) optimize:clear
	sudo service php8.1-fpm reload
	$(artisan) up

.PHONY: rollback
rollback: ## Annule la dernière migration
	$(artisan) migrate:rollback

# -----------------------------------
# Dépendances
# -----------------------------------

public/build: package.json
	npm install
	npm run build
