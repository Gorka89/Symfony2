<?php

	//tengo que coger el idioma bien por sesion o get o lo que sea
	//if (isset($_SESSION['lang']) && $_SESSION['lang']!='')
	/*if (isset($_GET['lang']) && $_GET['lang']!=''){
	   $lang=strtolower($_GET['lang']);
	}
	else{
	   $lang='es';
	}
	 
	// Cargamos el fichero de idioma. Por defecto espanol.
	include_once "languages/{$lang}_traduction.php";

echo $support_message;*/

$e = $_POST['recoger'];

echo 'AQUI ESTAMOS EN SOPORTE CARGADO POR AJAX EN DIV CONTENT<br>';

echo 'y me llega: '.$e;

?>