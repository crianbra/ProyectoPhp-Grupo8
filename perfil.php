<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Educacion Online -User</title>
    <!--  CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/jquery-example.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/personalizado.css" rel="stylesheet">
    <link href="css/starter-template.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="assets/images/logo_navegador.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="assets/css/style.css">
    

</head>


<body>
<!-- Fixed navbar -->
    <div class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right mainNav">
                    <li><a href="index.php">INICIO</a></li>
                    <li><a href="about.php">QUIENES SOMOS</a></li>
                    <li><a href="courses.php">CURSOS</a></li>
                    <li><a href="videos.php">VIDEOS</a></li>
                    <li ><a href="contact.php">CONTÁCTENOS</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                    <li class="active"><a href="perfil.php">PERFIL</a></li>
                </ul>
            </div>
        <!--/.nav-collapse -->
        </div>
    </div>
    <!-- Se configura el menú superior-->
        <!-- Contenido de la página -->
    <div class="container">

        <!-- Encabezado de página / Breadcrumb -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Mis Datos .::.</h1>
                <ol class="breadcrumb">
                    <!--<li><a href="index.php">Inicio</a></li>
                    <li><a href="perfil.php">Perfil de usuario</a></li>-->
                    <li class="active"><a href="ediPerfil.php" >Perfil de usuario</a></li>
                </ol>
            </div>
        </div>
        <!-- Fin Encabezado de página / Breadcrumb -->

        <!-- Contact Form -->
        <!-- Campos del formulario de contacto con validación de campos-->
        <div class="row">
            <!-- Columna de la izquierda -->
        	<div class="col-md-3">
        		<div class="col-md-12" align="center">
        			<img class="img-responsive img-portfolio img-hover" src="img/profile.jpg">
        		</div>
        		<div class="col-md-12">
        			<p class="text-center"><strong>Nombre Apellido</strong></p>
	        		<p class="text-center"><em>Título del perfil de usuario</em></p>
        		</div>

        		<div class="col-md-12 text-center">
    		       <!-- Redes sociales-->
	               <ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="#"><i class="editIcons icon-facebook-square editSizeIcons"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="editIcons icon-linkedin-square editSizeIcons"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="editIcons icon-twitter-square editSizeIcons"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="editIcons icon-google-plus-square editSizeIcons"></i></a>
                        </li>
                    </ul>
                    <!-- Fin redes sociales -->
        		</div>

        		<div class="col-md-12">
        		<!-- Barra vertical de opciones del perfil de usuairo -->
        			<br >
        			<ul class="list-group list-primary">
    			     <a href="#" class="list-group-item">Mi perfil</a>
        			</ul>
    			</div>
                <!-- Fin Barra vertical de opciones del perfil de usuario -->
        	</div>
            <!-- Fin de Columna de la izquierda -->

            <!-- Parte central -->
            <div class="col-md-9">
                <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey;">
                    <h3 style="text-align: center">Mi perfil <p><small>Añade información personal para compartir tu perfil</small></p></h3>
                </div>
                <!-- Se inicia el form (ojo todos los elementos de formulario deben ir dentro de esta etiqueta-->
                <form name="modifyProfile" id="profileForm" novalidate>
                <!-- Inicio del div central parte de formulario información básica -->
                <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey; background: #f1f3f6;">
                	<div class="col-md-8 col-md-offset-2">
    	                
    	                    <div class="control-group form-group">
    	                        <div class="controls">
    	                        	<br >
    	                            <label>Información básica</label>
    	                            <span id="alertNombre" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
    	                            	<input type="text" class="form-control" id="txtNombre" placeholder="Introduzca su nombre" required data-validation-required-message="Por favor introduzca su nomnbre." >
    	                            </span>
    	                            <br >
    	                            <span id="alertCiudad" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
    	                            	<input type="text" class="form-control" id="txtCiudad" placeholder="Introduzca su ciudad" required data-validation-required-message="Por favor introduzca su ciudad.">
    	                            </span>
    	                            <br >
    	                            <span id="alertDireccion" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
    	                            	<input type="text" class="form-control" id="txtDireccion" placeholder="Introduzca su direccion" required data-validation-required-message="Por favor introduzca su direccion.">
    	                            </span>
                                    <br >
                                    <span id="alertEdad" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                        <input type="text" class="form-control" id="txtEdad" placeholder="Introduzca su edad" required data-validation-required-message="Por favor introduzca su edad.">
                                    </span>
                                    <br >
                                    <span id="alertTelefono" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                        <input type="text" class="form-control" id="txtTelefono" placeholder="Introduzca su telefono" required data-validation-required-message="Por favor introduzca su telefono.">
                                    <br >
                                    <span id="alertCorreo" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                        <input type="text" class="form-control" id="txtCorreo" placeholder="Introduzca su correo" required data-validation-required-message="Por favor introduzca su correo.">
                                    </span>
                                    <br >
                                    <span id="alertUsuario" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                        <input type="text" class="form-control" id="txtUsuario" placeholder="Introduzca su usuario" required data-validation-required-message="Por favor introduzca su usuario.">
                                    </span>
                                    <br >
                                    <span id="alertContrasenia" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                        <input type="text" class="form-control" id="txtContrasenia" placeholder="Introduzca su contraseña" required data-validation-required-message="Por favor introduzca su contraseña.">
                                    </span>
    	                            <p class="help-block"></p>
    	                        </div>
    	                    </div>
    	                   
                    </div>
                </div>
                <!-- Fin del div central parte de formulario información básica -->

                <!-- Parte central - enlaces -->
                <div class="col-md-12" style="border: 1px solid lightgrey; background: #e5eaf2;">
                   	<!-- Parte de redes sociales en el alta de perfil -->
                   	<div class="col-md-8 col-md-offset-2">
    	            	<div class="control-group form-group">
                            <div class="controls">
                            	<br >
                                <label>Enlace:</label>
                                <br>
                                <div class="input-group">
                                	<span class="input-group-addon">https://www.facebook.com</span><input type="text" class="form-control" id="txtFacebook" placeholder="Introduzca su usuario de Facebook">
                                </div>
                                <br>
                                 
                            </div>
                        </div>
                    </div>
                    <!-- Fin Parte de redes sociales en el alta de perfil -->
                    
                    <!-- Botones formulario -->
                	<div class="col-md-12 container allFormButtons">
                		<br >
    	               	<div class="col-md-2 col-md-offset-2">
                            <div class="form-group">
    	                	  <button type="button" id="btnCancel" class="btn btn-danger">Cancelar</button>
                            </div>
    		            </div>
    	                <div class="col-md-5 col-md-offset-3">
                            <div class="form-group">
        		               	<button type="button" id="btnClean" class="btn btn-warning">Limpiar</button>
        		              	<button type="submit" id="btnEnviar" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                        &nbsp;
    	            </div>
                   	<!-- Fin botones formulario -->
                </div>
                <!-- Fin Parte central - enlaces -->
            </form>
            <!-- Fin del form -->
            </div>  
            <!-- Fin del div de parte central -->
        </div>
        <!-- Fin Campos del formulario de contacto con validación de campos -->
        &nbsp;
        <hr>

         <!-- Footer -->
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
                                <a href="courses.php">CURSOS</a> |
                                <a href="videos.php">VIDEOS</a> |
                                <a href="contact.php">CONTACTO</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /row of panels -->
            </div>
        </div>
    </footer>
    </div>
   
    <!-- /.container -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="assets/js/google-map.js"></script>
</body>

</html>
