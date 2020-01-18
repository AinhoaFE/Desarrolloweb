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
                        <a class="nav-link letra active" href="aboutadmin.php">Akara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link letra" href="servicesadmin.php">Clases</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link letra" href="contactadmin.php">Contacto</a>
                    </li>

                    <?php if ($autorizado == true) { 
                            
                            //introducimos html despues de estas llaves?>
                        <a class="nav-link letra" href="perfilUsuarioAdmin.php"><?php echo $nombreUsuario?></a>

                        <?php } else { ?>

                        <a class="nav-link letra" href="login.php">Login</a>

                        <?php } ?>
               
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3"><small>Sobre </small>  Akara</h1>



        <!-- Intro Content -->
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-4" src="./fotos/akarapng.png" alt="">
            </div>
            <div class="col-lg-6">
                <h2>About...</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Team Members -->
        <h2>Algunas de nuestras opiniones...</h2>

        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="./fotos/guia.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Una guía en tu desarrollo</h4>

                        <blockquote class="card-text opiniones">"Estoy iniciandome en el yoga, y doy una clase por semana. Alejandra me está guiando con paciencia, adaptándose a mi ritmo, corrigiéndome y haciendo las clases superentretenidas. Recomendable totalmente!!"</blockquote>
                    </div>
                </div>
            </div>




            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="./fotos/akenara1.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Profesionalidad y cariño</h4>
                        <blockquote class="card-text opiniones"> "Aparte de ser un cielo,se toma muy es serio lo que hace...y lo hace con muchísimo amor."</blockquote>
                    </div>


                </div>
            </div>


            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="./fotos/pasion.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Pasión por el yoga</h4>
                        <blockquote class="card-text opiniones"> "Espectacular como profesora. Con ganas de enseñar y superarse día a día. Trato de lo más personal y cercano. Se prepara las clases según necesidades del alumno. La recomiendo con los ojos cerrados, aunque ella me los abriese con
                            la primera clase...."</blockquote>
                    </div>


                </div>
            </div>
            
            <div>
            <p>Fuente: <a class="enlaces" href="https://www.tusclasesparticulares.com/profesores/alejandra-kara/opiniones" target="blank">tusclasesparticulares.com</a></p>
            <hr>
            </div>


        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

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