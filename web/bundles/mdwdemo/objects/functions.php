<?php

/*-------------------
FICHERO CREADO PARA EL CONTROL DE FUNCIONES
-------------------------
*/

//funcion que habilita el modo debug
function DEBUG_MODE(){
	return true;
	//descomentar esto para deshabilitar modo debug
	//return false;
}

function dameURL(){
	$url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
	$url2=$_SERVER['REQUEST_URI'];
	return $url2;
}

function strleft($s1, $s2) { return substr($s1, 0, strpos($s1, $s2));}

function selfURL() { 
	$s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : ""; 
	$protocol = strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/").$s; 
	$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]); 
	$URL = $protocol."://".$_SERVER['SERVER_NAME']."/";
	$pos = strpos($URL, "www.");
	if ($pos === false){
		$pos = strlen("http://");
		$URL = substr($URL,0,$pos).'www.'.substr($URL,$pos);
	}
	return $URL;
} 

function extraer_padre() {

	 $web=$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
     $particion = explode("/", $web);
     $padre = $particion[0];

     return $padre;
} 

function server_path() {

	 $web=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
     $particion = explode("/", $web);
     $path = $particion[0];

     return $path;
} 

function visibilidadEmpresa($_db,$idCompany){

	echo 'estoy en visibilidadEmpresa';
	echo 'company es: '.$idCompany;
	$SQL    = "SELECT idService FROM SERVICES WHERE idCompany='".$idCompany."';";
	$servicios = array();
	$resultado = $_db->execute_query($SQL);
	if (count($temp)!=0){
		echo' Dentro del if';
		while ($row = mysql_fetch_row($resultado)){
			$servicios[] = $row[0];
			echo' Dentro del while';
		}
		
	}
	else{
		echo' el count es 00 amijooo';
	}
	
	echo' Imprimo Servicios';
	$servicios[] = 'a pincho';
	print_r($servicios);
	
	 // echo "Consulta ".$query."<br>";
	 /*$temp     = $this->connection_db->execute_query($query);
         if (count($temp)==0){
			
		 }*/
		 
	return $servicios;
	
}

function redirection(){
// Obtenemos la página en la que ha estado antes el visitante 

echo 'llega a redirection';

$pagina_anterior = "{$_SERVER['HTTP_HOST']}";

echo 'pagina es '.$pagina_anterior.'<br>';

// Extraemos el subdominio con una expresión regular 

preg_match('/^(www\.)?(.+)?.dominio.com/',$pagina_anterior,$encontrados); 

// Si hay un subdominio 

if ($encontrados[2]=="subdominio") { 

 // Redireccionamos a www.dominio.com/subdominio 

 Header ("Location: http://www.dominio.com/subdominio"); 

 exit; 
}
else{
	Header ("Location: http://localhost/Espartapp/test.html");
}

}

function failAnt(){
	Header ("Location: http://localhost/Espartapp/fail.html");
}

function registerIndex($_path){
	Header ("Location: ".$_path."/formulario.htm");
}

function redirectLogin($_path){
	Header ("Location: ".$_path."/formularioLog.htm");
}

function fail($_path){
	Header ("Location: ".$_path."/error.htm");
}

function userNotExits($_path){
	Header ("Location: ".$_path."/errorUser.htm");
}

function accessarea(){
	//Header ("Location: ".$_path."/access.htm");
	Header ("Location: /access.php");
}


function get_template($_db,$path){

	//echo 'estoy en template';
	//echo 'path es '.$path;
	$SQL    = "SELECT templates FROM RESELLERS WHERE subdomain='".$path."';";
	//$resultado = $_db->execute_query($SQL);
	$temp  = $_db->execute_query($query);
	//echo 'temp es '.$temp[0][0];
         if (count($temp)==0){
         	// Template not found
			 echo "Template not found";
             $_db->free_last_query;
             return -1;
         }
         else{
			//echo 'template '.$temp[0][1];
			$template = $temp[0][1];
		 }
	
	return $template;
}

function generateRandomCode($long) {
 $key = '';
 $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
 $max = strlen($pattern)-1;
 for($i=0;$i < $long;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}


?>