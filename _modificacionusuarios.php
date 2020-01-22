<?php

// Recogemos los datos del formulario
$idUsuario=$_GET['idUsuario'];
$nombre = $_GET['nombre'];
$apellidos= $_GET['apellidos'];
$email = $_GET['email'];
$telefono =  $_GET['telefono'];
$fechaNacimiento= $_GET['fechaNacimiento'];

    
//Incluimos el fichero donde se encuentra nuestra función de la conexión a la base de datos
include '_conexiondb.php';

//Asignamos a la variable conn la funcion conexiondb
$conn= conexiondb();

//Asignamos a la variable resultados el resultado del query
$resultados=$conn->query($sql);


//Creamos la trama para actualizar datos en la base de datos
    $sql = ("UPDATE usuarios SET nombre='".$nombre."', apellidos='".$apellidos."', email='".$email."', telefono='".$telefono."', fechaNacimiento='".$fechaNacimiento."' WHERE idUsuario='".$idUsuario."'");
    
//Utilizamos un if para ver si se produce algun error, si no, mostramos un mensaje
    if(! $conn->query($sql)){
        mostrarError("Se ha producido un error al actualizar tu usuario. Por favor, inténtelo de nuevo.", "perfilUsuarioAdmin.php");
    } else {
        header('Location: loginconfirmacion.php');
        
    }
    