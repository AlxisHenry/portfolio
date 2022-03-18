$(".research-veille-technologique").keyup(function () {
  var DynamicResearch = $(".research-veille-technologique").val();
  var cards = $(".cards");
  SendResearch(DynamicResearch, cards);
});

function SendResearch(value, dom) {
  var param = "user_research=" + value;
  $.ajax({
    type: "GET",
    url: "request.php",
    data: param,
    success: function (server_response) {
      dom.html(server_response).show();
    },
    error: function () {
      console.log("Erreur");
    },
  });
}
