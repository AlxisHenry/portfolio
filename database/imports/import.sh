clear

echo "--------------------------"
echo "Imports Data to News table"
echo "--------------------------"

echo "Import all data..."
sudo mariadb -e "source /var/www/main/database/imports/__news-import.sql"

echo "."
echo ".."
echo "..."

echo "Update News table..."

sudo mariadb -e "source /var/www/main/database/imports/news.sql"

echo "."
echo ".."
echo "..."

echo "Importation finished"