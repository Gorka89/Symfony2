
function saveevent(){
	
	//Recojo datos input evento
	var date = document.getElementById("event_date").value;
	var title = document.getElementById("event_title").value;
	var description = document.getElementById("event_desc").value;
	var duration = document.getElementById("event_duration").value;
	//TODO pendiente recoger url almacenamiento de la imagen en BD
	var url = document.getElementById("event_duration").value;
	var link = document.getElementById("event_link").value;
	var namelocation = document.getElementById("event_loc_name").value;
	var latitude = document.getElementById("event_lat").value;
	var longitude = document.getElementById("event_long").value;	
	
		if (title == ""){
			alert('Introduzca nombre  de evento'); 
			document.getElementById("event_title").focus();
			document.getElementById("zona").innerHTML='Introduzca nombre  de evento';
			return false;
		}
		else if (duration == ""){
			document.getElementById("event_duration").focus();
			document.getElementById("zona").innerHTML='<font color="red">el evento tiene que tener duracion</font>';
		}
		else{		
		
			//Se procesa la info por AJAX
			//Elementos a un array para pasar los datos
			var event = new Array();
			event.push(date,title,description,duration,url,link,namelocation,latitude,longitude);
			var url="xmleventcalendar.php";
				$.ajax({   
					type: "POST",
					url:url,
					data:{data:event},
					success: function(datos){       
						$('#zona').html(datos);
					}
				});
		
		
		}
	
	
	

}

function finish(){

	var event = new Array();

}