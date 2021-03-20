$(document).ready(function(){
  var ventana=$("#semanasssss");
  ventana.click(function(){
    $("#targeta").css("display","flex");
    $("#semanal").hide();
  });
  $("#botonparticipar").click(function(){
    $("#semanal").show();
    $("#targeta").css("display","none");
    window.location.replace("#noticias");
  });
  $("#botonparticipar2").click(function(){
    $("#semanal").show();
    $("#targeta").css("display","none");
    window.location.replace("#noticias");
  });
});
