$(".research-veille-technologique").keyup(function () {
  var DynamicResearch = $(".research-veille-technologique").val();
  var cards = $(".cards");
  if ($(".research-veille-technologique").val().length < 2) {
    return false;
  } else {
    SendResearch(DynamicResearch, cards);
  }
});

$(".research-veille-technologique").keydown(function () {
  if ($(".research-veille-technologique").val().length < 5) {
    $(".cards").html("").show();
  }
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
