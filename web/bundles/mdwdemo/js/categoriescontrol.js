	
	function savecategories(){

		var finish = false;
		var cont = 0;

		var categories = [];
		
		var menutitle = document.getElementById("titlemenu").value;
		categories.push(menutitle);
		
		var imagemenu = document.getElementById("imagemenu").value;
		categories.push(imagemenu);
		
		while (!finish){
		
			var cad1 = "person_addresses_";
			
			var cad2 = cad1.concat(cont);
			
			var cad3 = "_address";
			
			var cad = cad2.concat(cad3);
			
			alert(cad);
			
			var checknull = document.getElementById(cad);
			
			if (checknull == null){
				finish = true;
			}
			else{
				var cat = document.getElementById(cad).value;
				alert('categoria ' + cat);
				//separador de categorias
				categories.push('---');
				categories.push(cat);
				
				if (cat == ""){
					finish = true;
				}
				else{
					//se recogen los platos de esa categoria
					var dishes = [];
					dishes = getDishesOfCategory(cont);
					
					for (var i = 0; i < dishes.length; i++) {
						categories.push(dishes[i]);
					}
					//alert(categories.length);
					for (var i = 0; i < categories.length; i++) {
						//alert(categories[i]);
					}
					
					//se sigue con la siguente categoria
					cont = cont +1;
				}
			}
			
		
		}
		
		var url="xmlcategoriesmenu.php";
			$.ajax({   
				type: "POST",
				url:url,
				data:{data:categories},
				success: function(datos){       
					$('#zona').html(datos);
				}
			});

	}
	
	
	function getDishesOfCategory(num){
		
		var cad1 = "person_addresses_";
		
		var cad2 = cad1.concat(num);
		
		var cad3 = "_phones";
		
		var cad = cad2.concat(cad3);
		
		alert('se buscan platos en ' + cad);
		
		var checknull = document.getElementById(cad);
		
		var arrayDishes = [];
		var div = document.getElementById(cad);
		$(div).find('input:text, input:password, input:file, select, textarea')
				.each(function() {
					
					arrayDishes.push($(this).val()); // store in an array for reuse
					
					//$(this).val('');
					//alert('dentro find');
		});
		
		for (var i = 0; i < arrayDishes.length-1; i++) {
			//alert(arrayDishes[i]);
		}	
		
		//se quita el ultimo input introducido, ya que no vale
		arrayDishes.splice( arrayDishes.length-1, 1 );

		return arrayDishes;
	
	}