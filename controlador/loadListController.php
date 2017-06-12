<?php
require_once "../ruta.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/Modelo/Bo/usuarioBo.php';

switch ($_GET['action']) {
	case "users":  
		$bo = new usuarioBo();
		$r = $bo->traeUsuariosBo();
		print $r;
		break;
}
          

  