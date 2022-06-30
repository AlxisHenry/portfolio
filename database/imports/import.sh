echo "\n";
echo "\e[1;42m                                   \e[0m";
echo "\e[1;42m    Configure default database     \e[0m";
echo "\e[1;42m                                   \e[0m";
echo "\n";
echo "\e[41m                                               \e[0m";
echo "\e[41m    Your database name need to be : main  !    \e[0m";
echo "\e[41m                                               \e[0m";

sleep 2

echo "\n";
echo "\e[1;42m                                \e[0m";
echo "\e[1;42m      Starting import data      \e[0m";
echo "\e[1;42m                                \e[0m";

sudo mariadb -e "source /var/www/main/database/imports/news.sql"
sudo mariadb -e "source /var/www/main/database/imports/resources.sql"
sudo mariadb -e "source /var/www/main/database/imports/projects.sql"

echo "\n";
echo "\e[1;42m                           \e[0m";
echo "\e[1;42m      Import finished      \e[0m";
echo "\e[1;42m                           \e[0m";
echo "\n";