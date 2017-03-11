<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Productos</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
		
	<script type="text/javascript">
			function objetoAjax(){
		var xmlhttp = false;
		try {
			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
 
			try {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (E) {
				xmlhttp = false; }
		}
 
		if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		  xmlhttp = new XMLHttpRequest();
		}
		return xmlhttp;
	}

	function enviar(){
				var nombre= document.getElementById('nombre').value;
				var descripcion= document.getElementById('descripcion').value;
				var existencias= document.getElementById('existencias').value;
				var precio_compra= document.getElementById('precio_compra').value;
				var precio_venta= document.getElementById('precio_venta').value;

				var conca = "nombre="+nombre+"&descripcion="+descripcion+"&existencias="+existencias+"&precio_compra="+precio_compra+"&precio_venta="+precio_venta;
				ajax = objetoAjax();
				ajax.open("POST","php/insertar.php",true);
				ajax.onreadystatechange = function(){
					if (ajax.readyState == 4) {
						nombre.value(ajax.responseText);
					}
				}
				ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
				ajax.send(conca);
				alert("Producto Guardado")

			}
		</script>

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
					<a href="index.php" class="navbar-brand">Productos</a>
				</div>

				<!-- Inicia Menu -->
				<div class="collapse navbar-collapse" id="navegacion-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Insertar</a></li>
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
			<h1 class="titulo-blog">Insertar</h1>
			<p class="minombre">By: Juan Daniel Dimas Amador</p>
		</div>
	</section>

	<section class="main container">
		<div class="container">
			<form method="post"  onSubmit="enviar(); return false" name="form" >
				
				<div class="form-group">
					<label for="nombre">Nombre del Producto:</label>
					<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre:">
				</div>

				<div class="form-group">
					<label for="descripcion">Descripción:</label>
					<textarea class="form-control" name="descripcion" id="descripcion" placeholder="Descripción"></textarea>
				</div>

				<div class="form-group">
					<label for="existencias">Existencias:</label>
					<input type="number" name="existencias" class="form-control" id="existencias" placeholder="Existencias">
				</div>
				<div class="form-group">
					<label for="precio_compra">Precio de Compra:</label>
					<input type="number" name="precio_compra" class="form-control" id="precio_compra"  step="any" placeholder="Existencias">
				</div>
				<div class="form-group">
					<label for="precio_venta">Precio de Venta:</label>
					<input type="number" name="precio_venta" class="form-control" id="precio_venta" step="any" placeholder="Existencias">
				</div>
				
				<button type="submit" class="btn btn-primary form-control">Guardar Producto</button>
				<br>
				<br>
			</form>
		</div>
	</section>

	<footer></footer>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>