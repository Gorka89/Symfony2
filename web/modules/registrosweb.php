<?

// Registros a mostrar en cada página
$regVistos = 10;

// Consulta que devuelve todos los registros
//$modules/registrosweb0 = mysql_query(" SELECT * FROM registros");

//require_once '../objects/accesspdo.php';

if (!class_exists(RegistersPaged)) {include ("../objects/registersPagedQuery.php");};
if (!class_exists(access_bd)) {include ("../objects/access_bd.php");};

	$access = new access_bd;
	$access_connected = $access->connect();


	
    $result;
 /*
    //$conn = $access->returnConnect();
	$conn = dbConnect();
    // Create the query
    $sql = 'SELECT * FROM REGISTROS';
    // Create the query and asign the result to a variable call $result
    $modules/registrosweb0 = $conn->query($sql);*/

// Se cuentan los registros devueltos por la consulta SQL $modules/registrosweb0
//$totalSql = $conn->rowCount($modules/registrosweb0);


// Se definen la página actual (desde el parámetro 'pag' de la URL) y las páginas anterior y siguiente
if (!isset($_GET['pag'])) {$pagActual=1;} else {$pagActual=$_GET['pag'];}
$pagAnterior = $pagActual-1;
$pagSiguiente = $pagActual+1;

	$aux = new RegistersPaged($access,$pagActual,$regVistos);
	$total_registers = $aux->totalRegisters();
	
	
	// Páginas que van a aparecer, redondeando los decimales siempre hacia arriba
$pagTotal = ceil($total_registers/$regVistos);

	
/*
// Consulta SQL con la que se sacará el modules/registroswebdo de registros
$modules/registrosweb1 = $conn->query(" SELECT * FROM REGISTROS ORDER BY Nombre DESC LIMIT ".(($pagActual-1)*$regVistos).",".$regVistos."");
// Bucle para generar el modules/registroswebdo de registros
while($fila = $modules/registrosweb1->fetchAll()) {
 // Aquí irá el código PHP que escriba los registros 
}
*/
	/*
	$conn = dbConnect();
    // Create the query
    $sql = "SELECT * FROM REGISTROS ORDER BY Nombre DESC LIMIT ".(($pagActual-1)*$regVistos).",".$regVistos.";";
    // Create the query and asign the result to a variable call $result
    $result = $conn->query($sql);        
    // Extract the values from $result
    $rows = $result->fetchAll();
	*/
	$rows = $aux->selectPaged();
	
    // Since the values are an associative array we use foreach to extract the values from $rows
    // ####### We format the result in a table using Heredoc. #######
    echo <<< HTML
    <h3>Version Heredoc</h3>
	<div class="tablestyle">
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Telefono</th>
            </tr>
        </thead>
        <tbody>
HTML;
        foreach ($rows as $row) {
            echo <<< HTML
            <tr>
                <td>$row[id]</td>
                <td>$row[Nombre]</td>
                <td>$row[Email]</td>
                <td>$row[Telefono]</td>
            </tr>
 
HTML;
        }
        echo '</tbody>';
	  echo '</div>';
    echo '</table>';


// Se inicia el listado de páginas


//Primera
//echo '<a href="lista.php?pag=1"><span class="pagestyle">  <<    </a>';
echo "<a onclick=\"Page('1')\">    <<          </a> ";
// Si la página actual no es la primera, se muestra el enlace a la página anterior
if ($pagAnterior>0) {//echo '<a onclick=\"Page('$pagAnterior')\"><span class="pagestyle">      <      </a>';
						echo "<a style=\"cursor: pointer;\" onclick=\"Page('$pagAnterior')\">    <          </a> ";
}

// Se saca el listado de páginas mediante un bucle
$pgIntervalo = 0; // Páginas que aparecen antes y después de la actual
$pgMaximo = ($pgIntervalo*2)+1; // Máximo de páginas en el listado
$pg=$pagActual-$pgIntervalo;$i=0;
while ($i<$pgMaximo) {
 if ($pg==$pagActual) {$strong=array('<strong>','</strong>');} else {$strong=array('','');}
 if ($pg>0 and $pg<=$pagTotal) {
  //echo $strong[0].'<a href="../objects/lista.php?pag='.$pg.'"><span class="oculto">Página </span>'.$pg.'</a>'.$strong[1];
  echo $strong[0].'<a style="cursor: pointer;" onclick=\"Page('.$pg.')\"><span class="oculto">Página </span>'.$pg.'\/'.$pagTotal.'</a>'.$strong[1];
  $i++;
 }
 if ($pg>$pagTotal) {$i=$pgMaximo;} // Si la página que se va a mostrar se pasa de la cantidad de páginas definidas en $pagTotal se para la generación de elementos de modules/registrosweb
 $pg++;
}

// Si la página actual no es la última, se muestra el enlace a la página siguiente
if ($pagSiguiente<=$pagTotal) {//echo '<a href="../objects/lista.php?pag='.$pagSiguiente.'"><span class="oculto">    >        </a>';
								echo "<a style=\"cursor: pointer;\" onclick=\"Page('$pagSiguiente')\">    >          </a> ";
}

//Ultima
//echo '<a href="../objects/lista.php?pag='.$pagTotal.'"><span class="oculto">  >>   </a>';
echo "<a style=\"cursor: pointer;\" onclick=\"Page('$pagTotal')\">    >>          </a> ";


// Se finaliza el modules/registroswebdo de páginas



?>