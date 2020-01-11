<?php
//Para que no muestren generen errores
error_reporting(E_ALL ^ E_NOTICE);
session_start();

    $autorizado = $_SESSION['autorizado'];
    $nombreUsuario = $_SESSION['nombre'];

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
                        <a class="nav-link letra active" href="services.php">Clases</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link letra" href="contact.php">Contacto</a>
                    </li>

                    <li>
                    <?php if ($autorizado == true) { 
                            
                            //introducimos html despues de estas llaves?>
                            <a class="nav-link letra" href="perfilUsuario.php"><?php echo $nombreUsuario?></a>
    
                            <?php } else { ?>
    
                            <a class="nav-link letra" href="login.php">Login</a>
    
                            <?php } ?>


                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3"><small>Algunas de nuestras </small>clases <small>más solicitadas</small>
        </h1>


        <!-- Image Header -->
        <img class="img-fluid rounded mb-4" src="./fotos/clases-1.png" alt="">


        <div class="container">




            <!-- Marketing Icons Section -->
            <div class="row">

                <!-- /.row -->

                <!-- Portfolio Section -->



                <div class="row">
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">

                            <div class="card-body">
                                <h4 class="card-title letra">Yoga al aire libre</h4>
                                <p class="card-text">Que mejor entorno para hacer yoga que conectado con la naturaleza. Apuntate a nuestras sesiones en los mejores parques de Madrid.</p>
                            </div>
                            <img class="card-img-top" src="./fotos/yoga-parque.png" alt="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">

                            <div class="card-body">
                                <h4 class="card-title letra">Yoga a domicilio</h4>
                                <p class="card-text">En Akarayoga nos movemos a tu domicilio para darte las sesiones de yoga más personalizadas.</p>
                            </div>
                            <img class="card-img-top" src="./fotos/yoga-domicilio.png" alt="">

                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">

                            <div class="card-body">
                                <h4 class="card-title letra">Sesiones online</h4>
                                <p class="card-text">Tanto si tienes dificultades para asistit presencialmente a nuestras sesiones, o no te encuentras en Madrid, no dudes en ponerte en contacto conmigo para reservar tus sesiones online.</p>
                            </div>

                            <img class="card-img-top" src="./fotos/yoga-online.png" alt="">
                        </div>
                    </div>



                </div>
                <!-- /.row -->

                <hr>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Universidad Europea de Madrid - Asignatura: Desarrollo web y de apps - Realizada por: Ainoha Fernandez & Sergio Benavente</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>