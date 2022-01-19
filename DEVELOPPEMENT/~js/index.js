document.getElementById("src-img-centrale").insertAdjacentHTML(
  "afterbegin",
  (src_img_centrale = `
  <a id="href-img" href="${images.timken.href}"
    ><img
      id="img-centrale"
      alt="${images.timken.alt}"
      src="${images.timken.img}"
      title="${images.timken.title}"
      class="src"
  /></a>`)
);
document.getElementById("src-img-scnd").insertAdjacentHTML(
  "afterbegin",
  (src_img_scnd = `
  <img
    onclick=change_to_img1();
    id="img-scnd"
    alt="${images.snipeit.alt}"
    title="Faire passer en premier plan"
    src="${images.snipeit.img}"
  />`)
);
document.getElementById("src-img-thrd").insertAdjacentHTML(
  "afterbegin",
  (src_img_thrd = `
  <img
    onclick="change_to_img3();"
    id="img-thrd"
    alt="${images.aleatory.alt}"
    title="Faire passer en premier plan"
    src="${images.aleatory.img}"
  />`)
);

let first_button_div = document.getElementById("first_button_div"),
  img_centrale = document.getElementById("img-centrale"),
  img_nd = document.getElementById("img-scnd"),
  img_th = document.getElementById("img-thrd"),
  src_prp = document.querySelector(".src"),
  href_img = document.getElementById("href-img");

first_button_div.insertAdjacentHTML(
  "beforeend",
  (snipeit_button = `<i
    onclick="change_to_img1();"
    alt="${images.snipeit.alt}"
    title=""${images.snipeit.title}
    class="img1 btn1 fas fa-circle"
  ></i>`)
);
first_button_div.insertAdjacentHTML(
  "beforeend",
  (aleatory_button = `<i
    onclick="change_to_img2();"
    alt="${images.aleatory.alt}"
    title="${images.aleatory.title}"
    class="img2 btn2 fas fa-circle"
  ></i>`)
);
first_button_div.insertAdjacentHTML(
  "beforeend",
  (timken_button = `<i
  onclick="change_to_img3();"
  alt="${images.timken.alt}"
  title="${images.timken.title}"
  class="img3 btn3 fas fa-circle"
  ></i>`)
);

function change_to_img1() {
  img_centrale.title = images.snipeit.title;
  img_centrale.alt = images.snipeit.alt;
  img_centrale.src = images.snipeit.img;
  img_nd.src = images.aleatory.img;
  img_th.src = images.timken.img;
  src_prp.onclick = function () {
    href_img.href = images.snipeit.href;
  };
}

function change_to_img2() {
  img_centrale.title = images.aleatory.title;
  img_centrale.alt = images.aleatory.alt;
  img_centrale.src = images.aleatory.img;
  img_nd.src = images.timken.img;
  img_th.src = images.snipeit.img;
  src_prp.onclick = function () {
    let href_links_path = [images.timken.href, images.snipeit.href];
    let random_path_selector =
      href_links_path[Math.floor(Math.random() * href_links_path.length)];
    href_img.href = random_path_selector;
  };
}

function change_to_img3() {
  img_centrale.title = images.timken.title;
  img_centrale.alt = images.timken.alt;
  img_centrale.src = images.timken.img;
  img_nd.src = images.snipeit.img;
  img_th.src = images.aleatory.img;
  src_prp.onclick = function () {
    href_img.href = images.timken.href;
  };
}

function change_img_auto() {
  setTimeout(change_to_img1, 2000);
  setTimeout(change_to_img2, 4000);
  setTimeout(change_to_img3, 6000);
}

function change_img_onload() {
  setTimeout(change_to_img1, 2000);
  setTimeout(change_to_img2, 4000);
  setTimeout(change_to_img3, 6000);
  setInterval(change_img_auto, 6000);
}

console.timeEnd("Exécution script JS");
