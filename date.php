<?php
date_default_timezone_set("America/Mexico_City");
echo date("g:i a");
$fecha = date('Y-m-d');
$nuevafecha = strtotime ( '+2 day' , strtotime ( $fecha ) ) ;
$nuevafecha = date ( 'Y-m-d' , $nuevafecha );
 
echo $nuevafecha;
?>