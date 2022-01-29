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

// ------------------ TO DISCORD ICON ------------------

document.getElementById("href-discord").addEventListener("click", (e) => {
  if (confirm("Redirect ?")) {
    // Redirection vers discord
  } else {
    e.preventDefault();
    void 0;
  }
});

// ------------------ SLEEP FUNC ------------------

function sleepFor(sleepDuration) {
  var now = new Date().getTime();
  while (new Date().getTime() < now + sleepDuration) {
    /* Do nothing */
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

