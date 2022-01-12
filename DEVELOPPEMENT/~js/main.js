console.time("Exécution script JS");

// Fonctions globales

document.getElementById("btn-rar").addEventListener("click", (e) => {
  if (confirm("Redirect ?")) {
    history.back();
  } else {
    e.preventDefault();
    void 0;
  }
});

document.getElementById("href-discord").addEventListener("click", (e) => {
  if (confirm("Redirect ?")) {
    // Redirection vers discord
  } else {
    e.preventDefault();
    void 0;
  }
});

function sleepFor(sleepDuration) {
  var now = new Date().getTime();
  while (new Date().getTime() < now + sleepDuration) {
    /* Do nothing */
  }
}

// Fonctions utilisées sur 'index.html'

let img1 = document.querySelector(".img1"),
  img2 = document.querySelector(".img2"),
  img3 = document.querySelector(".img3"),
  img_centrale = document.getElementById("img-centrale"),
  img_nd = document.getElementById("img-scnd"),
  img_th = document.getElementById("img-thrd"),
  src_prp = document.querySelector(".src"),
  href_img = document.getElementById("href-img");

function change_to_img1() {
  img3.classList.remove("fas");
  img2.classList.remove("fas");
  img1.classList.add("fas");
  img_centrale.title = timken.title;
  img_centrale.alt = timken.alt;
  img_centrale.src = timken.img;
  img_nd.src = snipeit.img;
  img_th.src = aleatory.img;
  src_prp.onclick = function () {
    href_img.href = timken.href;
  };
  //  console.log("change1() utilisée");
}

function change_to_img2() {
  img1.classList.remove("fas");
  img1.classList.add("far");
  img3.classList.remove("fas");
  img2.classList.add("fas");
  img_centrale.title = snipeit.title;
  img_centrale.alt = snipeit.alt;
  img_centrale.src = snipeit.img;
  img_nd.src = timken.img;
  img_th.src = aleatory.img;
  src_prp.onclick = function () {
    href_img.href = snipeit.href;
  };
  //  console.log("change2() utilisée");
}

function change_to_img3() {
  img1.classList.remove("fas");
  img1.classList.add("far");
  img2.classList.remove("fas");
  img3.classList.add("fas");
  img_centrale.title = aleatory.title;
  img_centrale.alt = aleatory.alt;
  img_centrale.src = aleatory.img;
  img_nd.src = timken.img;
  img_th.src = snipeit.img;
  src_prp.onclick = function () {
    let href_links_path = [timken.href, snipeit.href];
    let random_path_selector =
      href_links_path[Math.floor(Math.random() * href_links_path.length)];
    href_img.href = random_path_selector;
  };
  //  console.log("change3() utilisée");
}

function change_img_auto() {
  setInterval(change_to_img2, 4000);
  setInterval(change_to_img3, 8000);
  setInterval(change_to_img1, 12000);
}

// Fonctions utilisées sur 'comprendre.html'

// Fonctions utilisées sur 'presentation.html'

// Fonctions utilisées sur 'projets.html'

// Fonctions utilisées sur 'projet-timken.html'

let video = document.getElementById("video_projet"),
  frame = document.getElementById("frame_projet"),
  i_btn_video = document.getElementById("file-video"),
  i_btn_code = document.getElementById("file-code"),
  i_btn_informations = document.getElementById("info-circle"),
  i_btn_informations_code = document.getElementById("info-circle_code");

function change_video_frame_menu() {
  if (getComputedStyle(video).display != "none") {
    style.display.none(video);
    sleepFor(100);
    style.display.flex(frame);
    style.display.none(i_btn_video);
    style.display.flex(i_btn_code);
    style.display.none(i_btn_informations);
    style.display.flex(i_btn_informations_code);
  } else {
    style.display.flex(video);
    sleepFor(100);
    style.display.none(frame);
    style.display.none(i_btn_code);
    style.display.flex(i_btn_video);
    style.display.flex(i_btn_informations);
    style.display.none(i_btn_informations_code);
  }
}

let infodivvideo = document.getElementById("infodivvideo"),
  video_projet = document.getElementById("video_projet"),
  infodivframe = document.getElementById("infodivframe"),
  frame_projet = document.getElementById("frame_projet");

// Vidéo
function affichage_flex_circle() {
  style.display.flex(infodivvideo);
  sleepFor(100);
  style.filter.blur(video_projet, 4)
  style.opacity(video_projet, 0.5);
  // console.log("video flex mouseover info")
}
function affichage_none_circle() {
  style.display.none(infodivvideo);
  sleepFor(100);
  style.filter.none(video_projet)
  style.opacity(video_projet, 1);
  // console.log("video none mouseout info")
}

// Frame
function affichage_flex_frame_circle() {
  style.display.flex(infodivframe);
  sleepFor(100);
  style.filter.blur(frame_projet, 4)
  style.opacity(frame_projet, 0.1);
  // console.log("frame flex mouseover info")
}
function affichage_none_frame_circle() {
  style.display.none(infodivframe);
  sleepFor(100);
  style.filter.none(frame_projet);
  style.opacity(frame_projet, 1);
  // console.log("frame none mouseout info")
}

// Fonctions utilisées sur 'projet-snipe-it.html'

// Fonctions globales

console.timeEnd("Exécution script JS");
