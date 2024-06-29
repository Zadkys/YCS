<?php
session_start();

include("../connection.php");

if(isset($_SESSION['id_cliente'])){
	$id_cliente = $_SESSION['id_cliente'];
	$usr = mysqli_query($con,"SELECT nombre FROM clientes WHERE id_cliente = '$id_cliente'");
}

// header("refresh:1; url=products.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Productos</title>

	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

	<!-- css file -->
	<link href="../css/style.css" rel="stylesheet">
</head>
<body>
<!-- header section start -->
	<header>
		<input type="checkbox" id="toggler">
		<label for="toggler" class="fas fa-bars"></label>

		<a href="../index.php" class="logo"><img src="../img/decorations/YCS.png" alt=""></a>

		<nav class="navbar">
			<a href="../index.php">Inicio</a>
			<a href="#">Productos</a>
			<?php if(!isset($_SESSION['id_cliente'])): ?>
				<a href="../html/login.html">Log in</a>
				<a href="../html/signup.html">Sign up</a>
				<?php endif; ?>
		</nav>

		<div class="icons">
			<?php if(isset($_SESSION['id_cliente'])): ?>
				<a href="#" class="fas fa-music"></a>
				<a href="cart.php" class="fas fa-shopping-cart"></a>
				<a href="perfil.php" class="fas fa-user"></a>
				<a href="logout.php" class="fas fa-right-from-bracket"></a>
				<?php endif; ?>
		</div>
	</header>
<!-- header section end -->

	<section class="spacing"></section>
	<section class="spacing"></section>

<!-- products section start -->
	<section class="products catalogue">
		<h1 class="heading"> catálogo de <span> productos </span></h1>
		<div class="searchbar">
			<form action="" method="get" class="searchbar">
				<input type="text" name="search" placeholder="<?php if(isset($_SESSION['search'])) echo $_SESSION['search'];?>">
				<button type="submit" name="send" class="fas fa-search"></button>
				<!-- <button type="submit" name="send" class="btn" class="fas fa-search"></button> -->
			</form>
			<?php
				include("../connection.php");
				$q = mysqli_query($con, "SELECT * FROM productos");
				if(isset($_GET['send'])) {
					$search = $_GET['search'];
					$_SESSION['search'] = $search;

					$q = mysqli_query($con, "SELECT * FROM productos WHERE idProducto LIKE '%$search%' OR categoria LIKE '%$search%' OR modelo LIKE '%$search%' OR caracteristicas LIKE '%$search%' OR precio LIKE '%$search%'");

					header("refresh=1; url=products.php");
				}
			?>
		</div>
		<div class="box-container">
			<?php
				while($row = mysqli_fetch_array($q)){
			?>
			<div class="box">
				<div class="image">
				<td class="table" data-label="imagen"><img src="<?php echo $row['imagen']; ?>" alt=""></td>
					<form action=<?php if(isset($_SESSION['id_cliente'])) echo "addToCart.php"; else echo "../html/login.html";?> method="post">
						<div class="icons">
							<a href="#" class="fas fa-heart"></a>
							<input type="hidden" value="<?php echo $row['idProducto']; ?>" name="idProducto">
							<input type="hidden" name="btn_idProducto" value="btn_<?php echo $row['idProducto']; ?>">
							<input type="submit" name="agregar" value='añade al carrito' class="cart-btn"></input>
							<!-- <a href="fpdf.php" class="cart-btn" target="_blank">añade al carrito</a> -->
							<a href="#" class="fas fa-share"></a>
						</div>
					</form>
				</div>
				<div class="content">
					<h3><?php echo $row['modelo']?></h3>
					<div class="price"> <?php echo $row['precio']?></div>
					<div> <p> <?php echo $row['caracteristicas'];?> </p></div>
				</div>
			</div>
			<?php }	?>
		</div>
	</section>
<!-- products section start -->

<!-- footer section start -->
<footer class="footer">
		<div class="box-container">
			<div class="box">
				<h3>Menú</h3>
				<a href="#">inicio</a>
				<a href="#about">sobre nosotros</a>
				<a href="php/products.php">productos</a>
			</div>
			<div class="box">
				<h3>social</h3>
				<a href="https://discord.com">discord</a>
				<a href="https://facebook.com">facebook</a>
				<a href="https://instagram.com">instagram</a>
			</div>
			<div class="box">
				<h3>contacto</h3>
				<p>Tel: 33 2514 6368</p>
				<p class="email">zadkysan@gmail.com</p>
				<p>Guadalajara, jalisco, mexico</p>
				<img src="img/decorations/payments.png" alt="">
			</div>
		</div>
		<div class="credit"> created by <span> Zadkiel </span> <br> &copy; 2024 <span> Ykdaz Clothes Store </span> - todos los derechos reservados </div>
	</footer>
<!-- footer section end -->
</body>
</html>