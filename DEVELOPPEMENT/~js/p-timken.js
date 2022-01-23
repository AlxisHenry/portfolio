let video = document.getElementById("video_projet"),
  frame = document.getElementById("frame_projet"),
  ico_video = document.getElementById("file-video"),
  ico_frame = document.getElementById("file-code"),
  ico_video_info = document.getElementById("info-circle"),
  ico_frame_info = document.getElementById("info-circle_code"),
  info_frame = document.getElementById("infodivframe"),
  info_video = document.getElementById("infodivvideo"),
  togglefunction = document.querySelectorAll(".togglefunction"),
  fainfocircle = document.querySelectorAll(".fa-info-circle");

togglefunction[0].addEventListener("click", () => {
  toggle();
});
togglefunction[1].addEventListener("click", () => {
  toggle();
});
fainfocircle[0].addEventListener("mouseover", () => {
  info_frame_up();
  info_frame_insert_HTML();
});
fainfocircle[0].addEventListener("mouseout", () => {
  info_frame_down();
  info_frame.innerHTML = "";
});
fainfocircle[1].addEventListener("mouseover", () => {
  info_video_up();
  info_video_insert_HTML();
});
fainfocircle[1].addEventListener("mouseout", () => {
  info_video_down();
  info_video.innerHTML = "";
});

function info_frame_insert_HTML() {
  info_frame.insertAdjacentHTML(
    "afterbegin",
    `
  <h1 id="infodivframeh1"><strong> Site codé </strong></h1>
  <p id="infoframep">
    Le projet consiste en l'automatisation de la modification du stock
    d'articles.<br /><br />
    Ayant présenté le second projet Snipe-IT à mon service, ils ont trouvé
    un incovénient,<br />
    L'ajout d'une quantité d'article lors d'un achat n'est absolument pas
    intuitif.<br />
    De ce fait, j'ai eu l'idée d'<i>automatiser</i> l'ajout de la quantité
    achetée.
  </p>`
  );
}

function info_video_insert_HTML() {
  info_video.insertAdjacentHTML(
    "afterbegin",
    `
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
  </p>`
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

function info_video_up() {
  style.display.flex(info_video);
  sleepFor(100);
  style.filter.blur(video, 4);
  style.opacity(video, 0.5);
}
function info_video_down() {
  style.display.none(info_video);
  sleepFor(100);
  style.filter.none(video);
  style.opacity(video, 1);
}

function info_frame_up() {
  style.display.flex(info_frame);
  sleepFor(100);
  style.filter.blur(frame, 4);
  style.opacity(frame, 0.1);
}
function info_frame_down() {
  style.display.none(info_frame);
  sleepFor(100);
  style.filter.none(frame);
  style.opacity(frame, 1);
}

console.timeEnd("Exécution script JS");