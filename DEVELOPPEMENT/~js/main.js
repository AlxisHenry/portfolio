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
    // document.getElementById("href-img").href = "./DEVELOPPEMENT/~html/projets-timken.html"; // Modification du href
    document.querySelector(".src").onclick = function () {
        document.getElementById("href-img").href = "./DEVELOPPEMENT/~html/projet-timken.html"; // Modification du href
    }
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
    // document.getElementById("href-img").href = "./DEVELOPPEMENT/~html/projets-portfolio.html";
    document.querySelector(".src").onclick = function () {
        document.getElementById("href-img").href = "./DEVELOPPEMENT/~html/projet-portfolio.html";
    }
}
function change3() { // Troisième image 'No Projet Found' > Renvoi vers page de projets
    
    // Soit cette page renvoye vers une page où sont regroupés les projets,
    // Soit elle fera en sorte de renvoyer au hasard (1 chance sur 2) vers une des pages existantes

    // Je pense que la deuxième option est plus drôle à coder
    
    document.querySelector(".img1").classList.remove('fas');
    document.querySelector(".img1").classList.add('far');
    document.querySelector(".img2").classList.remove('fas');
    document.querySelector(".img3").classList.add('fas');
    document.getElementById("img-centrale").title = "PROJECTS"
    document.getElementById("img-scnd").src = "./DEVELOPPEMENT/@img/Timken.png";
    document.getElementById("img-thrd").src = "./DEVELOPPEMENT/@img/Snipe-IT-logo.png";
    document.getElementById("img-centrale").src = "./DEVELOPPEMENT/@img/téléchargement (1).png";
    // document.getElementById("href-img").href = "./DEVELOPPEMENT/~html/projets.html";
    document.querySelector(".src").onclick = function () {
        let path_table = ['/DEVELOPPEMENT/~html/projet-timken.html','./DEVELOPPEMENT/~html/projet-portfolio.html']
        let random_path_selector = path_table[Math.floor(Math.random() * path_table.length)];
        document.getElementById("href-img").href = random_path_selector;
    }
}


function change_interval() {

    setTimeout("change1()",5000);
    
    setTimeout("change2()",15000);

    setTimeout("change3()",25000);

}

setInterval("change_interval()", 25000)


// Fonctions utilisées sur 'comprendre.html'

// Fonctions utilisées sur 'presentation.html'

// Fonctions utilisées sur 'projets.html'
