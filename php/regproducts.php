<?php
    include "../connection.php";

	$idProducto = $_POST['idProducto'];
	$categoria = $_POST['categoria'];
	$modelo = $_POST['modelo'];
	$caracteristicas = $_POST['caracteristicas'];
	$precio = $_POST['precio'];
	$unidades = $_POST['unidades'];
	$imagen = $_POST['imagen'];

    $sql = mysqli_query($con,"INSERT INTO productos(idProducto, categoria, modelo, caracteristicas, precio, unidades, imagen) VALUES('$idProducto', '$categoria', '$modelo', '$caracteristicas', '$precio', '$unidades', '$imagen')");

    if($sql) {
        echo " -> prod registrada";
        header("Location: admin.php");
        exit;
    } else {
        echo " -> error al registrar";
    }
?>