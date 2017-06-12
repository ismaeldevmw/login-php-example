<?php 
switch ($_SESSION['tipo']) {
	case '1':
		include('menu1.php');
		break;
	case '2':
		include('menu2.php');
		break;
	case '3':
		include('menu3.php');
		break;
}