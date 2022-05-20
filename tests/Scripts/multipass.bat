@echo off

:: Lancement d'un machine avec le nom donne par l'utilisateur
set /p NAME=Nom de l'instance multipass:
if "%NAME%" == "" (SET NAME="default")
multipass launch -n %Name%

:: Cle SSH
set /p SSH=Clee SSH (par defaut C:\Users\Alexis\.ssh\alexis.pub):
if "%SSH%" == "" (SET SSH=C:\Users\Alexis\.ssh\alexis.pub)
echo "Clee SSH utilisee %SSH%"

:: Type de machine
set /p TYPE=Type de machine (dev/test):
if "%TYPE%" == "" (SET TYPE=dev)
if not "%TYPE%" == "dev" ( if not "%TYPE%" == "test" ( SET TYPE=dev ))
echo "Type de machine : %TYPE%"

:: Mise en place des cles ssh sur l'instance
multipass exec %NAME% -- git clone https://github.com/AlxisHenry/LINUX-CONFIGS /home/ubuntu/config
multipass exec %NAME% -- sleep 2
multipass exec %NAME% -- sh /home/ubuntu/config/ssh.sh
multipass exec %NAME% -- cp /home/ubuntu/config/.ssh/id_rsa /home/ubuntu/.ssh/
multipass exec %NAME% -- cp /home/ubuntu/config/.ssh/id_rsa.pub /home/ubuntu/.ssh/

:: gitconfig
multipass exec %NAME% -- cp /home/ubuntu/config/.gitconfig /home/ubuntu/

:: aliases
multipass exec %NAME% -- mv /home/ubuntu/config/.bashrc /home/ubuntu/config/.bashrc

:: Lancement d'un script en fonction de la machine
if "%TYPE%" == "dev" (multipass exec %NAME% -- sh /home/ubuntu/config/lampDev.sh)
if "%TYPE%" == "test" (multipass exec %NAME% -- sh /home/ubuntu/config/lampTest.sh)