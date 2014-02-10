<?php

	include ("../objects/utils.php");
	
	//use MDW\DemoBundle\Entity\appmodulesvoting;
	
    $method = $_SERVER['REQUEST_METHOD'];
	
	switch ($method) {
	  case 'POST':
	     $question  	= $_POST["web_question"];
	     $option1 	= $_POST["web_option1"];
	     $option2 	= $_POST["web_option2"];
		 $option3 	= $_POST["web_option3"];
		 $option4 	= $_POST["web_option4"];
		 $option5 	= $_POST["web_option5"];
		 $option6 	= $_POST["web_option6"];
		 $questioncolor  	= $_POST["web_question_color"];
		 $optioncolor1 	= $_POST["web_option1_color"];
		 $optioncolor2 	= $_POST["web_option2_color"];
		 $optioncolor3 	= $_POST["web_option3_color"];
		 $optioncolor4 	= $_POST["web_option4_color"];
		 $optioncolor5 	= $_POST["web_option5_color"];
		 $optioncolor6 	= $_POST["web_option6_color"];
             
	    break;
		
	  case 'GET':
	     $question  	= $_GET["web_question"];
	     $option1 	= $_GET["web_option1"];
	     $option2 	= $_GET["web_option2"];
		 $option3 	= $_GET["web_option3"];
		 $option4 	= $_GET["web_option4"];
		 $option5 	= $_GET["web_option5"];
		 $option6 	= $_GET["web_option6"];
		 $questioncolor  	= $_GET["web_question_color"];
		 $optioncolor1 	= $_GET["web_option1_color"];
		 $optioncolor2 	= $_GET["web_option2_color"];
		 $optioncolor3 	= $_GET["web_option3_color"];
		 $optioncolor4 	= $_GET["web_option4_color"];
		 $optioncolor5 	= $_GET["web_option5_color"];
		 $optioncolor6 	= $_GET["web_option6_color"];
             
	     break; 
		 
	  default:
	     $question  	= $_GET["web_question"];
	     $option1 	= $_GET["web_option1"];
	     $option2 	= $_GET["web_option2"];
		 $option3 	= $_GET["web_option3"];
		 $option4 	= $_GET["web_option4"];
		 $option5 	= $_GET["web_option5"];
		 $option6 	= $_GET["web_option6"];
		 $questioncolor  	= $_GET["web_question_color"];
		 $optioncolor1 	= $_GET["web_option1_color"];
		 $optioncolor2 	= $_GET["web_option2_color"];
		 $optioncolor3 	= $_GET["web_option3_color"];
		 $optioncolor4 	= $_GET["web_option4_color"];
		 $optioncolor5 	= $_GET["web_option5_color"];
		 $optioncolor6 	= $_GET["web_option6_color"];
             
	     break;
	}
			// Realizo las comprobaciones.
			$error_exist = 0;
			$error_info  = "";
			if (($question=="") || (!seguridad($question,3,100))){
				$error_exist++;
				$error_info = $error_info."<error_item><error_id>PREGUNTA</error_id>\n";
				$error_info = $error_info."<error_desc>El campo de la pregunta a votar es obligatorio.</error_desc></error_item>";
			};
			//minimo dos opciones obligadas
			if (($option1=="")){
					$error_exist++;
					$error_info = $error_info."<error_item><error_id>OPTION1</error_id>\n";
					$error_info = $error_info."<error_desc>El campo opcion1 es obligatorio.</error_desc></error_item>";
			};
			if (($option2=="")){
				$error_exist++;
				$error_info = $error_info."<error_item><error_id>OPTION2</error_id>\n";
				$error_info = $error_info."<error_desc>El campo opcion2 es obligatorio.</error_desc></error_item>";
			};

			//echo 'error exists es '.$error_exist;
			if ($error_exist==0) {
			
				//Almaceno en la tabla APP_MODULES_VOTING los datos de esta nueva encuesta para el control de ids en futuras consultas
					
				//if (!class_exists(QuestionStore)) {include ("../objects/votingStore.php");};
				
				//$stored_question = new QuestionVoteStore($access,$question,$option1,$option2,$option3,$option4,$option5,$option6,$questioncolor,$optioncolor1,$optioncolor2,$optioncolor3);
				//Almaceno pregunta
				//$stored_question->storequestion();
				
				//generamos id unico del xml quitando los blancos a la pregunta y generando un numero aleatorio
				$question_id = str_replace(' ', '', $question);
				//alimentamos el generador de aleatorios
				srand (time());
				//generamos un número aleatorio
				$random_num = rand(1,100);
				
				$idxml = $question_id . $random_num;

				/*$vote = new appmodulesvoting();
				$vote = new MDW\DemoBundle\Entity\appmodulesvoting;
				$vote->setQuestion($question);
				$vote->setOption1($option1);
				$vote->setOption2($option2);
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($vote);
				$em->flush();*/
				
			
				// Todo ok, se forma XML
				//echo 'a formar xml';
				$STRING = '';				
				$STRING .= '<?xml version="1.0" encoding="UTF-8" ?>';
				$STRING .= '<votacion title="'.$question.'" id="'.$idxml.'" bColor="#FFFFFF" tColor="#'.$questioncolor.'" resultxml="http://admin.espartapp.com/modules/xmls/resultsVoting'.$idxml.'.xml" 
				sendto="http://admin.espartapp.com/modules/resultVote'.$idxml.'.php">';
				$STRING .= '<option title="'.$option1.'" id="0"/>';
				$STRING .= '<option title="'.$option2.'" id="1"/>';
				if (($option3!="")){
					$STRING .= '<option title="'.$option3.'" id="2"/>';
				}
				if (($option4!="")){
					$STRING .= '<option title="'.$option4.'" id="3"/>';
				}
				if (($option5!="")){
					$STRING .= '<option title="'.$option5.'" id="4"/>';
				}
				if (($option6!="")){
					$STRING .= '<option title="'.$option6.'" id="5"/>';
				}
				$STRING .= '</votacion>';
				
				//se vuelca a fichero
				$fp = fopen("xmls/resultVote".$idxml.".xml","w");
				fwrite($fp, $STRING . PHP_EOL);
				fclose($fp);

				
				//Este es el XML resultado
				$STRING ='';
				$STRING .= '<?xml version="1.0" encoding="UTF-8" ?>';
				$STRING .= '<resultados>';
				$STRING .= '<resultado title="'.$option1.'" id="0" votes="1" color="#'.$optioncolor1.'"/>';
				$STRING .= '<resultado title="'.$option2.'" id="1" votes="1" color="#'.$optioncolor2.'"/>';
				if (($option3!="")){
					$STRING .= '<resultado title="'.$option3.'" id="2" votes="1" color="#'.$optioncolor3.'"/>';
				}
				if (($option4!="")){
					$STRING .= '<resultado title="'.$option4.'" id="3" votes="1" color="#'.$optioncolor4.'"/>';
				}
				if (($option5!="")){
					$STRING .= '<resultado title="'.$option5.'" id="4" votes="1" color="#'.$optioncolor5.'"/>';
				}
				if (($option6!="")){
					$STRING .= '<resultado title="'.$option6.'" id="5" votes="1" color="#'.$optioncolor6.'"/>';
				}
				$STRING .= '</resultados>';
								
				//$fp = fopen("xmls/resultsVoting.xml","a");
				//fwrite($fp, $STRING);
				 
				 $fp = fopen("xmls/resultsVoting".$idxml.".xml","w");
				fwrite($fp, $STRING . PHP_EOL);
				fclose($fp);
				
				echo 'OK';
				

			} else {
			
				echo $error_info;
			
				echo 'FAIL';
			
				/*echo '<?xml version="1.0" encoding="UTF-8" ?>';
				echo "<respuesta>";
				echo $error_info;
				echo "</respuesta>";*/	
		
			};

?>
