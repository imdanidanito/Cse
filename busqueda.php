<?
include ('data.php');

//variables de consulta//
$where="";
$nombre= "";
$cabina= "";
$mensaje="";
//////////
if (isset($_POST['buscar']))
 {
 	if (empty($_POST['xcabina'])) 
 	{
 		$nombre= $_POST['xsucursal'];
 		$where="where sucursal like '".$nombre."%'";
 	}
 	else if (empty($_POST['xsucursal']))
 	 {
 	 	$cabina= $_POST['xcabina'];
 		$where="where cabina='".$cabina."'";
 	}
 	else
 	{
 		$nombre= $_POST['xsucursal'];
 		$cabina= $_POST['xcabina'];
 		$where="where sucursal like '".$nombre."%' and where cabina='".$cabina."'";
 	}

 } 
/////////
$loop="SELECT * FROM cse $where";
$tabla=$conexion -> query($loop);
$option=$conexion -> query($loop);

if(mysqli_num_rows($tabla)==0)
{
	$mensaje= "<h2>No data</h2>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Unique Record</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styletable.css">
</head>
<body>
		<img src="ssl-digital.png" width="10%" border="0" align="right">
    <img src="ssl-digital.png" width="10%" border="0" align="left">

			<h2>Unique Record</h2>
	
	<section>
		<form method="post">
			<input type="text" placeholder="sucursal" name="xsucursal">
			<select name="xcabina">
				<option value="">Cabina</option>
				<?php
					while ($resoption=$option -> fetch_array(MYSQLI_BOTH))
					{
						echo '<option value="'.$resoption['cabina'].'">'.$resoption['cabina'].'</optiont>';
					}
				?>
			</select>
			<button name="buscar" type="submit">Buscar</button>
		</form>
		<table>
			<thead>
			<tr>
				<th>ID</th>
				<th>Fecha</th>
				<th>Nombre</th>
				<th>Cargo</th>
				<th>Sucursal</th>
				<th>Reporta</th>
				<th>Falla</th>
				<th>Causa</th>
				<th>Oringen</th>
				<th>Resumen</th>
				<th>Cuenta</th>
				<th>Operador</th>
				<th>Estatus</th>
				<th>Heat</th>
				<th>Receptor</th>
				<th>Retirado</th>
				<th>Version</th>
				<th>Versiones</th>
				<th>Ganancia</th>
				<th>RF</th>
				<th>Boltaje</th>
				<th>Temperatura</th>
				<th>llamada</th>
			</tr>
			</thead>
			<?php 
			while ($datos=$tabla -> fetch_array(MYSQLI_BOTH)) 
			{
				echo '<tr>
					<td>'.$datos['id'].'</td>
					<td>'.$datos['fecha'].'</td>
					<td>'.$datos['nombre'].'</td>
					<td>'.$datos['cargo'].'</td>
					<td>'.$datos['sucursal'].'</td>
					<td>'.$datos['tipo'].'</td>
					<td>'.$datos['falla'].'</td>
					<td>'.$datos['reporta'].'</td>
					<td>'.$datos['causa'].'</td>
					<td>'.$datos['resumen'].'</td>
					<td>'.$datos['cabina'].'</td>
					<td>'.$datos['operador'].'</td>
					<td>'.$datos['estatus'].'</td>
					<td>'.$datos['heat'].'</td>
					<td>'.$datos['receptor'].'</td>
					<td>'.$datos['retirado'].'</td>
					<td>'.$datos['version'].'</td>
					<td>'.$datos['versiones'].'</td>
					<td>'.$datos['ganancia'].'</td>
					<td>'.$datos['rf'].'</td>
					<td>'.$datos['voltaje'].'</td>
					<td>'.$datos['temperatura'].'</td>
					<td>'.$datos['ticket'].'</td>
				</tr>';
			}

			 ?>

		</table>
		<?
		echo $mensaje;
		?>
		</section>
	<footer>
		
	</footer>
</body>
</html>