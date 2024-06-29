<?php
	include "../connection.php";

	if(isset($_GET['id_cliente'])){
        $idProducto = $_GET['id_cliente'];
        $sql = mysqli_query($con, "DELETE FROM clientes WHERE id_cliente = '$idProducto'");
        if($sql){
            header("refresh:0.5; url=admin.php");
        }
?>