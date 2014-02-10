<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Events</title>
<SCRIPT src="../js/eventscontrol.js"></SCRIPT>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  
</head>
<body>


  <h3>Event</h3>
  
  <!--<form id="formdinamico" name="formdinamico" action="prueba.php">-->
  
  <table border="0" width="100%">   
      <tr>
        <td></td>
        <!--<a href='JavaScript:agregarCampoCat();'> Agregar Categoria </a>-->
		Event Date :<input type='datetime' size='50' name='event_date' id='event_date'><br>
		Event Title :<input type='text' size='50' name='event_title' id='event_title'><br>
		Event Description :<input type='text' size='350' name='event_desc' id='event_desc'><br>
		Event Duration(ej: 2 hours) :<input type='text' size='50' name='event_duration' id='event_duration'><br>
		
		<br>
		Event Image: <form enctype="multipart/form-data" action="uploader.php" method="POST">
							<input name="uploadedfile" type="file" />
							<input type="submit" value="Subir archivo" />
						</form>
		
		<br><br>
		Event Link :<input type='text' size='50' name='event_link' id='event_link'><br>
		Event Localization Name :<input type='text' size='50' name='event_loc_name' id='event_loc_name'><br>
		Event Latitude :<input type='text' size='50' name='event_lat' id='event_lat'><br>
		Event Longitude :<input type='text' size='50' name='event_long' id='event_long'><br>

      </tr>
   </table>
  
  
   <input type="submit" value="Save Event and Create a new One" name="Save" onclick="saveevent();">

	<input type="submit" value="Save and Finish" name="Finish" onclick="finish();">
  
  <!--</form>-->
  
  <div id="zona" name="zona">
  </div>
  

</body>
</html>