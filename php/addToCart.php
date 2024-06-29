<?php
session_start();

include("../connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idProducto']) && isset($_POST['btn_idProducto'])) {
	$idProducto = $_POST['idProducto'];
	$btn_idProducto = $_POST['btn_idProducto'];

	// consultar la información del producto
	$sql = mysqli_query($con, "SELECT * FROM productos WHERE idProducto = $idProducto");
	$prod = mysqli_fetch_array($sql);

	// ver si el carrito ya existe
	if (!isset($_SESSION['carrito'])) {
		$_SESSION['carrito'] = array();
	}

	// ver si prod está en carrito
	if (isset($_SESSION['carrito'][$btn_idProducto])) {
		// Aumentar la cantidad del producto en el carrito
		$_SESSION['carrito'][$btn_idProducto]['cantidad']++;
		$_SESSION['carrito'][$btn_idProducto]['subtotal'] = $_SESSION['carrito'][$btn_idProducto]['precio'] * $_SESSION['carrito'][$btn_idProducto]['cantidad'];
	} else {
		// agregar con cantidad inicial de 1
		$prod_carrito = array(
			'idProducto' => $prod['idProducto'],
			'modelo' => $prod['modelo'],
			'precio' => $prod['precio'],
			'cantidad' => 1,
			'subtotal' => $subtotal
		);
		$_SESSION['carrito'][$btn_idProducto] = $prod_carrito;
	}
	echo "<pre>";
	print_r($_SESSION['carrito']);
	echo "</pre>";

	// Redirigir a la página del prod o a donde desees después de agregar al carrito
	header("Location: products.php");
	exit;
}
?>