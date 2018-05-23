<?

$conexion=mysqli_connect("localhost","root","","table");

$salida="";
$query="SELECT*FROM productos ORDER BY sucursal";

if (isset($_POST['consulta'])) {
	$q=$mysqli->mysql_real_escape_string($_POST['consulta']);
	$query= "SELECT fecha, nombre, cargo, sucursal, falla, reporta, causa, resumen, cabina, operador, estatus, heat, ticket FROM sucursal WHERE nombre LIKE '%".$q."%' OR sucursal LIKE '%".$q."%'"; 
}

if ($resultado=$mysqli->num_rows >0) {

	$salida.="<table class='tabla datos'>
	<thead>
		<tr>
			<td>nombre</td>
			<td>cargo</td>
			<td>sucursal</td>
		</tr>
		<thead>
		<tbody>";

	while($fila=$resultado->fetch_assoc()){

		$salida.="</tbody></table>";

	} //else {

		//$salida="No hay datos";
	//}
	echo $salida;
}



$mysqli->close();
?>