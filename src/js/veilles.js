$(".research-veille-technologique").keyup(function () {
  var DynamicResearch = $(".research-veille-technologique").val();
  var cards = $(".cards");
  SendResearch(DynamicResearch, cards);
});

function SendResearch(value, dom) {
  var param = "user_research=" + value;
  $.ajax({
    type: "GET",
    url: "../php/dynamic-search.php",
    data: param,
    success: function (search_result) {
      dom.html(search_result).show();
    },
    error: function () {
      console.log("Erreur");
    },
  });
}
