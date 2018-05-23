<?php

//mensaje
//echo "contador de visitas en PHP <br/><br>";

//arhivo
$archivo = "bd.txt";

//variable para el contador
$contador = 1;

//abrir el archivo
$fp = fopen($archivo,'r');

//lee el arhicvo desde
$contador = fgets($fp,10);

//cerrar el archivo
fclose($fp);

//incrementar el contador
$contador++;

//abrir escritura de arhivo
$fp = fopen($archivo,'w+');

//grabar el contenido
fwrite($fp,$contador,10);

//cierrar el archivo
fclose($fp);

//monstrar contador
echo "SSL$contador<br>";

//ini_set('date.timezone','America/Cancun'); 
//echo date("g:i a");
//$fecha = date("d/m/y g:i");
//echo $fecha;


