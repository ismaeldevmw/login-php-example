var x;
x = $(document);
y = $(window);
x.ready(inicializarEventos);
y.load(preloadFinish);

function inicializarEventos() {
    preloadInit();
    login();
}

function login(){
  $('#formlogin').submit(function(event){
    event.preventDefault();
    var folio = $("#itFolio").val();
    var password = $("#itPassword").val();

    if (folio == "") {
      $("#campo1").addClass("has-error");
      $("#mensaje1").fadeIn();
      return false;
    }else {
      $("#campo1").removeClass("has-error");
      $("#mensaje1").fadeOut();
      if (password == "") {
        $("#campo2").addClass("has-error");
        $("#mensaje2").fadeIn();
        return false;
      }else {
        $("#campo2").removeClass("has-error");
        $("#mensaje2").fadeOut();
        $("#mensaje").html("");
      var datos = "action=login&" + $("#formlogin").serialize();
      $.post("../controlador/usersController.php", datos, function(data) {        
          $("#mensaje").html(data);
          $('#mensaje').fadeIn();
      });
      }
    }        
  });
}

function preloadInit() {
  //eliminamos el scroll de la pagina
  $("body").css({"overflow-y":"hidden"});
  //guardamos en una variable el alto del que tiene tu browser que no es lo mismo que del DOM
  var alto=$(window).height();
  //agregamos en el body un div que sera que ocupe toda la pantalla y se muestra encima de todo
  $("body").append("<div id='pre-load-web'><div id='imagen-load'><img src='assets/img/ajax-loader.gif'/><br />Cargando...</div>");
  //le damos el alto
  $("#pre-load-web").css({height:alto+"px"});
  //esta sera la capa que esta dento de la capa que muestra un gif
  $("#imagen-load").css({"margin-top":(alto/2)-30+"px"});
}

function preloadFinish() {
  $("#pre-load-web").fadeOut(1000,function() { 
    //eliminamos la capa de precarga
    $(this).remove();
    //permitimos scroll
    $("body").css({"overflow-y":"auto"}); 
   });
}