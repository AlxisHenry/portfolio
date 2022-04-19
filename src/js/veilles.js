document.querySelector(".research-veille-technologique").addEventListener('keyup', () => {
  var DynamicResearch = document.querySelector(".research-veille-technologique").value;
  var cards = document.querySelector(".cards");
  SendResearch(DynamicResearch, cards);
});

function SendResearch(value, element) {
  console.log(value)
  var search_value = "user_research=" + value;
  $.ajax({
    type: "GET",
    url: "../php/dynamic-search.php",
    data: search_value,
    success: function (search_result) {
      element.innerHTML = '';
      element.insertAdjacentHTML('beforeend', search_result);
    },
    error: function () {
    },
  });
}

document.querySelector('.more-articles .fa-plus').addEventListener('click', (e) => {

  // Animation de l'icone +
  e.target.classList.add('fa-plus-animation');
  setTimeout(() => {
    e.target.classList.remove('fa-plus-animation');
  }, 1000)

  // Animation des favoris
  document.querySelector('.favorites-title').classList.add('favorites-card-hidden-transition');
  document.querySelector('.favorites-cards').classList.add('favorites-card-hidden-transition');
  document.querySelector('.cards').classList.add('all-articles-show-transition');
  document.querySelector('.contain-research-veille-technologique').classList.add('contain-research-veille-technologique-animation');

  setTimeout(() => {
    document.querySelector('.favorites-title').classList.add('hidden');
    document.querySelector('.favorites-cards').classList.add('hidden');
  }, 3000)



})

/*
function SendResearch(value, element) {
  var search_value = "user_research=" + value;
  fetch('../php/dynamic-search.php', {
    method: 'POST',
    header: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(search_value),
  }).then((response) => response.json()
  ).then((array) => {
    console.log(array);
  })
}*/