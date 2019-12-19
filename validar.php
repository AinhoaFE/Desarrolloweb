<?php
session_start();

    // Arrays para guardar errores:
     $errores = array();
	 
	 function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes 
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}
	//$aMensajes = array();
    // Patrón para usar en expresiones regulares (admite letras acentuadas y espacios):
     $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
	 
    // Comprobar si se ha enviado el formulario:
    if(isset($_POST['Submit']) && $_SERVER['REQUEST_METHOD'] == "POST"){
	
    // El nombre es un campo obligatorio

	if (empty($_POST['contactName']))
	{
        $errores[] = "El nombre es un campo obligatorio";
		//$_SESSION['error']="El nombre es un campo obligatorio";
		
    }

	// Forzamos que el nombre tenga letras acentuadas y espacios y que el campo no tenga más de 20 caracteres
	if(  !preg_match($patron_texto, $_POST['contactName'])) {
		  $errores[] = "Ha introducido caracteres no permitidos en el nombre";
	}
	if (strlen($_POST['contactName']) > 20){
		
		  $errores[] = "Ha introducido más de 20 caracteres en el campo nombre";
    }
	

    // El email es obligatorio, ha de tener formato adecuado y no más de 30 caracteres.
 
    if(!filter_var($_POST['contactEmail'], FILTER_VALIDATE_EMAIL)){
        $errores[] = "El formato del email no es correcto";
    }
	if (empty($_POST['contactEmail'])){
		$errores[] = "El mail es un campo obligatorio.";		
	}
	if (strlen($_POST['contactEmail']) > 30){
		
		  $errores[] = "Ha introducido más de 30 caracteres en el campo mail";
    }
	
	// El tema no puede tener más de 20 caracteres 
	if (strlen($_POST['contactSubject']) > 20){
		
		  $errores[] = "Ha introducido más de 20 caracteres en el campo tema";
    }
	// El mensaje es obligatorio y no puede tener mas de 50 caracteres
    if(empty($_POST['contactMessage'])){
        $errores[] = "El mensaje es un campo obligatorio.";
    }
	if (strlen($_POST['contactMessage']) > 50){
		
		  $errores[] = "Ha introducido más de 50 caracteres en el campo mensaje";
    }
    	
    // Si el array $errores está vacío, se aceptan los datos y se asignan a variables
    if(empty($errores)) {
		//echo 'vacio';

		$nombre = filtrado($_POST['contactName']);
		$mail = filtrado($_POST['contactEmail']);
		$tema = filtrado($_POST['contactSubject']);
		$mensaje = filtrado($_POST['contactMessage']);
		//Abrimos el fichero validacion.php
	  require 'validacion.php';
	
	}
	else{
		//echo 'lleno';
		//Mostramos los errores por pantalla
	foreach ($errores as $error){
        echo "<li> $error </li>";
    }    
    }

	}
	else{
		
		echo 'No se ha enviado el formulario';
	}

   echo "<p><a href='contact.html'>Haz clic aquí para volver al formulario</a></p>";
?>