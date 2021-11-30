$(document).ready(function(){  	
	$("#productos").change(function() {    
		var ID = $(this).find(":selected").val();
		var dataString = 'prodID='+ ID;    
		$.ajax({
			url: 'getproductos.php',
			dataType: "json",
			data: dataString,  
			cache: false,
			success: function(prodData) {
			   if(prodData) {
					$("#errorMassage").addClass('hidden').text("");
					$("#recordListing").removeClass('hidden');							
				//	$("#prodID").text(prodData.ID);
				//	$("#prodNombre").text(prodData.Nombre);
				//	$("#prodDescripcion").text(prodData.Descripcion);
				//	$("#prodPrecio").text("$"+prodData.Precio);					
				} else {
					$("#recordListing").addClass('hidden');	
					$("#errorMassage").removeClass('hidden').text("No record found!");
				}   	
			} 
		});
 	}) 
});
