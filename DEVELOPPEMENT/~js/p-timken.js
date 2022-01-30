const video = document.getElementById("video_projet"),
  frame = document.getElementById("demo_projet"),
  ico_video = document.getElementById("file-video"),
  ico_frame = document.getElementById("file-code"),
  ico_video_info = document.getElementById("info-circle"),
  ico_frame_info = document.getElementById("info-circle_code"),
  info_frame = document.getElementById("infodivframe"),
  info_video = document.getElementById("infodivvideo"),
  togglefunction = document.querySelectorAll(".togglefunction"),
  fainfocircle = document.querySelectorAll(".fa-info-circle");

togglefunction.forEach((this_toggle) =>
  this_toggle.addEventListener("click", () => {
    toggle();
  })
);

fainfocircle.forEach((this_toggle) =>
  this_toggle.addEventListener("mouseover", () => {
    if (getComputedStyle(video).display != "none") {
      display_flex_Video();
    } else {
      display_flex_Frame();
    }
  })
);

fainfocircle.forEach((this_toggle) =>
  this_toggle.addEventListener("mouseout", () => {
    if (getComputedStyle(video).display != "none") {
      display_none_Video();
    } else {
      display_none_Frame();
    }
  })
);

function info_frame_insert_HTML() {
  info_frame.insertAdjacentHTML(
    "afterbegin",
    `<div class="show-info-when-mouseover">
  <h1 id="infodivh1"><strong> Site codé </strong></h1>
  <p id="infop">
    Le projet consiste en l'automatisation de la modification du stock
    d'articles.<br /><br />
    Ayant présenté le second projet Snipe-IT à mon service, ils ont trouvé
    un incovénient,<br />
    L'ajout d'une quantité d'article lors d'un achat n'est absolument pas
    intuitif.<br />
    De ce fait, j'ai eu l'idée d'<i>automatiser</i> l'ajout de la quantité
    achetée.
  </p></div>`
  );
}

function info_video_insert_HTML() {
  info_video.insertAdjacentHTML(
    "afterbegin",
    `<div class="show-info-when-mouseover">
  <h1 id="infodivh1"><strong> Projet Timken </strong></h1>
  <p id="infop">
    Le projet consiste en l'automatisation de l'actualisation du stock
    d'articles.<br /><br />
    Ayant présenté le projet Snipe-IT à mon service, ils y ont trouvé un
    incovénient,<br />
    l'ajout d'une quantité d'article lors d'un achat n'est absolument pas
    intuitif.<br />
    De ce fait, j'ai eu l'idée d'<i>automatiser</i> l'ajout de la quantité
    achetée. <br />
    Comme vu dans la vidéo, une page web permettra de sélectionner
    l'article à ajouter, <br />
    préciser sa quantité, ainsi que de saisir numéro de commande
    facultatif.
  </p></div>`
  );
}

function toggle() {
  style.display.toggle(video);
  style.display.toggle(frame);
  style.display.toggle(ico_video);
  style.display.toggle(ico_frame);
  style.display.toggle(ico_video_info);
  style.display.toggle(ico_frame_info);
}

function display_none_Video() {
  style.display.none(info_video);
  sleepFor(100);
  style.filter.none(video);
  style.opacity(video, 1);
  info_video.innerHTML = "";
}

function display_flex_Video() {
  style.display.flex(info_video);
  sleepFor(100);
  style.filter.blur(video, 4);
  style.opacity(video, 0.5);
  info_video_insert_HTML();
}

function display_none_Frame() {
  style.display.none(info_frame);
  sleepFor(100);
  style.filter.none(frame);
  style.opacity(frame, 1);
  info_frame.innerHTML = "";
}

function display_flex_Frame() {
  style.display.flex(info_frame);
  sleepFor(100);
  style.filter.blur(frame, 4);
  style.opacity(frame, 0.1);
  info_frame_insert_HTML();
}

console.timeEnd("Exécution script JS");
