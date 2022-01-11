console.time("Exécution script JS");

// Fonctions globales

document.getElementById('btn-rar').addEventListener('click', (e) =>
{
     if (confirm('Redirect ?')) 
     {
          history.back();
     }
     else 
     {
          e.preventDefault();
          void(0);
     };          
})

document.getElementById('href-discord').addEventListener('click' , (e) => 
{   
    if (confirm('Redirect ?')) 
        {
             // Redirection vers discord
        }
        else 
        {
             e.preventDefault();
             void(0);
        };
});

function sleepFor(sleepDuration)
{
      var now = new Date().getTime();
      while(new Date().getTime() < now + sleepDuration)
      { 
         /* Do nothing */ 
      };
 };
 
// Fonctions utilisées sur 'index.html'

// Récupération des valeurs des tableaux au format JSON pour que le code ne soit pas illisible

 let timken = JSON.parse(localStorage.getItem("timken")),
     snipeit = JSON.parse(localStorage.getItem("snipeit")),
     aleatory = JSON.parse(localStorage.getItem("aleatory")),
     img1 = document.querySelector(".img1"),
     img2 = document.querySelector(".img2"),
     img3 = document.querySelector(".img3"),
     img_centrale = document.getElementById("img-centrale"),
     img_nd = document.getElementById("img-scnd"),
     img_th = document.getElementById("img-thrd"),
     src_prp = document.querySelector(".src"),
     href_img = document.getElementById("href-img"); 

// Le résultat est bancal, mais la charte graphique est respectée, donc cela est suffisant.

function change_to_img1() 
    { 
         img3.classList.remove('fas');
         img2.classList.remove('fas');
         img1.classList.add('fas');
         img_centrale.title = timken.title;
         img_centrale.alt = timken.alt;
         img_centrale.src = timken.img;
         img_nd.src = snipeit.img;
         img_th.src = aleatory.img;
         src_prp.onclick = function () 
            {
                 href_img.href = timken.href;
            }
        //  console.log("change1() utilisée");
    }

function change_to_img2() 
    { 
         img1.classList.remove('fas');
         img1.classList.add('far');
         img3.classList.remove('fas');
         img2.classList.add('fas');
         img_centrale.title = snipeit.title;
         img_centrale.alt = snipeit.alt;
         img_centrale.src = snipeit.img;
         img_nd.src = timken.img;
         img_th.src = aleatory.img;
         src_prp.onclick = function () 
            {
                 href_img.href = snipeit.href;
            }
        //  console.log("change2() utilisée");
    }

function change_to_img3() 
    { 
         img1.classList.remove('fas');
         img1.classList.add('far');
         img2.classList.remove('fas');
         img3.classList.add('fas');
         img_centrale.title = aleatory.title;
         img_centrale.alt = aleatory.alt;
         img_centrale.src = aleatory.img;
         img_nd.src = timken.img;
         img_th.src = snipeit.img;
         src_prp.onclick = function () 
            {
                 let href_links_path = [timken.href,snipeit.href]
                 let random_path_selector = href_links_path[Math.floor(Math.random() * href_links_path.length)];
                 href_img.href = random_path_selector;
            };  
        //  console.log("change3() utilisée");
    };

function change_img_auto() 
{
     setInterval(change_to_img2, 4000);
     setInterval(change_to_img3, 8000);
     setInterval(change_to_img1, 12000);
};

// Fonctions utilisées sur 'comprendre.html'

// Fonctions utilisées sur 'presentation.html'

// Fonctions utilisées sur 'projets.html'

// Fonctions utilisées sur 'projet-timken.html'

 let video = document.getElementById('video_projet'),
     frame = document.getElementById('frame_projet'),
     i_btn_video = document.getElementById('file-video'),
     i_btn_code = document.getElementById('file-code'),
     i_btn_informations = document.getElementById('info-circle'),
     i_btn_informations_code = document.getElementById('info-circle_code');

function time_transition_code() 
{
      i_btn_code.style.display = "flex";
};

function time_transition_video() 
{
      i_btn_video.style.display = "flex";
};

function change_video_frame_menu() 
{
     if(getComputedStyle(video).display != "none")
     {
          video.style.display = "none";
          sleepFor(100);
          frame.style.display = "flex";
          i_btn_video.style.display = "none";
          i_btn_code.style.display = "flex";
          i_btn_informations.style.display = "none";
          i_btn_informations_code.style.display = "flex";
     } 
     else 
     {
          video.style.display = "flex";
          sleepFor(100);
          frame.style.display = "none";
          i_btn_code.style.display = "none";
          i_btn_video.style.display = "flex";
          i_btn_informations.style.display = "flex";
          i_btn_informations_code.style.display = "none";
     };
};

// Vidéo 
function affichage_flex_circle()
{
     document.getElementById('infodivvideo').style.display = "flex"; 
     sleepFor(100);
     document.getElementById('video_projet').style.filter = "blur(4px)";
     document.getElementById('video_projet').style.opacity = "0.5";
     // console.log("video flex mouseover info")
};
function affichage_none_circle()
{
     document.getElementById('infodivvideo').style.display = "none";
     sleepFor(100);
     document.getElementById('video_projet').style.filter = "none";
     document.getElementById('video_projet').style.opacity = "1";
     // console.log("video none mouseout info")
};

// Frame
function affichage_flex_frame_circle() 
{
     document.getElementById('infodivframe').style.display = "flex"; 
     sleepFor(100);
     document.getElementById('frame_projet').style.filter = "blur(4px)";
     document.getElementById('frame_projet').style.opacity = "0.1";
     // console.log("frame flex mouseover info")
};
function affichage_none_frame_circle() 
{
     document.getElementById('infodivframe').style.display = "none";
     sleepFor(100);
     document.getElementById('frame_projet').style.filter = "none";
     document.getElementById('frame_projet').style.opacity = "1";
     // console.log("frame none mouseout info")
};

// Fonctions utilisées sur 'projet-snipe-it.html'

// Vidéo

function affichage_flex_circle2()
{
     document.getElementById('infodivvideo').style.display = "flex"; 
     sleepFor(100);
     document.getElementById('video_projet').style.filter = "blur(4px)";
     document.getElementById('video_projet').style.opacity = "0.5";
     // console.log("video flex mouseover info")
};
function affichage_none_circle2()
{
     document.getElementById('infodivvideo').style.display = "none";
     sleepFor(100);
     document.getElementById('video_projet').style.filter = "none";
     document.getElementById('video_projet').style.opacity = "1";
     // console.log("video none mouseout info")
};

// Frame

function affichage_flex_frame_circle2() 
{
     document.getElementById('infodivframe').style.display = "flex"; 
     sleepFor(100);
     document.getElementById('frame_projet').style.filter = "blur(4px)";
     document.getElementById('frame_projet').style.opacity = "0.1";
     // console.log("frame flex mouseover info")
};
function affichage_none_frame_circle2() 
{
     document.getElementById('infodivframe').style.display = "none";
     sleepFor(100);
     document.getElementById('frame_projet').style.filter = "none";
     document.getElementById('frame_projet').style.opacity = "1";
     // console.log("frame none mouseout info")
};

// Fonctions globales

console.timeEnd("Exécution script JS");

// console.clear();  