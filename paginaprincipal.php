
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Acceso privado | Akarayoga</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<!--<script src="js/valida.js"></script>-->
	

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header>
  <div class="row">

         <div class="twelve columns">

            <div class="logo">
               <a href="index.html"><img alt="" src="images/Akarayoga_LOGO.png" width="50" height="50"></a>
            </div>

            <nav id="nav-wrap">

               <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	            <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

               <ul id="nav" class="nav">

	               <li class="current"><a href="paginaprincipal.php">HOME</a></li>
	              
                  <li><span><a href="publicar.html">PUBLICAR</a></span>
                     <ul>
                        <li><a href="post.html">POST</a></li>
                        <li><a href="noticia.html">NOTICIA</a></li>
                     </ul>
                  </li>
	               <li><a href="mensajes.php">MENSAJES RECIBIDOS</a></li>
                 <!-- <li><a href="contact.html">CONTACTO</a></li>-->
                  <!--<li><a href="styles.html">Features</a></li>-->
				<!--   <li><span><a href="blog.html">BLOG</a></span>-->
				   
                 
                  </li>

               </ul> <!-- end #nav -->

            </nav> <!-- end #nav-wrap -->

         </div>

      </div>


   </header> <!-- Header End -->

   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">

<!--Crea la sesión del usuario que se ha logado-->
		 <?php

session_start();
$usuario = $_SESSION['username'];

echo "<h1>Bienvenido al acceso privado $usuario</h1>";

?>
         
         </div>

      </div>

   </div> <!-- Page Title End-->

   
</body>

</html>