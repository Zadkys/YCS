<?php
	include "../connection.php";
	session_start();
	$sql = mysqli_query($con, "SELECT * FROM productos");
	if(!isset($_SESSION['id_owner'])){
		$msg = "No se ha iniciado sesión";
		session_destroy();
		header("refresh:1; url=../html/login.html");
		echo '<div>'.$msg.'</div>';
		echo '<p>Serás redirigido al log in en 3 segundos.</p>';
	// header("Location: products.php");
	exit;
	}
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

		<!-- <a href="#" class="logo">Grub<span>i</span></a> -->
		<a href="#" class="logo"><img src="../img/decorations/YCS.png" alt=""></a>

		<nav class="navbar">
			<a href="../html/regproducts.html">Registrar</a>
			<a href="bitacora.php">Bitácora</a>
			<a href="users.php">Clientes</a>
			<!-- <a href="delproducts.php">Eliminar</a> -->
			<!-- <a href="modproducts.php">Modificar</a> -->
		</nav>

		<div class="icons">
			<a href="perfil.php" class="fas fa-user"></a>
			<a href="logout.php" class="fas fa-right-from-bracket"></a>
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
				if(isset($_GET['send'])) {
					$search = $_GET['search'];
					$_SESSION['search'] = $search;

					$sql = mysqli_query($con, "SELECT * FROM productos WHERE idProducto LIKE '%$search%' OR categoria LIKE '%$search%' OR modelo LIKE '%$search%' OR caracteristicas LIKE '%$search%' OR precio LIKE '%$search%'");

					header("refresh=1; url=admin.php");
				}
			?>
		</div>
		<div class="admin products">
			<table class="table">
				<thead>
					<tr>
						<th class = "table">idProducto</th>
						<th class = "table">categoría</th>
						<th class = "table">modelo</th>
						<th class = "table">características</th>
						<th class = "table">precio</th>
						<th class = "table">unidades</th>
						<th class = "table">imagen</th>
						<th class = "table">editar</th>
						<th class = "table">eliminar</th>
					</tr>
				</thead>
				<tbody>
					<?php
						while($row = mysqli_fetch_array($sql)) {
					?>
					<tr>
						<td class = "table" data-label = "idProducto"><?php echo $row['idProducto']?></td>
						<td class = "table" data-label = "categoría"><?php echo $row['categoria']?></td>
						<td class = "table" data-label = "modelo"><?php echo $row['modelo']?></td>
						<td class = "table" data-label = "características"><?php echo $row['caracteristicas']?></td>
						<td class = "table" data-label = "precio"><?php echo $row['precio']?></td>
						<td class = "table" data-label = "unidades"><?php echo $row['unidades']?></td>
						
						<td class = "table" data-label = "imagen"><img src="<?php echo $row['imagen']; ?>" alt=""></td>
						
						<td class = "table edit" data-label = "editar"><a href="editProductForm.php?idProducto=<?php echo $row['idProducto'];?>"  class = "fas fa-pen-to-square"></a></td>
						<td class = "table delete" data-label = "eliminar"><a href="deleteProduct.php?idProducto=<?php echo $row['idProducto'];?>"  class = "fas fa-trash"></a></td>
					</tr>
					<?php }	?>
				</tbody>
			</table>
		</div>
	</section>
<!-- products section start -->

<!-- footer section start -->
	<footer class="footer">
		<div class="credit"> created by <span> Zadkiel </span> <br> &copy; 2024 <span> Ykdaz Clothes Store </span> - todos los derechos reservados </div>
	</footer>
<!-- footer section end -->
</body>
</html>