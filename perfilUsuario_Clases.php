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
    <meta name="description" content="">
    <meta name="author" content="">

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
            <a class="navbar-brand" href="index.php"> <span><img src="fotos/icono.png"width="35" height="30"></span> Akarayoga</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
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

                    <?php if ($autorizado == true) { 
                            
                            //introducimos html despues de estas llaves?>
                    <a class="nav-link letra active" href="perfilUsuario.php">
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
                    <a href="perfilUsuario.php" class="btn btn-primary btn-block">Mi perfil</a>
                    <a href="perfilUsuario_Clases.php" class="btn btn-primary btn-block activado">Mis Clases</a>
                    <a href="perfilUsuario_Contacto.php" class="btn btn-primary btn-block">Contacto</a>
                    <a href="_cerrarSesion.php" class="btn btn-primary btn-block bot-rojo">Cerrar sesión</a>

                </div>
            </div>
            <!-- Content Column -->
            <div class="col-lg-9 mb-4">
                <h2>Mis Clases</h2>

 <!-- Vamos a crear una tabla que se autocomplete con las clases de yoga disponibles -->

    <table border="1">
		<tr>
			
			<td>Nombre de la clase</td>
			<td>Tipo de actividad</td>
			<td>Duración (minutos)</td>
			<td>Ubicación</td>
            <td>Fecha</td>
            <td>Aforo</td>	
		</tr>


        <?php 
        
		$sql="SELECT * from clases";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			
			<td><?php echo $mostrar['nombreClase'] ?></td>
			<td><?php echo $mostrar['Tipo'] ?></td>
			<td><?php echo $mostrar['duracionMinutos'] ?></td>
            <td><?php echo $mostrar['ubicacion'] ?></td>
            <td><?php echo $mostrar['fecha'] ?></td>
          
            <td><?php echo $mostrar['aforo'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

                 
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