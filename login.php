<?php
//Inicializamos las variables de sesión
session_start();

//Seteamos el indice autorizado con el valor falso (solo permitiremos el acceso si inserta usuario y contraseña)
$_SESSION['autorizado'] = false;

//Inicializamos las variables a 0
$mensaje="";
$email="";

//Nos ayudamos de un if para saber si el email y la contrasena tienen valores
if(isset($_POST['email']) && isset($_POST['contrasena'])) {


//Hacemos. las validaciones en PHP, Pues anteriormente hemos usado javascript
if ($_POST['email']==""){
    $mensaje.="- Por favor, ingrese su email <br>";

  } else if ($_POST['contrasena']=="") {
    $mensaje.="- Por favor, ingrese su contraseña <br>";

  }else {
    
    $email = strip_tags($_POST['email']);
    $contrasena =sha1(strip_tags($_POST['contrasena']));
    
    //Asignamos a mysqli la variable de conexion
    $mysqli = mysqli_connect("localhost", "root", "", "Akarayoga");
    

    if ($mysqli==false){
      
      echo "Error al conectar con la base de datos";
      die();
    }

    $resultado = $mysqli->query("SELECT * FROM `usuarios` WHERE `email` = '".$email."' AND  `contrasena` = '".$contrasena."' ");
    $usuarios = $resultado->fetch_all(MYSQLI_ASSOC);

    //Compruebo la info de los datos que me trae
    //echo "<pre>";
    //print_r($usuarios);
    //die();

    
    //cuento cuantos elementos tiene $tabla,
    $cantidad = count($usuarios);


    if ($cantidad == 1){
    
    //cargo datos del usuario en variables de sesión
    
    $_SESSION['idUsuario'] = $usuarios[0]['idUsuario'];
    $_SESSION['nombre'] = $usuarios[0]['nombre'];
    $_SESSION['apellidos'] = $usuarios[0]['apellidos'];
    $_SESSION['email'] = $usuarios[0]['email'];
    $_SESSION['telefono'] = $usuarios[0]['telefono'];
    $_SESSION['fechaRegistro'] = $usuarios[0]['fechaRegistro'];
    $_SESSION['fechaUltimoAcceso'] = $usuarios[0]['fechaUltimoAcceso'];
    $_SESSION['fechaNacimiento'] = $usuarios[0]['fechaNacimiento'];
    $_SESSION['ipUsuario'] = $usuarios[0]['ipUsuario'];



      
      $_SESSION['autorizado'] = true;
      
      //Definimos la variable hoy para actualizar el campo ultimo acceso conforme al formato de timestamp de la base de datos:
      $fechaActual = date("Y-m-d H:i:s");
      
      //Creamos la consulta SQL que actualizará la fecha del último acceso
      $resultado = $mysqli->query("UPDATE `usuarios` SET `fechaUltimoAcceso`= '".$fechaActual."' WHERE `email` = '".$email."' ");
      $mensaje .= "Acceso concedido";

      if($email == "ainhoafdezescavias@gmail.com"){
      
      //Redirigimos a la principal del admin
      echo '<meta http-equiv="refresh" content="2; url=indexadmin.php">';
    }
      else{
      //Redirigimos a la principal
      echo '<meta http-equiv="refresh" content="2; url=index.php">';
      }

    }else{
  
    //Si no coinciden las contraseñas entonces imprimimos mensaje de denegado y establecemos la variable en false
      $mensaje .= "Acceso denegado";
      $_SESSION['autorizado'] = false;
    }
  }
}

?>



<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Akarayoga</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">




    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">



    <!-- Agregamos fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Lato:900|Merriweather&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Signika&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Oswald:500&display=swap" rel="stylesheet">

    <!-- Agregamos icono del navegador -->
    <link rel="shortcut icon" href="./fotos/icono.png" />

</head>

<body class="body-login-personalizado">

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php"> <span><img src="fotos/icono.png"width="35" height="30"></span> Akarayoga</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item ">
                        <a class="nav-link letra" href="index.php">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link letra" href="about.php">Akara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link letra" href="services.php">Clases</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link letra" href="contact.php">Contacto</a>
                    </li>

                <!-- Vamos a crear aqui una función para que me cambie el contenido del texto 
                por el nombre del usuario o bien por login y ademas personalizaremos el vinculo para llevarlo a la pagina principal
                o por el contrario a la pagina de login -->

                                        
                        <li class="nav-item">
                        <a class="nav-link letra active" href="login.php">Login</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    <header>

        
        
        
        <div class="container">

            <hr class="my-4">
            <div class="centrar-texto">
                <h2>Accede a tu espacio <strong class="akarayoga">Akarayoga</strong></h2>
            </div>

            <div class="container">
                <div class="card card-login mx-auto mt-5">
                    <div class="card-header"><h3>Inicio de sesión</h3></div>
                    <div class="card-body">

    <!-- Insertamos el formulario de inicio de sesión -->
                        <form form action="login.php" method="post">

                            <!-- email -->
                            <div class="form-group">
                                <div class="form-label-group">
                                <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Correo electrónico"  autofocus="autofocus">
                                    
                                </div>
                            </div>

                            <!-- contrasena   <a class="btn btn-primary btn-block" href="index.php">Iniciar sesión</a>-->
                            <div class="form-group">
                                <div class="form-label-group">
                                    
                                <label for="contrasena">Contraseña</label>
                                    <input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="Password">
                                   
                                </div>
                            </div>

                            <input class="btn btn-primary btn-block" type="submit" value="Login" class="boton-form">
                            



                            <div style="color:red">
                     <?php echo $mensaje; ?>
                </div>
                        </form>
                        
                        
                            <a class="d-block small mt-3" href="registro.php">Crear una cuenta</a>
                           
                        </div>
                    </div>
                </div>

            </div>

    </header>

    <!-- Page Content -->




    <div class="container">

    

        <!-- /.container -->

        <hr>
        <hr>
    </div>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Universidad Europea de Madrid - Asignatura: Desarrollo web y de apps - Realizada por: Ainhoa Fernandez & Sergio Benavente</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    

</body>

</html>