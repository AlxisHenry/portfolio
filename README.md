# CCI-2021-PORTFOLIO - **_Charte graphique_**

## **[Présentation](#présentation-du-projet)**

## **[Organisation](#organisation-du-projet)**

---

# **Présentation du projet**

> *La version 1.0.0 de ce projet disponible **[ici](https://github.com/AlxisHenry/CCI-2021-PORTFOLIO/tree/v1.0.0)**, a été réalisée uniquement à l'aide des langages HTML, CSS et Javascript.*

La suite de projet consiste en l'ajout d'une veille technologique. Cela introduit donc les langages Php et Sql. Cette veille va contenir des articles stockés dans une base de donnée, que l'utilisateur pourra visionner et recherche par mots clés.

Pour ce qui est de la récupération des articles, j'ai décidé d'automatiser ceci. Vous retrouverez [ici](https://github.com/AlxisHenry/CCI-2021-PORTFOLIO/tree/main/DEVELOPPEMENT/python) les scripts réalisant le scrapping d'articles sur le site [France Inter](https://www.franceinter.fr/).

Le site sera accessible au lien suivant : **[https://prod.alexishenry.fr](https://www.alexishenry.fr)**.


J'ai choisi d'héberger mon site chez **[LWS](https://www.lws.fr/)**.
Ce panel permet l'hébergement de plusieurs sites grâce à l'ajout de nom de domaine sur celui-ci. Il suffit de gérer l'accès et la redirection vers eux grâce à un fichier `.htaccess`.<br>

---

# **Organisation du projet**

    CCI-2021-PORTFOLIO

        DEVELOPPEMENT
           > assets      
              > errors
                 > 400.shtml
                 > 401.shtml
                 > 403.shtml
                 > 404.shtml
                 > 500.shtml 
              > ico
                 > favicon.png
              > img
                 > no-backgrounds
                    > aleatory.png
                    > coming-soon.png
                    > snipeit.png
                    > sport-addict.png
                    > Timken.png
                 > aleatory.png
                 > coming-soon.png
                 > snipeit.png
                 > sport-addict.png
                 > Timken.png
              > videos (Format utilisé: mp4, pour des raisons de comptabilités entre navigateurs)
                 > show-extension-automation-snipe-it.mp4
                 > show-sport-addict-website.mp4
                 > snipe-it-installation.mp4
                 > timken-installation-gestion-stock.mp4
           > css
              > responsive
                 > index.css
              > index.css
           > html
              > comprendre.html
              > inprogress.html
              > presentation.html
              > mentions-legales.html
              > projet-sanisarre.html
              > projet-snipe-it.html
              > projet-sport-addict.html
              > projet.timken.html
              > projets.html
           > js
              > modules
                 > data.js
                 > browser.js
              > app.js
              > index.js
              > main.js
              > projets.js
           > python
              > scraping-data.txt
              > scraping-data.py
              > scraping-links.py
              > scraping-links.txt

        index.html
        README.md (this)

---
