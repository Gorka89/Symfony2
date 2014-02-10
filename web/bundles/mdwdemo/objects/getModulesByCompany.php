<?php

   if (!class_exists(access_bd))
   {
      include ("access_bd.php");
   };

   class GetModulesByCompany {
      var $connection_db;
      var $company;

      // Constructor
      function GetModulesByCompany($_db, $_company) {
		 $this->connection_db = $_db;
         $this->company = $_company;
		 echo 'llega al GetModulesByCompany contruct<br>';
      }

      function getModules(){
         // Return:
         //             -1 the modules don't exists.
		 //              1 ok
			 //$query    = "SELECT id_reseller FROM RESELLERS_COMPANIES WHERE id_company='".$this->company."'";
			 //quiero los modulos de esa empresa
			 $query = "SELECT id_module FROM SERVICES_APP_MODULES_TO_SERVICES WHERE id_service_to_company IN (SELECT id FROM SERVICES_TO_COMPANIES WHERE id_company=".$this->company.");";
			 
		  //echo "Consulta ".$query."<br>";
		 $temp  = $this->connection_db->execute_query($query);
         if (count($temp)==0){
         	// User not found
			 //echo "User not found";
             $this->connection_db->free_last_query;
             return -1;
         }
         else{
               		   			
			echo "modules=".$temp[0][0]."<br>";
			
			
			$this->connection_db->free_last_query;
			
			
			return $temp;
         }
      }
   }
?>
