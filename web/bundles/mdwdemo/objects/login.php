<?php

   if (!class_exists(access_bd))
   {
      include ("access_bd.php");
   };
   
   $connection = entityManager->getConnection();
   
   $sth = $connection->prepare("INSERT INTO USERS(login) VALUES ('VAAAAAAA')");
	$sth->execute();

   class User {
      var $connection_db;
      // Login
      var $login;
      // Password
      var $password;

      // Constructor
      function User($_db, $_login, $_password) {
		 $this->connection_db = $_db;
         $this->login = $_login;
         $this->password = $_password;
      }

	  
      // To control the access to the web.
      function access(){
         // Return:
         //             -1 the user don't exists.
         //             -2 wrong password.
		 //              1 ok
			 $query    = "SELECT * FROM USERS WHERE login='".$this->login."'";
		  //echo "Consulta ".$query."<br>";
		 $temp  = $this->connection_db->execute_query($query);
		 //echo "temp es ".$temp."<br>";
         if (count($temp)==0){
         	// User not found
			 echo "User not found";
             $this->connection_db->free_last_query;
             return -1;
         }
         else{
                // User found, test if the password is true			   
			$this->company_id = $temp[0][2];
			$this->Name      = $temp[0][4];
			$this->Surname   = $temp[0][5];
			$this->Address1  = $temp[0][6];
			$this->Address2  = $temp[0][7];
			$this->Zip       = $temp[0][8];
			$this->State     = $temp[0][9];
			$this->Province  = $temp[0][10];
			$this->Country   = $temp[0][11];
			$this->Telephone = $temp[0][12];
			$this->Email     = $temp[0][13];
			$this->Lang      = $temp[0][14];
			
			echo "ClavePasssss=".$this->password."<br>";
			echo "Passs=".$temp[0][1]."<br>";
			echo "Login=".$temp[0][0]."<br>";
			
			
			$this->connection_db->free_last_query;
			
			
			

		/*echo "ClaveEdad=".$temp[0][13]."<br>";
		 echo "Clave1=".$temp[0][1]."<br>";
		 echo "Clave7=".$temp[0][7]."<br>";
		 echo "Clave8=".$temp[0][8]."<br>";
		 echo "Clave9=".$temp[0][9]."<br>";
		 echo "ClaveEmail=".$temp[0][10]."<br>";
		 echo "ClavePass=".$temp[0][11]."<br>";
		 echo "Clave12=".$temp[0][12]."<br>";
		 echo "ClavePasssss=".$this->password."<br>";*/
		 
		 $md5pass = md5($this->password);
		 
		 echo 'md5pass es: '.$md5pass.'<br>';
		 
               if ($temp[0][1]==$md5pass){
                  // Access Granted.
				   //echo "Access Granted";
				  return 1;
               }
               else{
                  // Access Denied.
					//echo "Access Denied";
					$this->password   = $temp[0][1];
					  $this->connection_db->free_last_query;
					  return -2;
               }
         }
      }
   }
?>
