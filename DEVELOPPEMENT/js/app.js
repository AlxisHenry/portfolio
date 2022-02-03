const grid_Template = document.querySelector(".grid-projects");
let id = 0;

for (let div = 0; div < 9; div++) {
  let div_toAdd = `<div class="projet-presentation-grid" id="pr${id}"><img class="imgsrc" src=""></div>`;
  grid_Template.insertAdjacentHTML("beforeend", div_toAdd);
  id++;
}

const imgs_src = document.querySelectorAll(".imgsrc");
const grid_Presentation = document.querySelectorAll('.imgsrc');
const grid_Vide = document.querySelectorAll('.projet-presentation-grid');
const path_to_image = "../assets/img/";
const imgs_event = [];  

imgs_src[0].src = `${path_to_image}no-project.png`;
imgs_src[1].src = `${path_to_image}no-project.png`;
imgs_src[2].src = `${path_to_image}Timken.png`;
imgs_src[3].src = `${path_to_image}no-project.png`;
imgs_src[4].src = `${path_to_image}aleatory.png`;
imgs_src[5].src = `${path_to_image}no-project.png`;
imgs_src[6].src = `${path_to_image}snipeit.png`;
imgs_src[7].src = `${path_to_image}no-project.png`;
imgs_src[8].src = `${path_to_image}sport-addict.png`;

for (let current = 0; current < imgs_src.length; current++) {
    if (grid_Presentation[current].outerHTML == `<img class="imgsrc" src="../assets/img/no-project.png">`) {
        grid_Presentation[current].className += (' remove-no-project');
        grid_Vide[current].className += (' remove-border');
    } else {
        imgs_event.push(grid_Presentation[current]);
    }
}

imgs_event.forEach((this_toggle) =>
  this_toggle.addEventListener("mouseover", (e) => {
    let overThisDiv = e.fromElement;
    let overThisImg = e.target;   
    overThisImg.classList.add('show-more-about-this-image')
  })
);

imgs_event.forEach((this_togle) =>
  this_togle.addEventListener("mouseout", () => {
   
    let element = 0
    for (element of grid_Presentation) {
        console.log(element)
        if (element.classList.contains('show-more-about-this-image')) {
           element.classList.remove('show-more-about-this-image');
        }
      }
  })
);