// Fonctions utilisées sur 'main.html'

function BackHomeImage() {

    let chemin = "../../CHARTE GRAPHIQUE/ICONS"

    const IMGS = [ chemin + "/favicon-1.ico", chemin + "/favicon-2.ico", chemin + "/favicon-3.ico", chemin + "/favicon-4.ico"];

    const RandomIMGS = IMGS[Math.floor(Math.random() * IMGS.length)];

    console.log(RandomIMGS);

    document.getElementById("img-retour-accueil").src = RandomIMGS;

}

function change() {

    document.querySelector(".img1").classList.add('fas');
    document.getElementById("img-centrale").src = "./@img/mpd-logo-300h.png";

}

// Fonctions utilisées sur 'comprendre.html'

// Fonctions utilisées sur 'presentation.html'

// Fonctions utilisées sur 'projets.html'