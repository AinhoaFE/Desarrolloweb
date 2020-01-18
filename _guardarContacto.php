<?php

// Recogemos los datos del formulario
$nombre = $_GET['nombre']; 
$apellidos = $_GET['apellidos'];
$email = $_GET['email'];
$telefono =  $_GET['telefono'];
$mensaje = $_GET['mensaje'];
  
//Incluimos el fichero donde se encuentra nuestra función de la conexión a la base de datos
include '_conexiondb.php';

//Asignamos a la variable conn la funcion conexiondb
$conn= conexiondb();

//Creamos la trama para meter datos en la base de datos
    $sql = "INSERT INTO contacto (nombre, apellidos, email, telefono, mensaje) VALUES "
            . "('".$nombre."', '".$apellidos."', '".$email."', '".$telefono."', '".$mensaje."')";
    
//Utilizamos un if para ver si se produce algun error, si no, mostramos un mensaje
    if(! $conn->query($sql)){
        mostrarError("Se ha producido un error al crear el nuevo usuario. Por favor, inténtelo de nuevo.", "registro.php");
    } else {
        header('Location: _confirmacionContacto.php');
    }

