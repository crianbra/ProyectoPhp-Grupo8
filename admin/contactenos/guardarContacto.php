<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>Educación Online</title>
	<link rel="icon" type="image/png" href="../../assets/images/logo_navegador.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../../assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="../index.php">
					<img src="../../assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li><a href="../../index.php">INICIO</a></li>
					<li ><a href="../../about.php">QUIENES SOMOS</a></li>
					<!--<li><a href="courses.php">CURSOS</a></li>-->
					<!--<li><a href="videos.php">VIDEOS</a></li>-->
					<li class="active"><a href="contact.php">Contáctenos</a></li>
                    <li><a href="../../login.php">LOGIN</a></li>-
                    <!--<<li ><a href="perfil.php">PERFIL</a></li>-->
                    <!--<li ><a href="../../index.php">SALIR</a></li>-->

				</ul>
			</div>
		<!--/.nav-collapse -->
		</div>
	</div>
<div id="main">

<?php
$valor = $_POST["nombre"];
$valor2 = $_POST["email"];
$valor3 = $_POST["telefono"];
$valor4 = $_POST["asunto"];
$valor5 = $_POST["mensaje"];


include_once("ContectenosCollector.php");

$DemoCollectorObj = new ContectenosCollector();
$ObjDemo = $DemoCollectorObj->createDemo($valor,$valor2,$valor3,$valor4,$valor5);


?>
<h2>SE ENVIO SU MENSAJE EXITOSAMENTE !!</h2>
<h1><a href="../../index.php">Volver al Inicio</a></h1>
</div>

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
            <li><a href=" https://drive.google.com/file/d/0B048WkRgr8JQbC1YZ0xLU2tFdW8/view" target="_blank">
                Matematicas (Revisar)
              </a>
            </li>
            <li><a href="https://drive.google.com/file/d/0B048WkRgr8JQRnN4MmxGdFBYR00/view" target="_blank">
                Matemática y lenguaje (Revisar)
              </a>
            </li>
            <li><a href="https://drive.google.com/file/d/0B048WkRgr8JQQ3AwRW9GTGZLWVk/view" target="_blank">
                Ciencia y Sociales (Revisar)
              </a>
            </li>
            <li><a href="https://drive.google.com/file/d/0B048WkRgr8JQdWRQSW5BRk15VGc/view" target="_blank">
               Matemática y Lenguaje Resuelta (Revisar)
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
								<!--<a href="courses.php">CURSOS</a> |-->
								<!--<a href="videos.php">VIDEOS</a> |-->
								<a href="contact.php">CONTÁCTENOS</a>
								<!--<a href="perfil.php">PERFIL</a>-->
							</p>
						</div>
					</div>
				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="../../assets/js/custom.js"></script>
	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="../../assets/js/google-map.js"></script>
</body>
</html>
