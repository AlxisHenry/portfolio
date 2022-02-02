console.time("Exécution script JS");

// ------------------ HISTORY BACK ICON  ------------------

document.getElementById("btn-rar").addEventListener("click", (e) => {
  if (confirm("Redirect ?")) {
    history.back();
  } else {
    e.preventDefault();
    void 0;
  }
});

// ------------------ SEND TO DISCORD ICON ------------------

document.getElementById("href-discord").addEventListener("click", (e) => {
  if (confirm("Redirect ?")) {
    // Redirection vers discord
  } else {
    e.preventDefault();
    void 0;
  }
});

// ------------------ SLEEP FUNC ------------------666666666666666666666666666666666666666666666666666666666666666666666666666

function sleepFor(sleepDuration) {
  var now = new Date().getTime();
  while (new Date().getTime() < now + sleepDuration) {
    /* Do nothing */
  }
}

// ------------------ LOADER ------------------

if (document.querySelector('.loader-style-display')) {
  const loader = document.querySelector('.loader-style-display');
  const LoaderImg = `<img id="loader-aleatory-img" alt="${images.aleatory.alt}" title="aleatory" src="${images.aleatory.img}"/>`
  loader.insertAdjacentHTML('afterbegin', LoaderImg);
  
  window.addEventListener('load', displayLoader);
  
  function displayLoader() {
    loader.className += " loader-none";
  }
}

// ------------------ MENU ICON ------------------

const menu_deroulantHover = document.querySelector(".fa-chevron-circle-down");
const menu_deroulantTable = document.querySelector("#responsive");

const overMenu = menu_deroulantHover.addEventListener("mouseover", () => {
  menu_deroulantHover.classList.add("fa-chevron-circle-down-hover");
});
const outMenu = menu_deroulantHover.addEventListener("mouseout", () => {
  menu_deroulantHover.classList.remove("fa-chevron-circle-down-hover");
});
const overTable = menu_deroulantTable.addEventListener("mouseover", () => {
  menu_deroulantHover.classList.add("fa-chevron-circle-down-hover");
});
const outTable = menu_deroulantTable.addEventListener("mouseout", () => {
  menu_deroulantHover.classList.remove("fa-chevron-circle-down-hover");
});

// ------------------ FOOTER ------------------

const date = new Date();

const FooterText = `<span id="footerspan">© ${date.getFullYear()} | Alexis Henry</span>`;

const addHTML_toFooter = document
  .getElementById("foot")
  .insertAdjacentHTML("afterbegin", FooterText);

// ------------------ FAVICON ------------------

if (document.querySelector("#index_page")){
  let href_to_favicon = "./DEVELOPPEMENT/assets/@ico/favicon.png";
  const favicon = `<link rel="icon" href="${href_to_favicon}" />`;
  document.querySelector("title").insertAdjacentHTML("afterend", favicon);
} else {
  let href_to_favicon = "../assets/@ico/favicon.png"; 
  const favicon = `<link rel="icon" href="${href_to_favicon}" />`;
  document.querySelector("title").insertAdjacentHTML("afterend", favicon);
}

// ------------------ DEBUG ------------------

console.log(`%cIf you see a bug, please report them on : https://github.com/AlxisHenry/CCI-2021-PORTFOLIO`, "color: red; font-size:10px;");