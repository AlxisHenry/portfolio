import { images, style } from "./modules/data.js";
import { browserName, FIX } from "./modules/browser.js";
import { sleepFor } from "./main.js";

document.querySelector('#prenom').innerHTML = "ALEXIS";
document.querySelector('#nom').innerHTML = "HENRY";

document.getElementById("src-img-centrale").insertAdjacentHTML(
  "afterbegin",
  `
  <a id="href-img" href="${images.first_project.href}"
    ><img
      id="img-centrale"
      alt="${images.first_project.alt}"
      src="${images.first_project.img}"
      title="${images.first_project.title}"
      class="src"
  /></a>`
);
document.getElementById("src-img-scnd").insertAdjacentHTML(
  "afterbegin",
  `
  <img
    id="img-scnd"
    alt="${images.second_project.alt}"
    title="Seconde image"
    src="${images.second_project.img}"
  />`
);
document.getElementById("src-img-thrd").insertAdjacentHTML(
  "afterbegin",
  `
  <img
    id="img-thrd"
    alt="${images.third_project.alt}"
    title="Troisième image"
    src="${images.third_project.img}"
  />`
);

const first_button_div = document.getElementById("first_button_div"),
  img_centrale = document.getElementById("img-centrale"),
  img_nd = document.getElementById("img-scnd"),
  img_th = document.getElementById("img-thrd"),
  src_prp = document.querySelector(".src"),
  href_img = document.getElementById("href-img");

first_button_div.insertAdjacentHTML(
  "beforeend",
  `<i
    alt="${images.second_project.alt}"
    title=""${images.second_project.title}
    class="img1 btn1 fas fa-circle"
  ></i>`
);
first_button_div.insertAdjacentHTML(
  "beforeend",
  `<i
    alt="${images.third_project.alt}"
    title="${images.third_project.title}"
    class="img2 btn2 fas fa-circle"
  ></i>`
);
first_button_div.insertAdjacentHTML(
  "beforeend",
  `<i
  alt="${images.first_project.alt}"
  title="${images.first_project.title}"
  class="img3 btn3 fas fa-circle"
  ></i>`
);


//! Ces deux lignes + l340-360 d'index.css permette d'avoir un autre design :
//* Montrer cette version de dev
//* Ces deux lignes permettent de flouter les images de côtés. J'ai décidé de les retirer car c'est plus esthétique,
//* Ceci après avoir reçu l'avis de différents utilisateurs.
// style.filter.blur(img_nd, 2)
// style.filter.blur(img_th, 2)


const buttons = document.querySelectorAll(".fa-circle");
buttons[0].addEventListener("click", change_to_img1);
buttons[1].addEventListener("click", change_to_img2);
buttons[2].addEventListener("click", change_to_img3);
window.addEventListener("load", LoadingFunction);

const randomRedirection = document.querySelector(".fa-random");
randomRedirection.addEventListener("click", event_RandomRedirection);

// --------------- FUNCTIONS ---------------

function change_to_img1() {
  img_centrale.classList.add("transition-to-img");
  img_centrale.title = images.second_project.title;
  img_centrale.alt = images.second_project.alt;
  img_centrale.src = images.second_project.img;
  img_nd.src = images.third_project.img;
  img_th.src = images.first_project.img;
  src_prp.addEventListener("click", () => {
    href_img.href = images.second_project.href;
  });
}
img_centrale.animate([{ opacity: 0 }, { transition: "ease-in" }], {
  duration: 400,
});

function change_to_img2() {
  img_centrale.title = images.third_project.title;
  img_centrale.alt = images.third_project.alt;
  img_centrale.src = images.third_project.img;
  img_nd.src = images.first_project.img;
  img_th.src = images.second_project.img;
  src_prp.addEventListener("click", () => {
    href_img.href = images.third_project.href;
  });
  img_centrale.classList.remove("transition-to-img");
  img_centrale.classList.add("transition-to-img");
  img_centrale.animate([{ opacity: 0 }, { transition: "ease-in" }], {
    duration: 400,
  });
}

function change_to_img3() {
  img_centrale.title = images.first_project.title;
  img_centrale.alt = images.first_project.alt;
  img_centrale.src = images.first_project.img;
  img_nd.src = images.second_project.img;
  img_th.src = images.third_project.img;
  src_prp.addEventListener("click", () => {
    href_img.href = images.first_project.href;
  });
  img_centrale.classList.remove("transition-to-img");
  img_centrale.classList.add("transition-to-img");
  img_centrale.animate([{ opacity: 0 }, { transition: "ease-in" }], {
    duration: 400,
  });
}

function change_img_auto() {
  setTimeout(change_to_img1, 4000);
  setTimeout(change_to_img2, 8000);
  setTimeout(change_to_img3, 12000);
}

function change_img_onload() {
  setTimeout(change_to_img1, 4000);
  setTimeout(change_to_img2, 8000);
  setTimeout(change_to_img3, 12000);
  setInterval(change_img_auto, 12000);
}

function event_RandomRedirection() {
  const href_links_path = [
    images.first_project.href,
    images.second_project.href,
    images.third_project.href,
  ];
  randomRedirection.parentElement.href =
    href_links_path[Math.floor(Math.random() * href_links_path.length)];
}

function LoadingFunction() {
  setTimeout(change_img_onload, 3000);
}


// ------------------ FIREFOX & SAFARI (Using Vanilla JS)  ------------------

if (browserName == "Chrome") {
  console.log("You use a good browser :)");
} else if (browserName == "Firefox") {
  img_nd.style.visibility = "hidden";
  img_th.style.visibility = "hidden";
  FIX(img_centrale, 'firefox');
  console.log(
    `%cThe version of the website is modified on your browser. Sorry for this issue `,
    "color: red; background-color:white; font-size:12px;"
  );
} else if (browserName == "Safari") {
  img_nd.style.visibility = "hidden";
  img_th.style.visibility = "hidden";
  console.log(
    `%cThe version of the website is modified on your browser. Sorry for this issue `,
    "color: red; background-color:white; font-size:12px;"
  );
}


console.timeEnd("Exécution script JS");