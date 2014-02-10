<?php

   if (!class_exists(access_bd))
   {
      include ("access_bd.php");
   };

   class GetServicesByCompany {
      var $connection_db;
      var $company;

      // Constructor
      function GetServicesByCompany($_db, $_company) {
		 $this->connection_db = $_db;
         $this->company = $_company;
      }

      function getServices(){
	  
			 //quiero los servicios de esa empresa
			 $query = "SELECT * FROM SERVICES_TO_COMPANIES WHERE id_company=".$this->company.";";
			 
		  //echo "Consulta ".$query."<br>";
		 $temp  = $this->connection_db->execute_query($query);
         if (count($temp)==0){
         	// User not found
			 //echo "User not found";
             $this->connection_db->free_last_query;
             return -1;
         }
         else{
               		   			
			echo "SERVICES=".$temp[0][0]."<br>";
			echo "SERVICES1=".$temp[0][1]."<br>";
			echo "SERVICES10=".$temp[1][0]."<br>";
			
			
			$this->connection_db->free_last_query;
			
			
			return $temp;
         }
      }
   }
?>
