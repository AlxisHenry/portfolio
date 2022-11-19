#!/bin/bash

# ========================================
# Setup application in desired environment
# ========================================

api_request () {
	RESPONSE=$(curl -s https://api.alexishenry.eu/$1/smtp)
	RESPONSE_CODE=$(echo $RESPONSE | awk -F 'code' '{print $2}' | sed 's/"://' | awk -F ',' '{print $1}')
	if [ $RESPONSE_CODE -eq 200 ]
	then 
		MAIL_USERNAME=$(echo $RESPONSE | awk -F 'smtp'  '{print $2}' | awk -F 'email' '{print $2}' | cut -d ',' -f 1| sed 's/":"//' | sed 's/"//')
		MAIL_PASSWORD=$(echo $RESPONSE | awk -F 'smtp'  '{print $2}' | awk -F 'password' '{print $2}' | cut -d ',' -f 1| sed 's/":"//' | sed 's/"//' | sed 's/}}}//')
		echo -e "\n  The email server has been correctly configured. Response code : [\e[0;33m$RESPONSE_CODE\e[0m]"
	else
		echo -e "\n  The provided token isn't correct. Response code : [\e[0;33m$RESPONSE_CODE\e[0m]"
	fi
}

env_app () {
	# SET APP_ENV
	APP_ENV=$([ "$1" = "dev" ] && echo "local" || echo "production")
	echo -e "  Application environment (local/production) [\e[0;33m$APP_ENV\e[0m]"
	printf "> $APP_ENV\n"
	# SET APP_DEBUG
	APP_DEBUG=$([ "$1" = "dev" ] && echo "true" || echo "false")
	echo -e "\n  Application debug mode (true/false) [\e[0;33m$APP_DEBUG\e[0m]"
	printf "> $APP_DEBUG\n"
	# SET APP_URL
	APP_URL=$([ "$1" = "dev" ] && echo "http:\/\/localhost" || echo "https:\/\/domain.com")
	echo -e "\n  Application url [\e[0;33m$APP_URL\e[0m]"
	printf "> $APP_URL\n"
}

env_db () {
	# SET DB_DATABASE
	echo -e "  Database name [\e[0;33mnull\e[0m]"
	printf '> '
	read DB_DATABASE
	# SET DB_USERNAME
	echo -e "\n  Username [\e[0;33mnull\e[0m]"
	printf '> '
	read DB_USERNAME
	# SET DB_PASSWORD
	echo -e "\n  Password [\e[0;33mnull\e[0m]"
	printf '> '
	read DB_PASSWORD # -s to hide the value
}

env_mails () {
	# API KEY
	echo -e "  Api key for emails [\e[0;33mnull\e[0m]"
	printf '> '
	read API_KEY
	MAIL_USERNAME=""
	MAIL_PASSWORD=""
	api_request $API_KEY;
}

env () {
	echo -e "\n[\e[0;35m APPLICATION CONFIGURATION \e[0m]\n"
	env_app $1;
	echo -e "\n[\e[0;35m DATABASE CONFIGURATION \e[0m]\n"
	env_db;
	echo -e "\n[\e[0;35m MAILS CONFIGURATION \e[0m]\n"
	env_mails;
	# .ENV VARIABLES
	ENV="APP_ENV APP_DEBUG APP_URL DB_DATABASE DB_USERNAME DB_PASSWORD MAIL_USERNAME MAIL_PASSWORD"
	# SED .ENV FILE
	for ENV_VAR in ${ENV}; do
		sed "s/$ENV_VAR=/&${!ENV_VAR}/" -i .env
	done
}

base () {
	# Create .env file
	cp .env.example .env
	# Generate application key
	php artisan key:generate > /dev/null 2>&1
	# Link storage to public
	php artisan storage:link > /dev/null 2>&1
	# Build assets
	# npm run build
	# Configure .env
	env $1;
    permissions;
}

database () {
    sudo mysql -e "CREATE DATABASE IF NOT EXISTS $DB_DATABASE"
    php artisan migrate:fresh
    php artisan make:user root root 1
    sudo mysql $DB_DATABASE < database/imports/news.sql
    sudo mysql $DB_DATABASE < database/imports/resources.sql
    sudo mysql $DB_DATABASE < database/imports/projects.sql
}

development () {
	# Dependencies
	npm install > /dev/null 2>&1
	composer install --dev > /dev/null 2>&1
	# Base commands
	base dev;
	# Build assets
	npm run build > /dev/null 2>&1
}

production () {
	# Dependencies
	# npm install
	composer install --no-dev --optimize-autoloader > /dev/null 2>&1
	# Base commands
	base prod;
}

permissions () {
    sudo chown -R ubuntu:ubuntu public/ storage/ bootstrap/
}

setup () {
	clear
	echo -e "\n[\e[0;32m START CCI-APP SETUP \e[0m]"
	echo -e "\n[\e[0;35m SELECT ENVIRONMENT \e[0m]\n"
	echo -e "  What environment do you want to install? (dev/prod) [\e[0;33mdev\e[0m]"
	read -p "> " environment
	case $environment in
		[dev]* ) development;;
		[prod]* ) production;;
		* ) development;;
	esac
}

setup;

echo -e "\n[\e[0;32m SETUP COMPLETED \e[0m]\n"