<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stylecse.css">
	<title>Customer Service Experien</title>
</head>
<body>
	<img src="ssl-digital.png" width="10%" border="0" align="right">
    <img src="ssl-digital.png" width="10%" border="0" align="left">
	<h1>CSE</h1>
	<form class="cuerpo" action="registro.php" method="post">
		<h2 class="titulo">Register Data:</h2>
        <h2 id="conta"><?php include("cont.php");?></h2>
        <p float="right"><? include("date.php");?></p>
        <div class="almacen">
            <input type="text" name="nombre" placeholder="Nombre" class="c100" required="">
			<input type="text" name="cargo" placeholder="Cargo" class="c50" required="">
			<input type="verbatim" name="sucursal" placeholder="Sucursal" class="c50" required="">
			<select name="tipo" class="c50">
				<option value="comidin">Tipo de reporte</option>
				<option value="Reporta">Reporta falla</option>
				<option value="Cierre">Cierre de reporte</option>
				<option value="Correctivo">Correctivo</option>
				<option value="Preventivo">Mantenimiento Preventivo</option>
				<option value="Seguimiento">Seguimiento</option>
				<option value="Activacion">Activacion</option>
				<option value="Remodelacion">Remodelacion</option>
				<option value="Monitoreo">Monitoreo</option>
			</select>
			<select name="falla" class="c50">
				<option value="comidin">Falla general</option>
				<option value="Audio y video">Audio y video</option>
				<option value="Video">Video</option>
				<option value="Audio">Audio</option>
				<option value="Sin conferencia">Sin conferencia</option>
				<option value="Monitoreo">Monitoreo</option>
				<option value="Preventivo">Mantenimiento Preventivo</option>
			</select>
			<select name="detalle" class="c50">
				<option value="comodin">Falla</option>
				<option value="Falla receptor">Falla receptor</option>
				<option value="Falla de pantalla">Falla de pantalla</option>
				<option value="Falla de amplificador">Falla de amplificador</option>
				<option value="Falla de relevador">Falla de relevador</option>
				<option value="Falla de bocinas">Falla de bocina</option>
				<option value="Falla de cableado">Cableado</option>
				<option value="Falla antena">Falla LNB/Antena</option>
				<option value="Falla de energia">Sin energia electrica</option>
				<option value="Monitoreo">Todo correcto</option>
			</select>
			<select name="causa" class="c50">
				<option value="comodin">Causa</option>
				<option value="RX bloqueado">Receptor bloqueado</option>
				<option value="RX dañado">Receptor dañado</option>
				<option value="Application error">Application error</option>
				<option value="Boot..">Boot...FP V3.1</option>
				<option value="Continue to boot">Continue to boot</option>
				<option value="Hard drive">Hard Drive</option>
				<option value="No signal">No Signal</option>
				<option value="Recovery">Recovery</option>
				<option value="Panalla desconfigurada">Pantalla desconfigurada</option>
				<option value="Pantalla dañada">Pantalla dañada</option>
				<option value="Amplificador desconfigurado">Amplificador desconfigurado</option>
				<option value="Amplificador dañado">Amplificador dañado</option>
				<option value="Relevador">Relevador dañado</option>
				<option value="Bocinas dañadas">Bocinas dañadas</option>
				<option value="Cables desconectados">Cables desconectados</option>
				<option value="Cables dañados">Cables dañados</option>
				<option value="LNB">Antena dañada</option>
				<option value="Sin antena">Sin antena</option>
				<option value="Sin energia">Sin energia</option>
				<option value="Equipo desconectado">Equipo desconectado</option>
				<option value="Monitoreo">Todo correcto</option>
			</select>
            <input type="text" name="texto" placeholder="Resumen" class="c100">
			<input type="text" name="cabina" placeholder="Cabina" class="c50">
			<input type="text" name="operador" placeholder="Operador" class="c50">
			<h3 id="tit">Ticket Heat</h3>
			<div id="caja">
			<input type="text" name="estatus" placeholder="Estatus" class="c50">
			<input type="text" name="heat" placeholder="HEAT" class="c50">
			<input type="text" name="receptor" placeholder="Receptor instalado" class="c50">
			<input type="text" name="retirado" placeholder="Receptor retirado" class="c50">
			<input type="text" name="version" placeholder="Versiones SW" class="c50">
			<input type="text" name="versiones" placeholder="Versiones BK" class="c50">
			<input type="text" name="ganancia" placeholder="Ganancia" class="c50">
			<input type="text" name="rf" placeholder="RF" class="c50">
			<input type="text" name="voltaje" placeholder="Voltaje" class="c50">
			<input type="text" name="temperatura" placeholder="Tem ºC" class="c50">
			</div>
			<input type="submit" value="Send" id="envio" align="center">
			<a href="busqueda.php" target="_blank"> <input type="button" name="boton" value="Serch" id="serch" /> </a> 
		</div>
	</form>
</body>
</html>