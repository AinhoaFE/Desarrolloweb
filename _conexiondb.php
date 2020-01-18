<?php

/*CREAMOS ESTA FUNCION PARA LA CONEXIÓN A LA BASE DE DATOS*/
function conexiondb(){
/*
    $nombreServidor ="localhost";
    $usuario="root";
    $contrasena="";
    $nombreBD="bgdb";
*/
    //Instanciamos el objeto de la base de datos para crear la conexión y le pasamos las variables anteriormente especificadas
    $conn = new mysqli("localhost", "root", "", "akarayoga");


    //Nos ayudamos de un if para que si la conexión nos falla, salimos y si no, nos devuelva la conexion
    if($conn->connect_error){

        die( "Error con la conexión a la base de datos. Error: " . $error -> $conn->connect_error);
    }
    else{
        return $conn;
    }
}


function mostrarError($mensaje, $pagina){
    $url = "error.php?msjError=".$mensaje."&pagina=".$pagina;
    
    header("Location: ".$url);
}

?>

