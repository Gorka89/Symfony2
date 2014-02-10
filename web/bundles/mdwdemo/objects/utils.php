
<?php

function nosql($var){
   $var=mysql_escape_string($var);
   $sen=array("SCRIPT"," AND ", "+" ,"SELECT", "UPDATE", "INSERT", "DELETE", "<>", "*","DROP","WHERE","\'"," OR ","ALERT");
   $cache=str_replace($sen,"",strtoupper($var),$num);
   if($num>0){
      return false;
   }
   return true;
}

function seguridad($var,$min,$max){
   $var=mysql_escape_string($var);
   if(is_null($var)){
      return false;
   }elseif(strlen($var)< $min){
      return false;
   }elseif(strlen($var)>$max){
      return false;
   }
   return nosql($var);
}

  function sec2hms ($sec, $padHours = false) 
  {

    // holds formatted string
    $hms = "";
    
    // there are 3600 seconds in an hour, so if we
    // divide total seconds by 3600 and throw away
    // the remainder, we've got the number of hours
    $hours = intval(intval($sec) / 3600); 

    // add to $hms, with a leading 0 if asked for
    $hms .= ($padHours) 
          ? str_pad($hours, 2, "0", STR_PAD_LEFT). ':'
          : $hours. ':';
     
    // dividing the total seconds by 60 will give us
    // the number of minutes, but we're interested in 
    // minutes past the hour: to get that, we need to 
    // divide by 60 again and keep the remainder
    $minutes = intval(($sec / 60) % 60); 

    // then add to $hms (with a leading 0 if needed)
    $hms .= str_pad($minutes, 2, "0", STR_PAD_LEFT). ':';

    // seconds are simple - just divide the total
    // seconds by 60 and keep the remainder
    $seconds = intval($sec % 60); 

    // add to $hms, again with a leading 0 if needed
    $hms .= str_pad($seconds, 2, "0", STR_PAD_LEFT);

    // done!
    return $hms;

  }
	// //////////////////////////
	// GetElementByName
	// //////////////////////////
	// Parsea una cadena xml y devuelve todo lo que hay entre start y end, 
	// por ejemplo, <status>hola</status> devolvería hola si pongo start a <status> y end a </status>
	function GetElementByName ($xml, $start, $end) {
	  	   $startpos = strpos($xml, $start);
		   if ($startpos === false) {
		     return false;
		   }
		   $endpos = strpos($xml, $end);
		   $endpos = $endpos+strlen($end);    
		   $endpos = $endpos-$startpos;
		   $endpos = $endpos - strlen($end);
		   $tag = substr ($xml, $startpos, $endpos);
		   $tag = substr ($tag, strlen($start));
		   return $tag;
	}

	// //////////////////////////
	// detectar ip
	// //////////////////////////
	// Detecta la dirección IP del cliente que ha hecho la consulta
	function detectar_ip()
	{
		if(!empty($_SERVER['HTTP_X_FORWARDER_FOR']))
			$ip = $_SERVER['HTTP_X_FORWARDER_FOR'];
		elseif(!empty($_SERVER['HTTP_VIA']))
			$ip = $_SERVER['HTTP_VIA'];
		elseif(!empty($_SERVER['REMOTE_ADDR']))
			$ip = $_SERVER['REMOTE_ADDR'];
		else
			$ip = 'Desconocida';
		return $ip;
	}

?>

