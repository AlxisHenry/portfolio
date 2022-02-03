const grid_Template = document.querySelector('.grid-projects');
let id = 1;

for (let div = 0; div < 12; div++){
   let div_toAdd = `<div class="projet-presentation-grid" id="pr${id}"></div>`;
   grid_Template.insertAdjacentHTML('beforeend', div_toAdd)
   id++
}

