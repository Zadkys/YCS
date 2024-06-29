<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['act']) && isset($_GET['idProducto'])) {
		// establece el tipo de acción que se empleará
        $act = $_GET['act'];
        $idProducto = $_GET['idProducto'];

        switch ($act) {
            case 'add':
                // Incrementar la cantidad del producto en el carrito
                if (isset($_SESSION['carrito'][$idProducto])) {
                    $_SESSION['carrito'][$idProducto]['cantidad']++;
                    $_SESSION['carrito'][$idProducto]['subtotal'] = $_SESSION['carrito'][$idProducto]['precio'] * $_SESSION['carrito'][$idProducto]['cantidad'];
                }
                break;

            case 'substract':
                // Disminuir la cantidad del producto en el carrito
                if (isset($_SESSION['carrito'][$idProducto])) {
                    $_SESSION['carrito'][$idProducto]['cantidad']--;
                    if ($_SESSION['carrito'][$idProducto]['cantidad'] <= 0) {
                        unset($_SESSION['carrito'][$idProducto]);
                    } else {
                        $_SESSION['carrito'][$idProducto]['subtotal'] = $_SESSION['carrito'][$idProducto]['precio'] * $_SESSION['carrito'][$idProducto]['cantidad'];
                    }
                }
                break;

            case 'delete':
                // Eliminar el producto del carrito
                if (isset($_SESSION['carrito'][$idProducto])) {
                    unset($_SESSION['carrito'][$idProducto]);
                }
                break;

            default:
                break;
        }

        header("Location: cart.php");
        exit;
    }
?>