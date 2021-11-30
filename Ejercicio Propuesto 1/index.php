<?php 
include('include/header.php');
include_once("include/db_connect.php");
?>
<title>Bienvenido a la tienda "AJAX"</title>
<script type="text/javascript" src="script/getData.js"></script>
<?php include('include/container.php');?>

<div class="container">
	<h2>Bienvenido a la tienda "AJAX"</h2>		
	
	<div class="page-header">
        <h3>
			<select id="productos" class="form-control" >
				<option value="" selected="selected">Selecciona un producto</option>
				<?php
				$sql = "SELECT ID, Nombre, Descripcion, Precio FROM productos";
				$resultset = mysqli_query($conn, $sql);
				while( $rows = mysqli_fetch_assoc($resultset) ) { 
				?>
				<option value="<?php echo $rows["ID"]; ?>"><?php echo $rows["Nombre"]; ?></option>
				<?php }	?>
			</select>
        </h3>	
    </div>	
	<div class="hidden" id="errorMassage"></div>
	<table class="table table-striped hidden" id="recordListing">
		<thead>
		  <tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Descripcion</th>
			<th>Precio</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td id="prodID"></td>
			<td id="prodNombre"></td>
			<td id="prodDescripcion"></td>
			<td id="prodPrecio"></td>
		  </tr>
		</tbody>			
	</table>       
</div>
<?php include('include/footer.php');?>