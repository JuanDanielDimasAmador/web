<?php 
	include("conexion.php");
	$con = mysql_connect($host,$user,$pw) or die ("Problema con el Servidor");

	mysql_select_db($db,$con) or die ("Problema con el Servidor");

	$registro = mysql_query("SELECT * FROM ".$db." WHERE id_producto = $_POST[id_producto]") or die ("Problema con la consulta".mysql_error());
	echo $registro;

	while ($reg=mysql_fetch_array($registro)) {
					echo '<tr>
							<td>'.$reg['id_producto'].'</td>
							<td>'.$reg['nombre'].'</td>
							<td>'.$reg['descripcion'].'</td>
							<td>'.$reg['existencias'].'</td>
							<td>'.$reg['precio_compra'].'</td>
							<td>'.$reg['precio_venta'].'</td>
							</tr>';
				}
 ?>