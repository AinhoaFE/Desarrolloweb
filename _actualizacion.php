<?php

// Recogemos los datos del formulario
$idClase=$_GET['idClase'];
$nombreClase = $_GET['nombreClase'];
$tipo= $_GET['tipo'];
$duracionMinutos = $_GET['duracionMinutos'];
$fecha =  $_GET['fecha'];
$ubicacion= $_GET['ubicacion'];
$aforo = $_GET['aforo'];
$activa =$_GET['activa'];

    
//Incluimos el fichero donde se encuentra nuestra función de la conexión a la base de datos
include '_conexiondb.php';

//Asignamos a la variable conn la funcion conexiondb
$conn= conexiondb();

//Creamos la trama sql(en la que hacemos un select del mail para ver si existe) y la asignamos a la variable sql
$sql = "SELECT * FROM clases WHERE idClase=$idClase";

//Asignamos a la variable resultados el resultado del query
$resultados=$conn->query($sql);

/*$mysqli->query("INSERT INTO clases (idClase, nombreClase, Tipo, duracionMinutos, fecha, ubicacion, aforo) VALUES "
. "('".$idClase.", '".$nombreClase."', '".$tipo."', '".$duracionMinutos."', '".$fecha."', '".$ubicacion."', '".$aforo."')");
*/
//Creamos la trama para actualizar datos en la base de datos
//$sSQL="Update Clientes Set telefono='$telefono' Where nombre='$nombre'";
    $sql = "UPDATE clases SET nombreClase='$nombreClase', Tipo='$tipo', duracionMinutos='$duracionMinutos', fecha='$fecha', ubicacion='$ubicacion', aforo='$aforo', activa='$activa' WHERE idClase='$idClase'";
    
//Utilizamos un if para ver si se produce algun error, si no, mostramos un mensaje
    if(! $conn->query($sql)){
        mostrarError("Se ha producido un error al actualizar las clases. Por favor, inténtelo de nuevo.", "perfilUsuarioAdmin.php");
    } else {
        header('Location: _confirmacionactualizacion.php');
    }
