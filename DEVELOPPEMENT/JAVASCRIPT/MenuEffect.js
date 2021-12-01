    function MenuEffect() {
    // Change l'image du menu au clique droit sur celui-ci

    const IMGS = ["../../favicon (1).ico", "../../favicon (2).ico", "../../favicon.ico"];

    const RandomIMGS = IMGS[Math.floor(Math.random() * IMGS.length)];

    console.log(RandomIMGS);

    document.getElementById("img-bu-menu").src = RandomIMGS;

}

