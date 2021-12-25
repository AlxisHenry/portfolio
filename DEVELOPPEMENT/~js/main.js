// Fonctions utilisées sur 'index.html'

function icon_history_back()
    {
         let confirm_history_back = confirm("Vous allez quitter la page");
             if (confirm_history_back == true) 
                {
                     history.back();
                }  
                else 
                {
                     console.log("Cancel History Back");
                }
    }

let path_to_imgs = "./DEVELOPPEMENT/@img/";
let path_to_html = "./DEVELOPPEMENT/~html/";
 
function activate_circle_img1() 
    { 
         document.querySelector(".img2").classList.remove('fas');
         document.querySelector(".img3").classList.remove('fas');
         document.querySelector(".img1").classList.add('fas');
         document.getElementById("img-centrale").title = "TIMKEN"
         document.getElementById("img-centrale").src = `${path_to_imgs}Timken.png`;
         document.getElementById("img-scnd").src = `${path_to_imgs}Snipe-IT-logo.png`;
         document.getElementById("img-thrd").src = `${path_to_imgs}téléchargement (1).png`;
         document.querySelector(".src").onclick = function () 
            {
                 document.getElementById("href-img").href = `${path_to_html}projet-timken.html`;
            }
         console.log("change1() utilisée");
    }

function activate_circle_img2() 
    { 
         document.querySelector(".img1").classList.remove('fas');
         document.querySelector(".img1").classList.add('far');
         document.querySelector(".img3").classList.remove('fas');
         document.querySelector(".img2").classList.add('fas');
         document.getElementById("img-centrale").title = "SNIPE-IT"
         document.getElementById("img-centrale").src = `${path_to_imgs}Snipe-IT-logo.png`;
         document.getElementById("img-scnd").src = `${path_to_imgs}Timken.png`;
         document.getElementById("img-thrd").src = `${path_to_imgs}téléchargement (1).png`;
         document.querySelector(".src").onclick = function () 
            {
                 document.getElementById("href-img").href = `${path_to_html}projet-portfolio.html`;
            }
         console.log("change2() utilisée");
    }

function activate_circle_img3() 
    { 
         document.querySelector(".img1").classList.remove('fas');
         document.querySelector(".img1").classList.add('far');
         document.querySelector(".img2").classList.remove('fas');
         document.querySelector(".img3").classList.add('fas');
         document.getElementById("img-centrale").title = "ALEATORY"
         document.getElementById("img-centrale").src = `${path_to_imgs}téléchargement (1).png`;
         document.getElementById("img-scnd").src = `${path_to_imgs}Timken.png`;
         document.getElementById("img-thrd").src = `${path_to_imgs}Snipe-IT-logo.png`;
         document.querySelector(".src").onclick = function () 
            {
                 let path_table = [`${path_to_html}projet-timken.html`,`${path_to_html}projet-portfolio.html`]
                 let random_path_selector = path_table[Math.floor(Math.random() * path_table.length)];
                 document.getElementById("href-img").href = random_path_selector;
            }
         console.log("change3() utilisée");
    }

function activate_circle_img_auto() 
    {
     setTimeout("activate_circle_img1()",5000);
     setTimeout("activate_circle_img2()",15000);
     setTimeout("activate_circle_img3()",25000);
    }

setInterval("activate_circle_img_auto()", 25000);


// Fonctions utilisées sur 'comprendre.html'

// Fonctions utilisées sur 'presentation.html'

// Fonctions utilisées sur 'projets.html'
