console.time("Exécution script JS");

// Fonctions globales

let history_back_button = document.getElementById('btn-rar');

history_back_button.addEventListener('click', (e) =>
{
    let confirm_history_back = confirm("Vous allez quitter la page");
    if (confirm_history_back == true) 
       {
            history.back();
       }  
       else 
       {
            console.log('Cancel History Back');
       };
})

let discord_button = document.getElementById('href-discord');

discord_button.addEventListener('click' , (e) => 
{   
    if (confirm('Redirect ?')) 
        {
             // Redirection vers discord
        }
        else 
        {
             e.preventDefault();
             window.location = '../../index.html';
        };
});

// Fonctions utilisées sur 'index.html'

/* La création d'objets est importante, car cela va permettre de faciliter, si nécessaire, les modifications */

let path_to_imgs = "./DEVELOPPEMENT/@img/",
    path_to_html = "./DEVELOPPEMENT/~html/";

const timken =
{
     title: "TIMKEN",
     alt: "TIMKEN",
     img: `${path_to_imgs}Timken.png`,
     href: `${path_to_html}projet-timken.html`,
     status: "Not Started",
}, 
snipeit = 
{
     title: "SNIPE-IT",
     alt: "SNIPE-IT",
     img: `${path_to_imgs}Snipe-IT-logo.png`,
     href: `${path_to_html}projet-snipe-it.html`,
     status: "Not Started",
},
aleatory = 
{
    title: "ALEATORY",
    alt: "ALEATORY",
    img: `${path_to_imgs}téléchargement (1).png`,
    href: "none",
    status: "none",
};

// Le résultat est bancal, mais la charte graphique est respectée, donc cela est suffisant.

function activate_circle_img1() 
    { 
         document.querySelector(".img2").classList.remove('fas');
         document.querySelector(".img3").classList.remove('fas');
         document.querySelector(".img1").classList.add('fas');
         document.getElementById("img-centrale").title = timken.title;
         document.getElementById("img-centrale").alt = timken.alt;
         document.getElementById("img-centrale").src = timken.img;
         document.getElementById("img-scnd").src = snipeit.img;
         document.getElementById("img-thrd").src = aleatory.img;
         document.querySelector(".src").onclick = function () 
            {
                 document.getElementById("href-img").href = timken.href;
            }
        //  console.log("change1() utilisée");
    }

function activate_circle_img2() 
    { 
         document.querySelector(".img1").classList.remove('fas');
         document.querySelector(".img1").classList.add('far');  
         document.querySelector(".img3").classList.remove('fas');
         document.querySelector(".img2").classList.add('fas');
         document.getElementById("img-centrale").title = snipeit.title;
         document.getElementById("img-centrale").alt = snipeit.alt;
         document.getElementById("img-centrale").src = snipeit.img;
         document.getElementById("img-scnd").src = timken.img;
         document.getElementById("img-thrd").src = aleatory.img;
         document.querySelector(".src").onclick = function () 
            {
                 document.getElementById("href-img").href = snipeit.href;
            }
        //  console.log("change2() utilisée");
    }

function activate_circle_img3() 
    { 
         document.querySelector(".img1").classList.remove('fas');
         document.querySelector(".img1").classList.add('far');
         document.querySelector(".img2").classList.remove('fas');
         document.querySelector(".img3").classList.add('fas');
         document.getElementById("img-centrale").title = aleatory.title;
         document.getElementById("img-centrale").alt = aleatory.alt;
         document.getElementById("img-centrale").src = aleatory.img;
         document.getElementById("img-scnd").src = timken.img;
         document.getElementById("img-thrd").src = snipeit.img;
         document.querySelector(".src").onclick = function () 
            {
                 let href_links_path = [timken.href,snipeit.href]
                 let random_path_selector = href_links_path[Math.floor(Math.random() * href_links_path.length)];
                 document.getElementById("href-img").href = random_path_selector;
            };  
        //  console.log("change3() utilisée");
    };

function activate_circle_img_auto() 
{
     setTimeout("activate_circle_img1()",5000);
     setTimeout("activate_circle_img2()",15000);
     setTimeout("activate_circle_img3()",25000);
    //  console.log("activate_circle_img_auto() utilisée")
};
    
function interval_circle_img_auto() 
{
     setTimeout("activate_circle_img2()",5000);
     setTimeout("activate_circle_img3()",15000);
     setInterval("activate_circle_img_auto()", 25000);
    //  console.log("interval_circle_img_auto() utilisée");
};

// Fonctions utilisées sur 'comprendre.html'

// Fonctions utilisées sur 'presentation.html'

// Fonctions utilisées sur 'projets.html'

// Fonctions utilisées sur 'projet-timken.html'

document.getElementById('video').playbackRate = 10.25;
console.log('test');

// Fonctions globales

// console.timeEnd("Exécution script JS");

// console.clear();