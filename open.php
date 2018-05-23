<?php
//conexion a la base de datos
$con = mysqli_connect("localhost","root","","BDD");
if (mysqli_connect_errno()){
    echo "No se pudo conectar a la base de datos" . mysqli_connect_error();
}
//obteber valores de la base de datos
$nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
$cargo = mysqli_real_escape_string($con, $_POST["cargo"]);
//insertar valores
$sql = "INSERT INTO tabla (nombre, cargo) VALUES ('$nombre', '$cargo')";
if (!mysqli_query($can,$sql)){
    die('error:' . mysquli_error($con));
} else {
    echo "registro correctamente";
}

