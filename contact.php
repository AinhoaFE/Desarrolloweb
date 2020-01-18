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
                        <a class="nav-link letra" href="services.php">Clases</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link letra active" href="contact.php">Contacto</a>
                    </li>

                    <?php if ($autorizado == true) { 
                            
                        //introducimos html despues de estas llaves?>
                        <a class="nav-link letra" href="perfilUsuario.php"><?php echo $nombreUsuario?></a>

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
        <h1 class="mt-4 mb-3">Contacto con Akara
            <small>No dudes en trasladarme cualquier inquietud</small>
        </h1>



        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-lg-8 mb-4">
                <!-- Embedded Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d70728.69676599372!2d-3.709371029534449!3d40.43518683944868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1578746800073!5m2!1ses!2ses" width="700" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
               
               </div>
            <!-- Contact Details Column -->
            <div class="col-lg-4 mb-4">
                <h3>Detalles de contacto</h3>
                <p>Madrid
                    <br>Comunidad de Madrid<br>
                </p>
                <p>
                    <abbr title="Phone">Teléfono:</abbr> 600102030</p>
                <p>
                    <abbr title="Email">Email: </abbr><a class="enlaces" href="mailto:help@akara.com">help@akara.com</a>
                </p>
                <p>
                    <abbr title="Hours">Horario: </abbr>: Todos los días de la semana - 7:00 - 22:00 </p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-lg-8 mb-4">
                <h3>¡ Envíanos un mensaje !</h3>
                <p>En Akarayoga nuestra prioridad son las personas. Por eso nos pondremos en contacto contigo a la mayor brevedad porsible.</p>
               
               
               
                <form id="frmContacto" action="_guardarContacto.php" onsubmit="return validarFormularioContacto()">
                    
                    <div class="control-group form-group">
                        <div class="controls">
                            
                        <label for="nombre">Nombre </label>
                        <input type="text" id=nombre name="nombre" class="form-control" placeholder="Escriba aquí su nombre">

                            <p class="help-block"></p>
                        </div>
                    </div>



                    <div class="control-group form-group">
                        <div class="controls">
                            
                        <label for="apellidos">Apellidos </label>
                        <input type="text" id=apellidos  name="apellidos" class="form-control" placeholder="Escriba aquí sus apellidos">

      
                        <p class="help-block"></p>
                        </div>
                    </div>


                    <div class="control-group form-group">
                        <div class="controls">
                            
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="mail@dominio.com">

                        </div>
                    </div>


                    <div class="control-group form-group">
                        <div class="controls">
                            
                    
                        <label for="telefono">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Numero telefonico (Introducir solo numeros)">
    

                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls">
                            
                            <label>Mensaje:</label>
                            <textarea rows="10" name="mensaje" cols="100" class="form-control" id="mensaje" style="resize:none"></textarea>
                        
                        </div>
                    </div>


                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" value="Enviar" class="btn btn-primary">Enviar</button>

                </form>




                <hr>
                <hr>
            </div>
            <hr>


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

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="akarayoga.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>