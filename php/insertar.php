<?php
	
	include("conexion.php");
	
	if(isset( $_POST['nombre']) && !empty( $_POST['nombre']) && isset($_POST['descripcion']) && !empty($_POST['descripcion']) && isset($_POST['existencias']) && !empty($_POST['existencias']) && isset($_POST['precio_compra']) && !empty($_POST['precio_compra']) && isset($_POST['precio_venta']) && !empty($_POST['precio_venta']))
		 {
			$con = mysql_connect($host,$user,$pw) or die ("Problemas en la Conexion");
			mysql_select_db($db,$con) or die ("Problemas");

			mysql_query("INSERT INTO productos (NOMBRE, DESCRIPCION, EXISTENCIAS, PRECIO_COMPRA, PRECIO_VENTA) VALUES ('$_POST[nombre]','$_POST[descripcion]','$_POST[existencias]','$_POST[precio_compra]','$_POST[precio_venta]')",$con);
			
		}else{
			
	}

?>