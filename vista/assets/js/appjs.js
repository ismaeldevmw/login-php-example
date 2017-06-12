var x;
x = $(document);
y = $(window);


x.ready(inicializarEventosDocument);
y.load(inicializarEventosWindow);

function inicializarEventosDocument() {
    logOut();
}

function inicializarEventosWindow() {
	
}


function logOut() {  
  var datos = "action=logout";
  $.post("../controlador/appController.php", datos, function(response) {      
 	$('#contenido').html(response);
  });
}
