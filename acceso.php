<?php

if (!$con= mysqli_connect("127.0.0.1","root","")) {
    die('No se pudo conectar: ' . mysqli_error());
}

if(!mysqli_select_db($con,"Akarayoga"))
	die("Error: No existe la base de datos");

//echo "Conectado";

//mysqli_close($con);


?>
