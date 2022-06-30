clear

if [ -e composer.json ]
then
    echo ""
else
    echo "\e[1;41m                                                \e[0m";
    echo "\e[1;41m      YOU NEED TO BE IN THE PROJECT FOLDER      \e[0m";
    echo "\e[1;41m                                                \e[0m";
    exit
fi

DEFAULT_DATA () {
    sh database/imports/import.sh
}

DB () {
    php artisan migrate:fresh
    php artisan make:user root root
    echo "\e[1;41m                                                               \e[0m";
    echo "\e[1;41m      FOR IMPORT DEFAULT DATA, UR DB NAME NEED TO BE main      \e[0m";
    echo "\e[1;41m                                                               \e[0m";
    while true; do
    	read -p "Import default data ? [ db_name need to be main ] (yes/no) " import
    	case $import in
    		[yes]* ) DEFAULT_DATA; break;;
        	[no]* ) break;;
            * ) ;;
    	esac
    done;
}

TESTS () {
    npm run tests
}


# Dependencies
composer install
npm install

# Laravel configurations
cp .env.example .env
php artisan key:generate
php artisan cache:clear
php artisan optimize
npm run dev


while true; do
	read -p "Configure the database ? (yes/no) " database
	case $database in
		[yes]* ) DB; break;;
    	[no]* ) break;;
        * ) ;;
	esac
done;

echo "\e[1;41m                                                        \e[0m";
echo "\e[1;41m      DOESN'T WORK IF YOU DONT IMPORT DEFAULT DATA      \e[0m";
echo "\e[1;41m                                                        \e[0m";
while true; do
read -p "Run tests? (yes/no) " tests
	case $tests in
		[yes]* ) TESTS; break;;
    	[no]* ) break;;
        * ) ;;
	esac
done;

# Rights
sudo chown -R ubuntu:ubuntu /var/www/main
sudo chown -R ubuntu:www-data /var/www/main/public
sudo chown -R ubuntu:www-data /var/www/main/storage
sudo chown -R ubuntu:www-data /var/www/main/bootstrap

echo "\n\n"
echo " \e[1;42m                                               \e[0m";
echo " \e[1;42m      The default admin user is root:root      \e[0m";
echo " \e[1;42m                                               \e[0m";
echo "\n\n"
