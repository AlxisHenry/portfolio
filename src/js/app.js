import * as data from "./modules/data.js";
import { sleepFor } from "./main.js";

const grid_Template = document.querySelector(".grid-projects");
let id = 0;

for (let div = 0; div < 9; div++) {
  let div_toAdd = `<div class="projet-presentation-grid" id="pr${id}"><a class="href_this" href=""><img class="imgsrc" alt="" title="" src=""></a></div>`;
  grid_Template.insertAdjacentHTML("beforeend", div_toAdd);
  id++;
}

const imgs_src = document.querySelectorAll(".imgsrc");
const href_this = document.querySelector(".href_this");
const grid_Presentation = document.querySelectorAll(".imgsrc");
const grid_Vide = document.querySelectorAll(".projet-presentation-grid");
const path_to_images = "../../assets/img/no-backgrounds/";
const imgs_event = [];

imgs_src[0].src = `${path_to_images}sport-addict.png`;
imgs_src[1].src = `${path_to_images}snipeit.png`;
imgs_src[2].src = `${path_to_images}Timken.png`;
imgs_src[3].src = `${path_to_images}coming-soon.png`;
imgs_src[4].src = `${path_to_images}aleatory.png`;
imgs_src[5].src = `${path_to_images}coming-soon.png`;
imgs_src[6].src = `${path_to_images}coming-soon.png`;
imgs_src[7].src = `${path_to_images}coming-soon.png`;
imgs_src[8].src = `${path_to_images}coming-soon.png`;

const PathToOuterHTML = `<img class="imgsrc" alt="" title="" src="../../assets/img/no-backgrounds/`;                        

for (let current = 0; current < imgs_src.length; current++) {
  if (grid_Presentation[current].outerHTML == `${PathToOuterHTML}coming-soon.png">`) {
    grid_Presentation[current].className += " remove-no-project logo";
    grid_Presentation[current].style.cursor = "default";
    grid_Presentation[current].title = 'Not Found'
    grid_Vide[current].children[0].removeAttribute('href');
      if (current === imgs_src.length - 1) {
        grid_Presentation[current].className += " responsive-remove-last-children"
      }
  } else {
    const _this = grid_Presentation[current];
    switch (_this.outerHTML) {
      case `${PathToOuterHTML}aleatory.png">`:
        grid_Vide[current].firstChild.href = "./inprogress.html";
        _this.title = data.images.aleatory.title;
        _this.alt = data.images.aleatory.alt;
        break;
      case `${PathToOuterHTML}Timken.png">`:
        grid_Vide[current].firstChild.href = "./projet-timken.html";
        _this.title = data.images.first_project.title;
        _this.alt = data.images.first_project.alt;
        break;
      case `${PathToOuterHTML}sport-addict.png">`:
        grid_Vide[current].firstChild.href = "./projet-sport-addict.html";
        _this.title = data.images.third_project.title;
        _this.alt = data.images.third_project.alt;
        break;
      case `${PathToOuterHTML}snipeit.png">`:
        grid_Vide[current].firstChild.href = "./projet-snipe-it.html";
        _this.title = data.images.second_project.title;
        _this.alt = data.images.second_project.alt;
        break;
    }
    imgs_event.push(grid_Presentation[current]);
  }
}

imgs_event.forEach((this_toggle) =>
  this_toggle.addEventListener("mouseover", (e) => {
    let overThisDiv = e.fromElement;
    let overThisImg = e.target;
    overThisImg.classList.add("show-more-about-this-image");
  })
);

imgs_event.forEach((this_togle) =>
  this_togle.addEventListener("mouseout", () => {
    let element = 0;
    for (element of grid_Presentation) {
      if (element.classList.contains("show-more-about-this-image")) {
        element.classList.remove("show-more-about-this-image");
      }
    }
  })
);