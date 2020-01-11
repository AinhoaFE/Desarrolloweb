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



    <!-- Agregamos fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Lato:900|Merriweather&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Signika&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Oswald:500&display=swap" rel="stylesheet">

    <!-- Agregamos icono del navegador -->
    <link rel="shortcut icon" href="fotos/icono.png" />

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

                    <li class="nav-item active">
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

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('fotos/Slider1.png')">
                    <div class="carousel-caption d-none d-md-block mensajes-carrousel">
                        <h3><span class="mensajes-sliders"> Equilibrio del cuerpo </span></h3>

                        <p>Akarayoga</p>

                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('fotos/Slider2.png')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3><span class="mensajes-sliders"> Equilibrio de la mente </span></h3>

                        <p>Akarayoga</p>

                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('fotos/Slider3.png')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3><span class="mensajes-sliders"> Equilibrio del alma </span></h3>

                        <p>Akarayoga</p>

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->




    <div class="container">

        <hr class="my-4">
        <div class="centrar-texto">
            <h2>Nuestra filosofía es conectar a las personas con la magia del yoga</h2>
        </div>
        <hr class="my-4">

        <!-- Marketing Icons Section -->
        <div class="row">

            <!-- /.row -->

            <!-- Portfolio Section -->



            <div class="row">
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <img class="card-img-top" src="./fotos/pasion-yoga.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title letra">Pasión por Hatha Yoga</h4>
                            <p class="card-text">Mi disciplina es un tipo de yoga muy difundido alrededor de todo el mundo, conocido por sus posiciones corporales, que no solo aportan a los músculos firmeza y elasticidad, sino que también te ayudarán a lograr que tu cuerpo
                                esté apto para la meditación. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <img class="card-img-top" src="./fotos/sesiones.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title letra">Sesiones de yoga</h4>
                            <p class="card-text">Animate a disfrutar de los beneficios del yoga con sesiones a domicilio, tanto privadas como grupales. Ahora con las sesiones impartidas a través de Skype, no tienes excusa! </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <img class="card-img-top" src="./fotos/teambuilding.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title letra">Yoga Teambuilding</h4>
                            <p class="card-text">¡Aprovecha la magia del yoga para hacer teambuilding con tus compañeros de trabajo!. Sin duda una de las mejores herramientas para luchar contra el estrés y mejorar el vinculo laboral.</p>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.row -->

            <!-- Features Section -->
            <div class="row">
                <div class="col-lg-6">
                    <h2>Algunos beneficios del yoga...</h2>

                    <ul>
                        <li>Erradica el estres</li>
                        <li>Fortalece músculos y huesos</li>
                        <li>Aumenta la flexibilidad</li>
                        <li>Mejora la respiración</li>
                        <li>Refuerza el sistema inmunológico y equilibra el sistema nervioso</li>
                        <li>Te ayudará a desconectar</li>
                        <li>Mejora del equilibrio</li>
                        <li>Te hará sentir más feliz</li>
                    </ul>

                    <p>... Y otros muchos beneficios que desde <strong>Akarayoga</strong> te animamos a que los descubras!</p>

                </div>
                <div class="col-lg-6">
                    <img class="img-fluid rounded" src="./fotos/beneficios.png" alt="">
                </div>
            </div>
            <!-- /.row -->

            <hr>

            <!-- Call to Action Section -->

        </div>

    </div>
    </div>
    <!-- /.container -->

    <hr>
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