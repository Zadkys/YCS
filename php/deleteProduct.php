<?php
	include "../connection.php";

	if(isset($_GET['idProducto'])){
        $idProducto = $_GET['idProducto'];
        $sql = mysqli_query($con, "DELETE FROM productos WHERE idProducto = '$idProducto'");
        if($sql){
            header("refresh:0.5; url=admin.php");
        }
    }else{
        echo "No se ha seleccionado un producto";
    }
?>