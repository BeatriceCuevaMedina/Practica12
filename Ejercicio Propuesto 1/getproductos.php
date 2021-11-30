<?php
include_once("include/db_connect.php");
if($_REQUEST['prodID']) {
	$sql = "SELECT ID, Nombre, Descripción, Precio 
	FROM productos 
	WHERE ID='".$_REQUEST['prodID']."'";
	$resultSet = mysqli_query($conn, $sql);
	$prodData = array();
	while( $prod = mysqli_fetch_assoc($resultSet) ) {
		$prodData = $prod;
	}
	echo json_encode($prodData);
} else {
	echo 0;	
}
?>
