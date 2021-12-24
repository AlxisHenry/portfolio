// Fonctions utilisées sur 'main.html'

// C'est bancale comme solution mais ça passe

// Le résultat n'est pas le meilleur mais c'est ce qui est décrit dans la charte donc suffisant.

function change1() { // Image principale : projet Timken > Renvoi vers page projet Timken
    document.querySelector(".img2").classList.remove('fas'); // Remove cercle plein de img2
    document.querySelector(".img3").classList.remove('fas'); // Remove cercle plein de img3
    document.querySelector(".img1").classList.add('fas'); // Add cercle plein à img1
    document.getElementById("img-centrale").title = "TIMKEN"
    document.getElementById("img-centrale").src = "./DEVELOPPEMENT/@img/Timken.png"; // Modification de l'image
    document.getElementById("img-scnd").src = "./DEVELOPPEMENT/@img/Snipe-IT-logo.png"; // Modification de l'image
    document.getElementById("img-thrd").src = "./DEVELOPPEMENT/@img/téléchargement (1).png";
    document.getElementById("href-img").href = "./DEVELOPPEMENT/~html/projets-timken.html"; // Modification du href
}
function change2() { // Image secondaire : portfolio > Renvoi vers page projet Portfolio
    document.querySelector(".img1").classList.remove('fas');
    document.querySelector(".img1").classList.add('far');
    document.querySelector(".img3").classList.remove('fas');
    document.querySelector(".img2").classList.add('fas');
    document.getElementById("img-centrale").title = "SNIPE-IT"
    document.getElementById("img-centrale").src = "./DEVELOPPEMENT/@img/Snipe-IT-logo.png";
    document.getElementById("img-scnd").src = "./DEVELOPPEMENT/@img/Timken.png";
    document.getElementById("img-thrd").src = "./DEVELOPPEMENT/@img/téléchargement (1).png";
    document.getElementById("href-img").href = "./DEVELOPPEMENT/~html/projets-portfolio.html";
}
function change3() { // Troisième image 'No Projet Found' > Renvoi vers page de projets
    document.querySelector(".img1").classList.remove('fas');
    document.querySelector(".img1").classList.add('far');
    document.querySelector(".img2").classList.remove('fas');
    document.querySelector(".img3").classList.add('fas');
    document.getElementById("img-centrale").title = "PROJECTS"
    document.getElementById("img-thrd").src = "./DEVELOPPEMENT/@img/Snipe-IT-logo.png";
    document.getElementById("img-centrale").src = "./DEVELOPPEMENT/@img/téléchargement (1).png";
    document.getElementById("href-img").href = "./DEVELOPPEMENT/~html/projets.html";
}


// Fonctions utilisées sur 'comprendre.html'

// Fonctions utilisées sur 'presentation.html'

// Fonctions utilisées sur 'projets.html'