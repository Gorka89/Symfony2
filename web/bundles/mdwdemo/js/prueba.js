var campos = 1;
var camposCat = 1;

function agregarCampo(){
	campos = campos + 1;
	var NvoCampo= document.createElement("div");
	NvoCampo.id= "divcampo_"+(campos);
	NvoCampo.innerHTML= 
		"<table>" +
		"   <tr>" +
		"     <td nowrap='nowrap'>" +
		"        Plato: <input type='text' size='50' name='plato' id='articu_" + campos + "'>" +
		"     </td>" +
		"     <td nowrap='nowrap'>" +
		"        Precio: <input type='text' size='50' name='price' id='price_" + campos + "'>" +
		"     </td>" +
		"     <td nowrap='nowrap'>" +
		"        <a href='JavaScript:quitarCampo(" + campos +");'> Quitar </a>" +
		"     </td>" +
		"   </tr>" +
		"</table>";
	var contenedor= document.getElementById("contenedorcampos");
    contenedor.appendChild(NvoCampo);
  }


function quitarCampo(iddiv){
  var eliminar = document.getElementById("divcampo_" + iddiv);
  var contenedor= document.getElementById("contenedorcampos");
  contenedor.removeChild(eliminar);
}

function agregarCampoCat(){
	if (camposCat <=1){
		camposCat = camposCat + 1;
		var NvoCampo= document.createElement("div");
		NvoCampo.id= "divcampocat_"+(camposCat);
		NvoCampo.innerHTML= 
			"<table>" +
			"   <tr>" +
			"     <td nowrap='nowrap'>" +
			"        <input type='text' size='50' name='category_" + camposCat + "' id='category_" + camposCat + "'>" +
			"     </td>" +
			"     <td nowrap='nowrap'>" +
			"        <a href='JavaScript:quitarCampoCat(" + camposCat +");'> Quitar </a>" +
			"     </td>" +
			"   </tr>" +
			"</table>";
		var contenedor= document.getElementById("contenedorcampocat");
		contenedor.appendChild(NvoCampo);
	}
 }
  
  function quitarCampoCat(iddiv){
  var eliminar = document.getElementById("divcampocat_" + iddiv);
  var contenedor= document.getElementById("contenedorcampocat");
  contenedor.removeChild(eliminar);
}

	document.getElementsByClassName = function(c) {
  var els = [], found = [];
  if (document.getElementsByTagName) {
    els = document.getElementsByTagName('*');
    for (var i=0, end=els.length; i<end; i++) {
      if (els[i].className === c) {
        found[found.length] = els[i];
      }
      els[i] = null;
    }
  }
  return found;
};

	function sendcategory(){
		var cat = document.getElementById("category_2").value;
		var platos = new Array();
		
		var platmin = document.getElementById("platomin").value;
		var platminprice = document.getElementById("precioplatomin").value;
		
		//en la posicion 0 se meta la categoria
		platos[0] = cat;
		
		if (cat == ""){
			alert('Introduzca nombre  a la categoria'); 
			document.getElementById("category_2").focus();
			//document.getElementById("zona").innerHTML='cat vacia';
		}
		else if (platmin == ""){
			document.getElementById("platomin").focus();
			document.getElementById("zona").innerHTML='<font color="red">La categoria tiene que tener minimo un plato</font>';
		}
		else if (!isNaN(platminprice)) {
			document.getElementById("precioplatomin").focus();
			document.getElementById("zona").innerHTML='<font color="red">Precio valor numerico obligatorio</font>';
			return false;
		}
		else{
		
			//el array platos almacena en la pos0 -> categoria
			//pos1 -> plato1 , pos2->precio plato1, pos3-> plato2... y asi
			var plat = document.getElementsByName("plato");
			var price = document.getElementsByName("price");
			j = 1;
			var empty = false;
			for (var i=0; i<plat.length; i++){
				platos[j] = plat[i].value;			
				platos[j+1] = price[i].value;
				if (platos[j] == ""){
					document.getElementById("zona").innerHTML='<font color="red">Algun nombre de plato o precio vacio';
					return false;
				}
				if (!isNaN(platos[j+1])){
					document.getElementById("zona").innerHTML='<font color="red">Precio no valido';
					return false;
				}
				j = j+2;
			}
			
			
			var url="pruebad.php";
				$.ajax({   
					type: "POST",
					url:url,
					data:{data:platos},
					success: function(datos){       
						$('#zona').html(datos);
					}
				});
		
		}
	}
	
	function finishcategory(){		
		
		var url="finishCat.php";
            $.ajax({   
                type: "POST",
                url:url,
                data:{data:'finish'},
                success: function(datos){       
                    $('#zona').html(datos);
                }
            });
		
	
	}