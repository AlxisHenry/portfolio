$(".research-veille-technologique").keyup(function () {
  var DynamicResearch = $(".research-veille-technologique").val();
  var liste = $(".resultat");

  if ($(".research-veille-technologique").val().length < 2) {
    return false;
  } else {
    SendResearch(DynamicResearch, liste);
  }
});

$(".research-veille-technologique").keydown(function () {
  if ($(".research-veille-technologique").val().length < 5) {
    $(".resultat").html("").show();
  }
});

function SendResearch(value, dom) {
  var param = "filtre=" + value;
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
