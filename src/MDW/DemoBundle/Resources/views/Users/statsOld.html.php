<?php
	
	// Primero averiguamos el idioma seleccionado.
	if (isset($_GET['lang']) && $_GET['lang']!='')
	   $lang=strtolower($_GET['lang']);
	else
	   $lang='es';
	 
	// Cargamos el fichero de idioma. Por defecto espanol.
	include_once "../languages/{$lang}_traduction.php";

?>
<!doctype html>
<html>
	<head>
	
		<link type="text/css" rel="stylesheet" href="../styles/dhtmlgoodies_calendar.css?random=20051112" media="screen"></LINK>
		<script type="text/javascript" src="../js/dhtmlgoodies_calendar.js?random=20060118"></script>
		<title><?php echo LABEL_STATS; ?></title>
		<script src="../js/Chart.js"></script>
		
		
		<script type="text/javascript">
			 function getMonth(){
				  var month=$("#lstOptions").val();

				  if (Valor1==""){
				   $("#t").html("Es requerido el primer valor");
				   $("#txtValor1").focus();
				   return false;
				  }	
			 }
			  
			  
		</script>
		
		
		
		
		<meta name = "viewport" content = "initial-scale = 1, user-scalable = no">
		<style>
			canvas{
			}
		</style>
	</head>
	
	
	<body>
		<div id="graphic">
			<div id="options">
				<select name="lstOptions" id="lstOptions">
				  <option value="jan"><?php echo $month_name[1] ?></option>
				  <option value="feb"><?php echo LABEL_FEBRUARY; ?></option>
				  <option value="march"><?php echo LABEL_MARCH; ?></option>
				  </select>
			</div>
			<form action="../objects/statsRegistered.php" method="post">

			<tr><td>Desde: </td><td><td><input type="text" id="from" value="2014/01/01 12:00" readonly name="from"><input type="button" value="Cal" onclick="displayCalendar(document.getElementById('from'),'yyyy/mm/dd hh:ii',this,true)"></td></tr>

			<tr><td>Hasta: </td><td><td><input type="text" id="todate" value="2014/01/07 12:00" readonly name="todate"><input type="button" value="Cal1" onclick="displayCalendar(document.getElementById('todate'),'yyyy/mm/dd hh:ii',this,true)"></td></tr>
			
			<input type="submit">
			
			</form>
			
			<canvas id="canvas" height="450" width="600"></canvas>
		</div>

	<script type="text/javascript">
	
		
			var fromdate = document.getElementById("from").value;
			
			var todate = document.getElementById("todate").value;
			
			<?php $fromdate=
				'<script type="text/javascript">;
				var fromdate = document.getElementById("from").value;
			</script>'; 
			
				$todate=
				'<script type="text/javascript">;
				var todate = document.getElementById("todate").value;
			</script>';
			
			//consulta de los registros entre esas fechas
			
			//if (!class_exists(StatsRegistered)) {include ("../objects/statsRegistered.php");};
			//if (!class_exists(access_bd)) {include ("../objects/access_bd.php");};

				//$access = new access_bd;
				//$access_connected = $access->connect();
				
				//$aux = new StatsRegistered($access,$fromdate,$todate);
				//$temp = $aux->totalRegistersStats();
				
				//echo $temp[0][0];
				
				//aqui supongo que obtengo un array con las visitas durante ese intervalo de fechas
				
				$data = array(3,4,8,156);
				
			
			?>
		
	

		var lineChartData = {
			/*labels : ["<?php echo LABEL_JANUARY; ?>","<?php echo LABEL_FEBRUARY; ?>","<?php echo LABEL_MARCH; ?>",
					  "<?php echo LABEL_APRIL; ?>","<?php echo LABEL_MAY; ?>","<?php echo LABEL_JUNE; ?>",
					  "<?php echo LABEL_JULY; ?>","<?php echo LABEL_AUGOST; ?>","<?php echo LABEL_SEPTEMBER; ?>",
					  "<?php echo LABEL_OCTOBER; ?>","<?php echo LABEL_NOVEMBER; ?>","<?php echo LABEL_DECEMBER; ?>"],*/
			labels : ["<?php echo LABEL_MONDAY; ?>","<?php echo LABEL_TUESDAY; ?>","<?php echo LABEL_WEDNESDAY; ?>",
					  "<?php echo LABEL_THURSDAY; ?>","<?php echo LABEL_FRIDAY; ?>","<?php echo LABEL_SATURDAY; ?>",
					  "<?php echo LABEL_SUNDAY; ?>"],
			datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					data : [<?php echo $data[0] ?>,22,13,90]
				},
				{
					fillColor : "rgba(151,187,205,0.5)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					data : [28,48,40,19,96,27,100]
				}
			]
			
		}

	var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
	
	</script>
	
	
	<input name="btnAceptar" id="btnAceptar" type="button" value="Calcular" onClick="getMonth(); return false;">
	
	
	</body>
</html>