<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Productos</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-1">
						<span class="sr-only">Desplegar / Ocultar Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.php"  class="navbar-brand">Productos</a>
				</div>

				<!-- Inicia Menu -->
				<div class="collapse navbar-collapse" id="navegacion-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="insertar.php">Insertar</a></li>
					</ul>
					
					<form action="php/seleccionar.php" method="POST" class="navbar-form navbar-right" role="Buscar">
						<div class="form-group">
							<input type="number" name="id_producto" class="form-control" placeholder="ID">
						</div>
						<button type="submit" class="btn btn-primary">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</form>

				</div>
			</div>
		</nav>
	</header>

	<section class="jumbotron">
		<div class="container">
			<h1 class="titulo-blog">Detalle Productos</h1>
			<p class="minombre">By: Juan Daniel Dimas Amador</p>
		</div>
	</section>

	<section class="main container">
		<div class="container">
		<div class="table-responsive">
			<table class="table">
			<tr class="danger">
				<th>ID</th>
				<th>Producto</th>
				<th>Descripcion</th>
				<th>Existencia</th>
				<th>Precio de Compra</th>
				<th>Precio de Venta</th>
			</tr>
			<?php             
                include("php/seleccion.php");
			 ?>
		</table>
		</div>
		</div>
	</section>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>