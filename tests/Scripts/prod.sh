# This script will update the production code

SendProject () {

  echo "Droits distants sur /var/www/main attribués à ubuntu"
  ssh ubuntu@92.222.16.109 -p 62303 'sudo chown -R ubuntu:ubuntu /var/www/main'

  echo "Lancement du transfert du code vers le serveur de production..."
  rsync -azP --exclude-from '/home/ubuntu/exclude_list' -e 'ssh -p 62303' /var/www/main/ ubuntu@92.222.16.109:/var/www/main

  echo "Droits distants sur /var/www/main attribués à ubuntu"
  ssh ubuntu@92.222.16.109 -p 62303 'sudo chown -R ubuntu:ubuntu /var/www/main'

  echo "Paramétrage de Laravel..."
  ssh ubuntu@92.222.16.109 -p 62303 'npm --prefix /var/www/main/ install'
  ssh ubuntu@92.222.16.109 -p 62303 'npm --prefix /var/www/main/ run prod'
  ssh ubuntu@92.222.16.109 -p 62303 'php /var/www/main/artisan optimize'
  ssh ubuntu@92.222.16.109 -p 62303 'php /var/www/main/artisan optimize:clear'
  ssh ubuntu@92.222.16.109 -p 62303 'php /var/www/main/artisan cache:clear'

  echo "Mise à jour des droits distants..."
  ssh ubuntu@92.222.16.109 -p 62303 'sudo chown -R www-data:www-data /var/www/main/public'
  ssh ubuntu@92.222.16.109 -p 62303 'sudo chown -R www-data:www-data /var/www/main/storage'
  ssh ubuntu@92.222.16.109 -p 62303 'sudo chown -R www-data:www-data /var/www/main/bootstrap'

}

echo '---------------------------';
echo 'Envoi du code en production';
echo '---------------------------';

SendProject;

echo '-------------------------';
echo 'Code envoyé en production';
echo '-------------------------';