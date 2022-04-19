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

const FavoritesTitle = document.querySelector('.favorites-title');
const FavoritesCards = document.querySelector('.favorites-cards');
const Cards = document.querySelector('.cards');
const CardsResearch = document.querySelector('.contain-research-veille-technologique');

document.querySelector('.more-articles .fa-plus').addEventListener('click', (e) => {

  // Animation de l'icone +
  e.target.classList.add('fa-plus-animation');
  setTimeout(() => {
    e.target.classList.remove('fa-plus-animation');
    e.target.classList.add('hidden');
    e.target.parentNode.children[1].classList.remove('hidden')
  }, 1000)

  // Déplacement des favoris
  FavoritesTitle.classList.add('favorites-card-hidden-transition');
  FavoritesCards.classList.add('favorites-card-hidden-transition');

  // Déplacement des articles
  Cards.classList.remove('hidden');
  CardsResearch.classList.remove('hidden');
  Cards.classList.add('all-articles-show-transition');
  CardsResearch.classList.add('contain-research-veille-technologique-animation');

  // Suppression des favoris
  setTimeout(() => {
    FavoritesTitle.classList.add('hidden');
    FavoritesCards.classList.add('hidden');
    FavoritesTitle.classList.remove('favorites-card-up-transition');
    FavoritesCards.classList.remove('favorites-card-up-transition');
    FavoritesTitle.classList.remove('favorites-card-hidden-transition')
    FavoritesCards.classList.remove('favorites-card-hidden-transition')
    }, 1500)
})

document.querySelector('.more-articles .fa-xmark').addEventListener('click', (e) => {

  e.target.classList.add('fa-plus-animation');
  setTimeout(() => {
    e.target.classList.remove('fa-plus-animation');
    e.target.classList.add('hidden');
    e.target.parentNode.children[0].classList.remove('hidden')
  }, 1000)

  // Déplacement des articles
  Cards.classList.add('all-articles-down-transition');
  CardsResearch.classList.add('contain-research-veille-technologique-animation-reverse');

  // Déplacement des favoris
  FavoritesTitle.classList.remove('hidden');
  FavoritesCards.classList.remove('hidden');
  FavoritesTitle.classList.add('favorites-card-up-transition');
  FavoritesCards.classList.add('favorites-card-up-transition');

  // Suppression des articles
  setTimeout(() => {
    Cards.classList.add('hidden');
    CardsResearch.classList.add('hidden')
    Cards.classList.remove('all-articles-show-transition');
    CardsResearch.classList.remove('contain-research-veille-technologique-animation');
    Cards.classList.remove('all-articles-down-transition');
    CardsResearch.classList.remove('contain-research-veille-technologique-animation-reverse');
  }, 1500)


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