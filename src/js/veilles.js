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