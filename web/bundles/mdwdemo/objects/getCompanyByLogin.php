<?php

   if (!class_exists(access_bd))
   {
      include ("access_bd.php");
   };

   class GetCompanyByLogin {
      var $connection_db;
      // Login
      var $login;

      // Constructor
      function GetCompanyByLogin($_db, $_login) {
		 $this->connection_db = $_db;
         $this->login = $_login;
      }

      // To control the access to the web.
      function getCompany(){
         // Return:
         //             -1 the user don't exists.
         //             -2 wrong password.
		 //              1 ok
			 $query    = "SELECT company_id FROM USERS WHERE login='".$this->login."'";
		  //echo "Consulta ".$query."<br>";
		 $temp  = $this->connection_db->execute_query($query);
         if (count($temp)==0){
         	// User not found
			 //echo "User not found";
             $this->connection_db->free_last_query;
             return -1;
         }
         else{
               		   			
			//echo "company=".$temp[0][0]."<br>";
			
			
			$this->connection_db->free_last_query;
			
			$company = $temp[0][0];
			
			return $company;
         }
      }
   }
?>
