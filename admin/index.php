<?php
//$cu = new usuarioColector();
//$usuario = AutenticarClass::verUsuarioConectado($cu, $_SESSION);
session_start();
if($_SESSION["mySesion"]!="admin"){
    header("location: ../../index.php");
    exit();
}

    ?>
<!-- Navigation -->
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Educacion Online -User</title>
    <!--  CSS de Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../js/jquery-example.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link href="../css/personalizado.css" rel="stylesheet">
    <link href="../css/starter-template.css" rel="stylesheet">

    <link rel="icon" type="../image/png" href="../assets/images/logo_navegador.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="free-educational-responsive-web-template-webEdu">
    <meta name="author" content="webThemez.com">
    <title>Educación Online</title>
    <link rel="icon" type="image/png" href="../../assets/images/logo_navegador.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='../assets/css/camera.css' type='text/css' media='all'>
</head>
</head>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        
        <a class="navbar-brand" href="sitioweb/index.php">
                    <img src="../assets/images/logo.png" alt="Techro HTML5 template"></a>
            
    </div>
    <!-- Top Menu Items -->

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
                   <ul class="nav navbar-nav side-nav">
            <li >
                <a href="alumno/index.php">
                    
                    Alumnos</a>
            </li>
            <li >
                <a href="usuario/index.php">
                    
                    Usuarios</a>
            </li>
            <li >
                <a href="persona/index.php">
                    
                    Personas</a>
            </li>
            <li >
                
                    <a href="catxmateria/index.php">
                    Categoria Por Materias</a>
            </li>
          
                    <li >
                <a href="ayudante/index.php">
                    
                    Ayudantes</a>
            </li>
                     <li >
                <a href="materia/index.php">
                   
                    Materias</a>
                          </li>
            <li >
                <a href="contenido/index.php">
                    
                    Contenido</a>
            </li>
             <li >
                <a href="reconocimiento/index.php">
                    
                    Reconocimiento</a>
            </li>
            <li >
                <a href="contactenos/index.php">
                    
                    Contactenos</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
<body>
        <header id="head">
        <div class="container">
             <div class="heading-text">
                            <h1 class="animated flipInY delay1">Comienza Tu Educación En Línea</h1>
                            <p>Realiza tu voluntariado o capacitate con los mejores.</p>
                            <p> Tu oportunidad de ingresar a una universidad empieza ahora.</p>
                        </div>

                    <div class="fluid_container">
                    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                        <div data-thumb="../assets/images/slides/thumbs/img1.jpg" data-src="../assets/images/slides/img1.jpg">
                            <h2>We develop.</h2>
                        </div>
                        <div data-thumb="../assets/images/slides/thumbs/img2.jpg" data-src="../assets/images/slides/img2.jpg">
                        </div>
                        <div data-thumb="../assets/images/slides/thumbs/img3.jpg" data-src="../assets/images/slides/img3.jpg">
                        </div>
                    </div><!-- #camera_wrap_3 -->
                </div><!-- .fluid_container -->
        </div>
    </header>
     <footer id="footer">
        <div class="container">
   <div class="row">
  <div class="footerbottom">
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          CATEGORIA DE LOS CURSOS
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="#">
                Matematicas
              </a>
            </li>
            <li><a href="#">
                Matemática y lenguaje
              </a>
            </li>
            <li><a href="#">
                Ciencia y Sociales
              </a>
            </li>
            <li><a href="#">
               Matemática y Lenguaje Resuelta
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
                <div class="footerwidget">
                         <h4>CONTACTO</h4>
                        <p>Nuestra oficinas estan ubicadas.</p>
            <div class="contact-info">
            <i class="fa fa-map-marker"></i> Espol-Edcom, Guayaquil<br>
            <i class="fa fa-phone"></i>+593990000000 <br>
             <i class="fa fa-envelope-o"></i> nfo@educaciononline.com
              </div>
                </div><!-- end widget -->
    </div>
  </div>
</div>
            <div class="social text-center">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/Educaci%C3%B3n-Online-1051002865029799/" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://github.com/crianbra/ProyectoPhp-Grupo8" target="_blank"><i class="fa fa-github"></i></a>
            </div>
        <div class="clear"></div>
            <!--CLEAR FLOATS-->
        </div>
        <div class="footer2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 panel">
                        <div class="panel-body">
                            <p class="simplenav">
                                <a href="index.php">INICIO</a> |
                                <a href="about.php">QUIENES SOMOS</a> |
                                <a href="courses.php">CURSOS</a> |
                                <a href="videos.php">VIDEOS</a> | 
                                <a href="contact.php">Contáctenos</a> |
                                <a href="perfil.php">PERFIL</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /row of panels -->
            </div>
        </div>
    </footer>

    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="../assets/js/modernizr-latest.js"></script>
    <script type='text/javascript' src='../assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='../assets/js/fancybox/jquery.fancybox.pack.js'></script>

    <script type='text/javascript' src='../assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='../assets/js/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='../assets/js/camera.min.js'></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script>
        jQuery(function(){

            jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
                height: '600',
                loader: 'false',
                pagination: true,
                thumbnails: false,
                hover: false,
                playPause: false,
                navigation: false,
                opacityOnGrid: false,
                imagePath: '../../assets/images/'
            });

        });

    </script>


</body>
</html>