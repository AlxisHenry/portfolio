let path_to_imgs = "./DEVELOPPEMENT/@img/",
    path_to_html = "./DEVELOPPEMENT/~html/";

const timken_js =
{
 title: "TIMKEN",
 alt: "TIMKEN",
 img: `${path_to_imgs}Timken.png`,
 href: `${path_to_html}projet-timken.html`,
 status: "Not Started",
},

snipeit_js = 
{
 title: "SNIPE-IT",
 alt: "SNIPE-IT",
 img: `${path_to_imgs}snipeit.png`,
 href: `${path_to_html}projet-snipe-it.html`,
 status: "Not Started",
},

aleatory_js = 
{
title: "ALEATORY",
alt: "ALEATORY",
img: `${path_to_imgs}aleatory.png`,
href: "none",
status: "none",
};

localStorage.setItem("timken", JSON.stringify(timken_js));

localStorage.setItem("snipeit", JSON.stringify(snipeit_js));

localStorage.setItem("aleatory", JSON.stringify(aleatory_js));