# CCI-2021-PORTFOLIO - **_Charte graphique_**

## **[Présentation](#présentation-du-projet)**

## **[Organisation](#organisation-du-projet)**

## **[Couleurs](#couleurs-choisies-et-utilisées)**

## **[Maquettes](#maquettes--design)**

---

# **Présentation du projet**

Le projet consiste au développement d'un `portfolio` à l'aide de langages basiques (sans frameworks), tels que HTML, CSS et JS. Le code doit être validé par le [W3C Markup Validation Service](https://validator.w3.org/).

Ce site est accessible de deux façons,

En production au lien suivant: **[https://alexishenry.fr](https://www.alexishenry.fr)**.

En développement au lien suivant: **[https://alexishenry.fr](https://alxishenry.github.io/CCI-2021-PORTFOLIO/)**.

J'ai choisi d'héberger mon site chez **[LWS](https://www.lws.fr/)**.
Ce panel permet l'hébergement de plusieurs sites grâce à l'ajout de nom de domaine sur celui-ci. Il suffit de gérer l'accès et la redirection vers eux grâce à un fichier `.htaccess`.<br><br>

<p align="center">
<img src="CHARTE GRAPHIQUE\IMAGES\DOMAINS.png">
</p><br>
<p align="center">
<img src="CHARTE GRAPHIQUE\IMAGES\htaccess.png">
</p>

---

# **Organisation du projet**

    CCI-2021-PORTFOLIO

        CHARTE GRAPHIQUE
           > EXCALIDRAW
           > IMAGES
               > PALETTES DE COULEURS

        DEVELOPPEMENT
           > ~css
              > ~responsive
                 > index.css
              > index.css
           > ~html
              > comprendre.html
              > inprogress.html
              > presentation.html
              > projet-sanisarre.html
              > projet-snipe-it.html
              > projet-sport-addict.html
              > projet.timken.html
              > projets.html
           > ~js
              > platform.js-master (Librairie JS)
              > data.js
              > index.js
              > main.js
              > p-timken.js
           > assets
              > @download
                 > CV
              > @fonts
              > @ico
                 > favicon-16x16.png
                 > favicon.png
              > @img
                 > no-backgrounds
                    > al-removebg-preview.png
                    > al2-removebg-preview.png
                    > al3-removebg-preview.png
                    > ss--removebg-preview.png
                 > aleatory.png
                 > coming-soon.png
                 > coming-soon2.png
                 > snipeit.png
                 > sport-addict.png
                 > Timken.png
              > @videos
                 > demonstration_automation_snp.mp4
                 > showsnipeit.mkv
              > ~errors
                 > 400.shtml
                 > 401.shtml
                 > 403.shtml
                 > 404.shtml
                 > 500.shtml
              > ~extension
                 > @exe
                    > chromedriver.exe
                 > @logs
                    > logs.txt
                 > main.py

        .htaccess
        index.html
        README.md

---

# **Couleurs choisies et utilisées**

<img src="CHARTE GRAPHIQUE\IMAGES\PALETTES DE COULEURS\AC - Palette 4.jpeg"><br>

Voici donc les `variables` que je vais utilisées dans mon fichier CSS:

<p align="center"><br>
<img src="CHARTE GRAPHIQUE\IMAGES\root css.png">
</p>

---

# **Maquettes & Design**

J'ai réalisé les maquettes à intégrer sur [`excalidraw`](https://excalidraw.com/).
Celles-ci sont disponibles en cliquant [ici](https://github.com/AlxisHenry/CCI-2021-PORTFOLIO/tree/main/CHARTE%20GRAPHIQUE/EXCALIDRAW).<br>
Les maquettes ne possèdent pas de couleurs, ni de cotes précises. Cela se fera au fur et à mesure du développement.

#

> [Page d'accueil](https://alexishenry.fr/)

<img src="CHARTE GRAPHIQUE\IMAGES\Page d'arrivée.png">

La page sera composé de quatre `containers`. <br><br>
Le `Header` qui comporte les différents menus.<br>

<p align="center">
<img src="CHARTE GRAPHIQUE\IMAGES\menus.png">
</p>
<br>

   - Le `premier icon` permet à l'utilisateur de retourner à la dernière page de son historique.
   - Le `second icon` permet à l'utilisateur de retourner à [la page d'accueil](https://www.alexishenry.fr/index.html), 
   - Le `troisième icon` permet l'ouverture du menu de navigation 

<br>

Une première `section` qui contient mon identité.<br><br>

<p align="center">
<img src="CHARTE GRAPHIQUE\IMAGES\identite.png">
</p>

<br>

L'icon présent au milieu, permet de renvoyer aléatoirement l'utilisateurs sur un des projets parmis tous ceux présents surle site, et non seulement sur ceux présents sur la page d'accueil.

<br>

Une seconde `section` dans laquelle il y a le contenu principal. <br><br>

<p align="center">
<img src="CHARTE GRAPHIQUE\IMAGES\contenu.png">
</p><br>

Le contenu principal contient différentes slides, qui correspondent aux différents projets présentés sur le site.<BR><br>
Les slides s'affichent ``automatiquement à intervale régulière`` dès le chargement de la page. Cependant l'utilisateur peut toujours naviguer à travers les slides grâce aux bouttons situés en dessous de celles-ci.

<br>


Et enfin le `footer`, qui possède une simple animation au passage de la souris.<br><br>

<p align="center">
<img src="CHARTE GRAPHIQUE\IMAGES\footer.png">
</p>

Grâce au code JS ci-dessous, la date s'actualisera automatiquement chaque année.

<p align="center">
<img src="CHARTE GRAPHIQUE\IMAGES\footerjs.png">
</p>
#

> [Menu Déroulant](https://alexishenry.fr/)

<br>
<img src="CHARTE GRAPHIQUE\IMAGES\Menu déroulant.png" />

Ci-dessus, un aperçu du menu déroulant voulu. Les catégories '_Présentations_', '_Comprendre mon site_' et '_JOIN MY DISCORD_' seront présentes. Pour ce qui est de la catégorie '_MES PROJETS_', elle peut paraître inutile, vu que tous les projets sont accessibles via la page d'accueil. Cela sera à voir plus tard. Je n'ai pas encore prévu de design pour les pages présentes dans le menu déroulant.


<!-- <img src="CHARTE GRAPHIQUE\IMAGES\mznu.png" /> -->


#

> [Page de présentation d'un projet](https://alexishenry.fr/DEVELOPPEMENT/~html/projet-timken.html)


<img src="CHARTE GRAPHIQUE\IMAGES\Page présentation 1.png">


<img src="CHARTE GRAPHIQUE\IMAGES\Page présentation 2.png">

---
