<?php

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Response;
					
    $method = $_SERVER['REQUEST_METHOD'];

	switch ($method) {
	  case 'POST':
	     $web_action  	= $_POST["web_action"];
	     $procedencia 	= $_POST["procedencia"];
	     $apariencia  	= $_POST["apariencia"];
	     $web_mail 		= $_POST["web_mail"];
		 $web_pass 		= $_POST["web_pass"];
             
	    break;
		
	  case 'GET':
	     $web_action  	= $_GET["web_action"];
	     $procedencia 	= $_GET["procedencia"];
	     $apariencia  	= $_GET["apariencia"];
	     $web_mail 		= $_GET["web_mail"];
		 $web_pass 		= $_GET["web_pass"];
             
	     break; 
		 
	  default:
	     $web_action  	= $_GET["web_action"];
	     $procedencia 	= $_GET["procedencia"];
	     $apariencia  	= $_GET["apariencia"];
	     $web_mail 		= $_GET["web_mail"];
		 $web_pass 		= $_GET["web_pass"];
             
	     break;
	}


    if ($web_action=="") {
	
		// Muestro template
		// ///////////////////////////////////////////////
		if ($apariencia==""){
			$apariencia="inka";
		};
		
		
	}

		// Inserto registro en la base de datos
		// ///////////////////////////////////////////////
		/*if (!class_exists(access_bd)) {include ("../objects/access_bd.php");};
		$access = new access_bd;
		$access_connected = $access->connect();*/
		
		/*$connection = entityManager->getConnection();
   
	   $sth = $connection->prepare("INSERT INTO USERS(login) VALUES ('VAAAAAAA')");
		$sth->execute();*/
		
		$sth = entityManager->getConnection()->prepare("SELECT * FROM USERS");
		$sth->execute();
		
		if ($access_connected){

            // Si conecta con la base de datos, inserto el registro
			// ///////////////////////////////////////////////////////////
			// echo "Conecta bien con la base de datos";

			// Realizo las comprobaciones.
			$error_exist = 0;
			$error_info  = "";
			if (($web_mail=="")){
			//if (($web_mail=="")){
				// El mail es obligatorio...
				$error_exist = 1;
				$error_info = $error_info."El campo de direcci&oacute;n de correo electr&oacute;nico es obligatorio.<BR>";
			};
			if (($web_pass=="")){
				// El pass es obligatorio...
				$error_exist = 1;
				$error_info = $error_info."El campo password es obligatorio.<BR>";
			};
			
			if (!class_exists(User)) {include ("../objects/login.php");};
			$nuevo_registro = new User($access,$web_mail,$web_pass);
			


			if ($error_exist==0) {
				// Si está todo bien, añado el registro
				//echo "No hubo error";
				$resultado = $nuevo_registro->access();
				
				if ($resultado == 1){								

					//$tpl->parse(MAIN, array("error","main"));
						
					//$tpl->FastPrint();
					
					//Aqui esta todo en regla, se crea la sesion
					//session_name(...);
					session_start();
					$_SESSION["login"] = $web_mail;
					$_SESSION["template"] = $template;
					//$_SESSION["nombre_cliente"] = $row["cliente"];
					
					//consigo empresa a la que pertenece
					if (!class_exists(GetCompanyByLogin)) {include ("../objects/getCompanyByLogin.php");};
					$idCompany = new GetCompanyByLogin($access,$web_mail);
					//si ha llegado hasta aqui el usuario existe
					$company = $idCompany->getCompany();
					echo 'la id de empresa es: '.$company;
					$_SESSION["idcompany"] = $company;
					
					//consigo SERVICIOS de la company
					if (!class_exists(GetServicesByCompany)) {include ("../objects/getServicesByCompany.php");};
					$aux = new GetServicesByCompany($access,$company);
					//si ha llegado hasta aqui el usuario existe
					$services = $aux->getServices();
					echo 'la id del primer servicio es: '.$services[1][0];
					$_SESSION["services"] = $services;
					
					//consigo modulos de la company
					if (!class_exists(GetModulesByCompany)) {include ("../objects/getModulesByCompany.php");};
					$aux = new GetModulesByCompany($access,$company);
					//si ha llegado hasta aqui el usuario existe
					$modules = $aux->getModules();
					echo 'la id del primer segundo es: '.$modules[1][0];
					echo 'la id del primermodulo00: '.$modules[0][0].'</br>';
					print_r($modules);
					$_SESSION["modules"] = $modules;
					
					include_once ("../objects/functions.php");
					accessarea();

					exit;
				}
				elseif ($resultado == -1){
					
					//return $this->render('MDWDemoBundle:Default:index.html.twig', array('name' => $name));					
					
					$name = 'yeahhhs';
					
					//return $this->render('MDWDemoBundle:Default:index.html.twig', array('name' => $name));
					
					//$response = new Response('Falla user!!!');
					//return $response;
					
					echo 'Falla user';

					exit;
				}
				elseif ($resultado == -2){
				
					echo 'Falla user or login';

					exit;
				}

			} else {
				// Si ha habido algún error, lo muestro.
				echo "Hubo algún error".$error_info;

				exit;	
		
			};
		} else {
			// Si hay error al conectar, muestro error de base de datos
			// ///////////////////////////////////////////////////////////
			echo "Error de Base de datos";
			
			exit;
			
		};

?>
