<?php

// Recogemos los datos del formulario
$nombre = $_GET['nombre']; 
$apellidos = $_GET['apellidos'];
/*Para la fecha de nacimiento necesitamos almacenarla como el formato de DATE() de la base de datos
es por esta razon que necesitamos transformar el formato en el que recopila la informacion el html
y especificarlos que lo queremos como YYYY-MM-DD:
*/
$fecha_nacimiento = $_GET['fecha-nacimiento'];
$fechaNacimiento = date('Y-m-d', strtotime($fecha_nacimiento));

$email = $_GET['email'];
$telefono =  $_GET['telefono'];
$contrasena= $_GET['contrasena'];
$mensaje = $_GET['mensaje'];

//Obtenemos la ip del usuario
$ip = $_SERVER['REMOTE_ADDR'];
    
//Incluimos el fichero donde se encuentra nuestra función de la conexión a la base de datos
include '_conexiondb.php';

//Asignamos a la variable conn la funcion conexiondb
$conn= conexiondb();

//Creamos la trama sql(en la que hacemos un select del mail para ver si existe) y la asignamos a la variable sql
$sql = "SELECT * FROM usuarios WHERE email='".$email."'";

//Asignamos a la variable resultados el resultado del query
$resultados=$conn->query($sql);

//Utilizamos un condicional para ver si el mail existe
if($resultados->num_rows>0){

//Si existe invocamos la funcion de error con el siguiente mensaje
    mostrarError("ERROR. El email utilizado pertenece a otro usuario", "registro.php");

//Si no existe entramos en el else, procesando e introduciendo los datos en la base de datos:
} else {

//A la variable contrasenaCifrada le asignamos la contraseña codificada gracias a la funcion password_hash
//$contrasena= sha1($contrasena, PASSWORD_DEFAULT);
$contrasena = sha1($contrasena);


//Creamos la trama para meter datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre, apellidos, email, telefono, contrasena, ipUsuario, fechaNacimiento, mensaje) VALUES "
            . "('".$nombre."', '".$apellidos."', '".$email."', '".$telefono."', '".$contrasena."', '".$ip."', '".$fechaNacimiento."', '".$mensaje."')";
    
//Utilizamos un if para ver si se produce algun error, si no, mostramos un mensaje
    if(! $conn->query($sql)){
        mostrarError("Se ha producido un error al crear el nuevo usuario. Por favor, inténtelo de nuevo.", "registro.php");
    } else {
        header('Location: _confirmacionAlta.php');
    }
}
