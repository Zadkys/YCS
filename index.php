<?php
session_start();

include("connection.php");

if(isset($_SESSION['id_cliente'])){
	$id_cliente = $_SESSION['id_cliente'];
	$usr = mysqli_query($con,"SELECT nombre FROM clientes WHERE id_cliente = '$id_cliente'");
}
if(isset($_SESSION['id_owner'])){
	$id_owner = $_SESSION['id_owner'];
	$adm = mysqli_query($con,"SELECT nombre FROM propietarios WHERE id_owner = '$id_owner'");
	header("refresh:1; url=php/admin.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> YCS | Inicio </title>

	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

	<!-- css file -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<!-- header section start -->
	<header>
		<input type="checkbox" id="toggler">
		<label for="toggler" class="fas fa-bars"></label>

		<!-- <a href="#" class="logo">Grub<span>i</span></a> -->
		<a href="#" class="logo"><img src="img/decorations/YCS.png" alt=""></a>

		<nav class="navbar">
			<a href="#">Inicio</a>
			<a href="php/products.php">Productos</a>
			<?php if(!isset($_SESSION['id_cliente'])): ?>
				<a href="html/login.html">Log in</a>
				<a href="html/signup.html">Sign up</a>
				<?php endif; ?>
		</nav>

		<div class="icons">
			<?php if(isset($_SESSION['id_cliente'])): ?>
				<a href="#" class="fas fa-music"></a>
				<a href="php/cart.php" class="fas fa-shopping-cart"></a>
				<a href="php/perfil.php" class="fas fa-user"></a>
				<a href="php/logout.php" class="fas fa-right-from-bracket"></a>
				<?php endif; ?>
		</div>
	</header>
<!-- header section end -->

<!-- banner section start -->
	<section class="banner-container" id="banner">
		<div class="banner"></div>
		<div class="line">
			<h3>Ykdaz Clothes Store</h3>
			<span>Tu nueva tienda de ropa marca favorita</span>
		</div>
	</section>
<!-- banner section end -->

<!-- about section start -->
	<section class="about" id="about">
		<h1 class="heading"> sobre <span> Ykdaz Clothes Store </span> </h1>
		<div class="row">


			<div class="column-right">
				<h3>Misión</h3>
				<p>
            Nos comprometemos a ofrecer una amplia gama de prendas de vestir de
            alta calidad y estilo, diseñadas específicamente para satisfacer las
            necesidades y preferencias de nuestro público joven. Buscamos
            superar las expectativas de nuestros clientes al proporcionar
            experiencias de compra excepcionales y un servicio personalizado que
            refleje nuestra pasión por la moda y el compromiso con la excelencia
            en cada detalle.
        </p>
				<h3>Visión</h3>
				<p>
            Nos esforzamos por convertirnos en la marca de ropa más reconocida y
            respetada en el mercado, estableciendo un estándar de excelencia en
            moda juvenil. Nuestra visión es crear un mundo donde la moda no solo
            sea una expresión de estilo personal, sino también una herramienta
            para empoderar a nuestros clientes, inspirándolos a expresar su
            individualidad y confianza a través de la ropa que usan. Buscamos
            ser un símbolo de calidad, creatividad y autenticidad en la
            industria de la moda, destacando por nuestra innovación, integridad
            y compromiso con la satisfacción del cliente.
        </p>
				<div class="image">
					<img src="img/decorations/YCS.png" alt="">
				</div>
			</div>
		</div>
	</section>
<!-- about section end -->

<!-- founders section start -->
	<section class="founders" id="founders">
		<h1 class="heading"> conoce nuestro <span> estilo </span> </h1>
		<div class="frame-container">
			<div class="frame-slider">
				<ul>
					<li><img src="https://images.elle.com.br/2023/08/acubi-fashion-620x827.jpeg" alt=""></li>
					<li><img src="https://www.crapsforyou.com/wp-content/uploads/2020/12/fb4a3dc9b228cda64c37d0350cb0b42b.jpg" alt=""></li>
					<li><img src="https://www.crapsforyou.com/wp-content/uploads/2020/12/b8bef4d441034c6a2d7bf070434a7482.jpg" alt=""></li>
					<li><img src="https://i.pinimg.com/originals/35/59/1d/35591d90aedc80bf9242e4c8b89dd8f5.jpg" alt=""></li>
					<li><img src="https://i.pinimg.com/550x/dc/fc/76/dcfc767bf2ee52efeb423fd7f9a1bbc9.jpg" alt=""></li>
				</ul>
			</div>
		</div>
	</section>
<!-- founders section end -->

<!-- products section start -->
	<section class="products" id="products">
		<h1 class="heading"> <span> Gracias por </span> visitarnos :) </h1>
		<div class="box-container">

		</div>
		<div class="box-container">
			<a href="php/products.php" class="btn">Productos</a>
		</div>
	</section>
<!-- products section end -->

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