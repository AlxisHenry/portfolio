// Fonctions utilisées sur 'main.html'

function change1() { // Image principale : projet Timken > Renvoi vers page projet Timken
    document.querySelector(".img3").classList.remove('fas');
    document.querySelector(".img2").classList.remove('fas');
    document.querySelector(".img1").classList.add('fas');
    document.getElementById("img-centrale").src = "./DEVELOPPEMENT/@img/Timken.png";
    document.getElementById("href-img").href = "./DEVELOPPEMENT/~html/projets-timken.html";
}
function change2() { // Image secondaire : portfolio > Renvoi vers page projet Portfolio
    document.querySelector(".img1").classList.remove('fas');
    document.querySelector(".img1").classList.add('far');
    document.querySelector(".img3").classList.remove('fas');
    document.querySelector(".img2").classList.add('fas');
    document.getElementById("img-centrale").src = "./DEVELOPPEMENT/@img/Snipe-IT-logo.png";
    document.getElementById("href-img").href = "./DEVELOPPEMENT/~html/projets-portfolio.html";
}
function change3() { // Troisième image 'No Projet Found' > Renvoi vers page de projets
    document.querySelector(".img1").classList.remove('fas');
    document.querySelector(".img1").classList.add('far');
    document.querySelector(".img2").classList.remove('fas');
    document.querySelector(".img3").classList.add('fas');
    document.getElementById("img-centrale").src = "./DEVELOPPEMENT/@img/téléchargement (1).png";
    document.getElementById("href-img").href = "./DEVELOPPEMENT/~html/projets.html";
}


// Fonctions utilisées sur 'comprendre.html'

// Fonctions utilisées sur 'presentation.html'

// Fonctions utilisées sur 'projets.html'