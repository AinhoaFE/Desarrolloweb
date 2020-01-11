<?php
//CIERRE DE SESION

//Primero iniciamos la sesion en esta página
session_start();

//Destruimos los datos de la sesion
session_destroy();
//Redirigimos
echo '<meta http-equiv="refresh" content="0; url=index.php">'
?>