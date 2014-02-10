<?php

// ////////////////////////////////////////////////////////////////////////////
// ////////////////////////////////////////////////////////////////////////////
//
//   CLASS ACCESS_BD
//
// ////////////////////////////////////////////////////////////////////////////
//
//
// ////////////////////////////////////////////////////////////////////////////
// ////////////////////////////////////////////////////////////////////////////

   class access_bd
   {

      var $persistent;
      var $last_query;
      var $result_matrix;

      // Constructor del objeto de conexión con la base de datos
      function access_bd()
      {
         $persistent = -1;
         $last_query = -1;
         $result_matrix = array();
      }

      // Conecta el objeto con la base de datos.
      function connect()
      {
	  	 // mysqlconnect -> server, user, password 
         //$this->persistent = mysql_connect ("localhost","c1espartapadmin", "5edfDA83poAk");
		 $this->persistent = mysql_connect ("localhost","root", "");
		 //or die('Could not connect: ' . mysql_error());
         if ($this->persistent){
		    // mysql_select_db -> data_base, persistent.
            //$selection = mysql_select_db("c1espartapadmin",$this->persistent);
			$selection = mysql_select_db("espartappsymfony",$this->persistent);
            if ($selection)
            {
               // mysql_query("SET NAMES 'utf8'",$this->persistent);
               $connected = TRUE;
            }
            else{
               $connected = FALSE;
            }
         }
         else{
            $connected = FALSE;
         }
         return $connected;
      }
	  
	  function returnConnect(){
			//$this->persistent = mysql_connect ("localhost","c1espartapadmin", "5edfDA83poAk");
			return $this;
	  }

      function is_connected()
      {
         return ($this->persistent);
      }

      // Execute query and return the result at $result_matrix
      function execute_query($_query)
      {
         if ($this->persistent < 0)
         {
            $this->last_query = -1;
            $result_matrix = array();
         }
         else
         {
            $this->last_query = mysql_query($_query,$this->persistent);
            $i = 0;
            if ($this->last_query){
               while($row=mysql_fetch_array($this->last_query))
               {
                   $result_matrix[$i] = $row;
                   $i++;
               }
            }
            else
            {
               $result_matrix = array();
            }
         }
         return $result_matrix;
      }
	  
	  // Execute query and return the result
      function execute_query_result($_query){
	  
         if ($this->persistent < 0){
            $this->last_query = -1;
            $result_matrix = array();
         }
         else{
		 
            $result_matrix = mysql_query($_query,$this->persistent);
            
         }
         return $result_matrix;
      }

      function execute_insert($_insert)
      {
	 // echo "Entra en execute_insert<br>";
         if ($this->persistent < 0)
         {
            $this->last_query = -1;
            $temp_result = false;
	    // echo "Se sale por persistent <0 <br>";
         }
         else
         {
            $this->last_query = mysql_query($_insert,$this->persistent);
	    $temp_result = $this->last_query;
	    // echo "Ejecuta el insert<br>";
         }
         return $temp_result;
      }

      function free_last_query()
      {
         if ($this->last_query>=0)
         {
            mysql_free_result($this->last_query);
         }
      }

      function disconnect()
      {
         mysql_close($this->persistent);
      }
   }

?>
