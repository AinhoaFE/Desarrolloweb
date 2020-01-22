<!-- Introducimos esta funcion PHP para que si el usuario entra en 
la web sin loguearse, se le redireccione directamente a una pagina de
acceso restringido -->

<?php
//Para que no muestren generen errores
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if ($_SESSION['autorizado'] == false) { 
echo '<meta http-equiv="refresh" content="0; url=_accesoRestringido.php">';
die();

} else{
    $autorizado = $_SESSION['autorizado'];
    $idUsuario = $_SESSION['idUsuario'];
    $nombreUsuario = $_SESSION['nombre'];
    $apellidos = $_SESSION['apellidos'];
    $email = $_SESSION['email'];
    $telefono = $_SESSION['telefono'];
    $ultimoAcceso = $_SESSION['fechaUltimoAcceso'];
    $registro = $_SESSION['fechaRegistro'];
    $nacimiento =  $_SESSION['fechaNacimiento'];
    $ipUsuario =$_SESSION['ipUsuario'];
}


	$conexion=mysqli_connect('localhost','root','','Akarayoga');


?>





<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Clases Akarayoga">
	<meta name="author" content="Web Sergio y Ainhoa">
	<meta name="keywords" content="akarayoga, conocenos, yoga, clases, relax, work, trabajo, meditación, blog">
	<meta name="distribution" content="global">
	<meta name="geo.region" content="ES-M">

    <title>Akarayoga</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">




    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Agregamos icono del navegador -->
    <link rel="shortcut icon" href="./fotos/icono.png" />

    <!-- Agregamos fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Lato:900|Merriweather&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Signika&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Oswald:500&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="indexadmin.php"> <span><img src="fotos/icono.png"width="35" height="30"></span> Akarayoga</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link letra" href="indexadmin.php">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link letra" href="aboutadmin.php">Akara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link letra" href="servicesadmin.php">Clases</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link letra" href="contactadmin.php">Contacto</a>
                    </li>

                    <?php if ($autorizado == true) { 
                            
                            //introducimos html despues de estas llaves?>
                    <a class="nav-link letra active" href="perfilUsuarioAdmin.php">
                        <?php echo $nombreUsuario?>
                    </a>

                    <?php } else { ?>

                    <a class="nav-link letra active" href="login.php">Login</a>

                    <?php } ?>

                </ul>
            </div>
        </div>
    </nav>


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3"> <small>¡Hola </small><?php echo $nombreUsuario ." ". $apellidos?>! </h1>


        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-lg-3 mb-4">
                <div class="list-group">
                    <a href="perfilUsuarioAdmin.php" class="btn btn-primary btn-block">Perfil Administrador</a>
                    <a href="perfilAdmin_Clases.php" class="btn btn-primary btn-block">Crear Clases</a>
                    <a href="perfilAdmin_Clases.php" class="btn btn-primary btn-block activado">Editar Clases</a>
                    <a href="perfilAdminClases.php" class="btn btn-primary btn-block ">Clases</a>
                    <a href="_cerrarSesion.php" class="btn btn-primary btn-block bot-rojo">Cerrar sesión</a>

                </div>
            </div>
            <!-- Content Column -->
            <div class="col-lg-9 mb-4">
                <h2>Modificando Datos Personales</h2>

 <!-- Vamos a crear una tabla que se autocomplete con las clases de yoga disponibles -->

 <?php 
        $idUsuario=$_REQUEST['id'];
		$sql="SELECT * from usuarios WHERE idUsuario=$idUsuario";
        $result=mysqli_query($conexion,$sql);
        
              
		while($data=mysqli_fetch_array($result)){
          $nombre=$data['nombre'];
          $apellidos=$data['apellidos'];
          $email=$data['email'];
          $telefono=$data['telefono'];
          $fechanac=$data['fechaNacimiento']; 
         
?>


        <form id="ModificacionUsuario" action="_modificacionusuarios.php" methot="GET" onsubmit="return validarFormularioRegistro()">
                    
                   
        <div class="control-group form-group">
                        <div class="controls">
                            
                                                  
                        <input type="hidden" id="idUsuario"  name="idUsuario" class="form-control" value="<?php echo $idUsuario;?>">
            
                        </div>
                    </div>
                    
                     <div class="control-group form-group">
                        <div class="controls">
                            
                                                  
                        <label for="nombre">Nombre </label>
                        <input type="text" id="nombre"  name="nombre" class="form-control" value="<?php echo $nombre;?>">
            
                        </div>
                    </div>
                    
                    <div class="control-group form-group">
                        <div class="controls">

                        <label for="apellidos">Apellidos</label>
                        <input type="text" id="apellidos"  name="apellidos" class="form-control" value="<?php echo $apellidos;?>" >

                        </div>
                     </div>
                    
                        <div class="control-group form-group">
                        <div class="controls">
                            
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" class="form-control" value="<?php echo $email;?>">

                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls">

                        <label for="telefono">Teléfono</label>
                        <input type="number" id="telefono" name="telefono" class="form-control" value="<?php echo $telefono;?>">
       
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls">
                            
                      
                        <label for="fechanac">Fecha Nacimiento</label>
                        <input type="date" id="fechanac" name="fechanac" class="form-control" value="<?php echo $fechanac;?>">
    

                        </div>
                    </div>
                        
                                      
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Modificar</button>

                   
                    <hr>
                </form>
       
        
        <?php }?>

</div>


        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

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