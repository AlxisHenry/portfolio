SendProject () {

    ssh ubuntu@ip -p port 'sudo mkdir /var/www/main'
    ssh ubuntu@ip -p port 'sudo chown -R ubuntu:www-data /var/www/main'
    echo 'Droit sur /var/www distant attribués à ubuntu'
    rsync -azP --exclude-from '/home/ubuntu/exclude_list' -e 'ssh -p port' /var/www/main/ ubuntu@ip:/var/www/main
    echo 'Fichiers/Dossiers du projet copiés et envoyés'
    ssh ubuntu@ip -p port 'sudo chown -R www-data:www-data /var/www/main'
    echo 'Droit sur /var/www distant attribués à www-data'

}

echo '---------------------------------------------------';
echo 'Envoi du code en test vers le serveur de production';
echo '---------------------------------------------------';

    SendProject;

echo '----------------------------';
echo 'Projet envoyé en production.';
echo '----------------------------';