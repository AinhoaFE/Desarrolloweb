<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Akarayoga">
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



    <!-- Agregamos fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Lato:900|Merriweather&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Signika&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Oswald:500&display=swap" rel="stylesheet">

    <!-- Agregamos icono del navegador -->
    <link rel="shortcut icon" href="fotos/icono.png" />

</head>

<body class="body-registro-personalizado">

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
                        <a class="nav-link letra " href="contact.php">Contacto</a>
                    </li>

                    <li>
                        <a class="nav-link letra active" href="login.php">Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Registrate en Akarayoga
            <small>Podrás disfrutar de numerosas ventajas</small>
        </h1>

        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">

                <form id="frmRegistro" action="_altaUsuario.php" methot="POST" onsubmit="return validarFormularioRegistro()">
                    
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

                        <label for="fecha-nacimiento">Fecha de nacimiento</label>
                        <input type="date" id="fecha-nacimiento"  class="form-control" name="fecha-nacimiento"">

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

                        <label for="contrasena">Contraseña</label>
                        <input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="Contraseña">
       
                        </div>
                    </div>
                        

                    <div class="control-group form-group">
                        <div class="controls">  

                        <label for="contrasena-check">Por favor, vuelva a introducir su contraseña</label>
                        <input type="password" id="contrasena-check" name="contrasena-check" class="form-control" placeholder="Contraseña">
                        

                        </div>
                    </div>


                    <div class="control-group form-group">
                        <div class="controls">

                            <label>Cuentanos algo sobre ti:</label>
                            <textarea rows="5" cols="100" class="form-control" id="mensaje" name="mensaje" style="resize:none"></textarea>
                        </div>
                    </div>
                    
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>

                    <a class="d-block small mt-3" href="login.php">Volver al inicio de sesión</a>
                    <hr>
                </form>
            
                <hr>
                <hr>

            </div>
            <hr>


        </div>
        <!-- /.row -->

    </div>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Universidad Europea de Madrid - Asignatura: Desarrollo web y de apps - Realizada por: Ainhoa Fernandez & Sergio Benavente</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="akarayoga.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>