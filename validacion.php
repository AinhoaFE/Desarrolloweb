 <?php

//Hace una llamada a validaciones.php 
require_once 'validaciones.php';
if (!$con= mysqli_connect("127.0.0.1","root","")) {
    die('No se pudo conectar: ' . mysqli_error());
}

if(!mysqli_select_db($con,"Akarayoga"))
	die("Error: No existe la base de datos");


$nombre = $_POST['contactName'];
$mail = $_POST['contactEmail'];
$tema = $_POST['contactSubject'];
$mensaje = $_POST['contactMessage'];

//Inserta en la bbdd

$query="INSERT INTO clientes VALUES (NULL,'$nombre','$mail','$tema','$mensaje')";
$result=mysqli_query($con,$query);
$errores = array();
/*
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   //Valida que el campo nombre no esté vacío.
   if (!validaRequerido($nombre)) {
      $errores[] = 'El campo nombre está vacio.';
   }
   //Valida que el campo mail no esté vacío.

 if (!validaRequerido($mail)) {
      $errores[] = 'El campo mail está vacio.';
   }
      //Valida que el campo mensaje no esté vacío.

   if (!validaRequerido($mensaje)) {
      $errores[] = 'El campo mensaje está vacio.';
   }
   //Valida que el campo email sea correcto.
   if (!validaEmail($mail)) {
      $errores[] = 'El campo email es incorrecto.';
   }
*/  
  //Verifica si ha encontrado errores y de no haber redirige a la página con el mensaje de que pasó la validación.
    if(!$errores){
	   if(!$result){

            echo "La conexión no se ha podido establecer";
            exit();
}
else{
			
		require 'paginaprincipal1.php';
		//echo "Formulario enviado";
		//echo" <html>";

		
	}
        }
		else 
			$errores;
//}

?>