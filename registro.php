<?php
include 'data.php';
include 'cont.php';
include 'date.php';
$date = "$nuevafecha";
$nombre = $_POST["nombre"];
$cargo = $_POST["cargo"];
$sucursal = $_POST["sucursal"];
$tipo = $_POST["tipo"];
$falla = $_POST["falla"];
$detalle = $_POST["detalle"];
$causa = $_POST["causa"];
$texto = $_POST["texto"];
$cabina = $_POST["cabina"];
$operador = $_POST["operador"];
$estatus = $_POST["estatus"];
$heat = $_POST["heat"];
$receptor = $_POST["receptor"];
$retirado = $_POST["retirado"];
$version = $_POST["version"];
$versiones = $_POST["versiones"];
$ganancia = $_POST["ganancia"];
$rf = $_POST["rf"];
$voltaje = $_POST["voltaje"];
$temperatura = $_POST["temperatura"];
$ticket = "$contador";
    
$insertar = "INSERT INTO cse (fecha,nombre, cargo, sucursal, tipo, falla, reporta, causa, resumen, cabina, operador, estatus, heat, receptor, retirado, version, versiones, ganancia, rf, voltaje, temperatura, ticket) values ('$date','$nombre', '$cargo', '$sucursal', '$tipo', '$falla', '$detalle', '$causa', '$texto', '$cabina', '$operador', '$estatus', '$heat', '$receptor', '$retirado', '$version', '$versiones', '$ganancia', '$rf', '$voltaje', '$temperatura', '$ticket')";

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado){
    echo 'error al registrarse';
} else{
    echo "<br>registro correcto<br><a href='cse.php'>Volver</a>";
}

mysqli_close($conexion);