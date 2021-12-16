    function BackHomeImage() {
    // Change l'image du menu au clique droit sur celui-ci
    let chemin = "../../CHARTE GRAPHIQUE/ICONS"

    const IMGS = [ chemin + "/favicon-1.ico", chemin + "/favicon-2.ico", chemin + "/favicon-3.ico", chemin + "/favicon-4.ico"];

    const RandomIMGS = IMGS[Math.floor(Math.random() * IMGS.length)];

    console.log(RandomIMGS);

    document.getElementById("img-retour-accueil").src = RandomIMGS;

}

