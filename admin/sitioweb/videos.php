<?php

session_start();

/*if($_SESSION["rol"]!="admin"){
    header("location: ../index.php");
    exit();
}*/

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>Video - Educación Online</title>
	<link rel="icon" type="image/png" href="../../assets/images/logo_navegador.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../../assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="../../assets/css/isotope.css" media="screen" />
	<link rel="stylesheet" href="../../assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="../../assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.php">
					<img src="../../assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="about.php">Quiénes Somos</a></li>
					<li><a href="courses.php">Cursos</a></li>
					<li class="active"><a href="videos.php">Videos</a></li>
					<li><a href="contact.php">Contáctenos</a></li>
					<?php 
                    if($_SESSION{'rol'}=='admin'){
                        ?>
                     <li><a href="../index.php">Administrar</a></li>

                    <?php
                       
                    }
                        ?>
                    <!--<li><a href="login.php">LOGIN</a></li>
                    <li ><a href="perfil.php">PERFIL</a></li>-->
                    <li><a href="../../index.php">SALIR</a></li>


				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Videos en Línea</h1>
                    <p>Una manera mas fácil de capacitarte con nosotros.</p>
                </div>
    </header>


	<!-- container -->
	<section class="container">
		<div class="row">
			<div class="col-md-12">
				<section id="portfolio" class="page-section section appear clearfix">
					<br />
					<br />
					<p>
						El vídeo es una magnífica herramienta que ayuda al proceso de aprendizaje al ser divertida y llamativa. Se prevé que el 98% de las organizaciones utilizará el vídeo en el 2018 en sus estrategias de aprendizaje digitales.
						<br />
						<br />
					</p>


					<div class="row">
						<!--<nav id="filter" class="col-md-12 text-center">
							<ul>
								<li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
								<li><a href="#" class="btn-theme btn-small" data-filter=".webdesign">Development</a></li>
								<li><a href="#" class="btn-theme btn-small" data-filter=".photography">Designing</a></li>
								<li><a href="#" class="btn-theme btn-small" data-filter=".print">Tools</a></li>
							</ul>
						</nav>-->
						<div class="col-md-12">
							<div class="row">
								<div class="portfolio-items isotopeWrapper clearfix" id="3">

									<article class="col-sm-4 isotopeItem webdesign">
										<div class="portfolio-item">
											<img src="../../assets/images/portfolio/img1.jpg" alt="" />
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<a href="../../assets/images/portfolio/img1.jpg" class="fancybox">
														<h5>Project Title</h5>
														<i class="fa fa-link fa-2x"></i></a>
												</div>
											</div>
										</div>
									</article>

									<article class="col-sm-4 isotopeItem photography">
										<div class="portfolio-item">
											<img src="../../assets/images/portfolio/img2.jpg" alt="" />
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<a href="../../assets/images/portfolio/img2.jpg" class="fancybox">
														<h5>Project Title</h5>
														<i class="fa fa-link fa-2x"></i></a>
												</div>
											</div>
										</div>
									</article>


									<article class="col-sm-4 isotopeItem photography">
										<div class="portfolio-item">
											<img src="../../assets/images/portfolio/img3.jpg" alt="" />
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<a href="../../assets/images/portfolio/img3.jpg" class="fancybox">
														<h5>Project Title</h5>
														<i class="fa fa-link fa-2x"></i></a>
												</div>
											</div>
										</div>
									</article>

									<article class="col-sm-4 isotopeItem print">
										<div class="portfolio-item">
											<img src="../../assets/images/portfolio/img4.jpg" alt="" />
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<a href="../../assets/images/portfolio/img4.jpg" class="fancybox">
														<h5>Project Title</h5>
														<i class="fa fa-link fa-2x"></i></a>
												</div>
											</div>
										</div>
									</article>

									<article class="col-sm-4 isotopeItem photography">
										<div class="portfolio-item">
											<img src="../../assets/images/portfolio/img5.jpg" alt="" />
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<a href="../../assets/images/portfolio/img5.jpg" class="fancybox">
														<h5>Project Title</h5>
														<i class="fa fa-link fa-2x"></i></a>
												</div>
											</div>
										</div>
									</article>

									<article class="col-sm-4 isotopeItem webdesign">
										<div class="portfolio-item">
											<img src="../../assets/images/portfolio/img6.jpg" alt="" />
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<a href="../../assets/images/portfolio/img6.jpg" class="fancybox">
														<h5>Project Title</h5>
														<i class="fa fa-link fa-2x"></i></a>
												</div>
											</div>
										</div>
									</article>

									<article class="col-sm-4 isotopeItem print">
										<div class="portfolio-item">
											<img src="../../assets/images/portfolio/img7.jpg" alt="" />
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<a href="../../images/portfolio/img7.jpg" class="fancybox">
														<h5>Project Title</h5>
														<i class="fa fa-link fa-2x"></i></a>
												</div>
											</div>
										</div>
									</article>

									<article class="col-sm-4 isotopeItem photography">
										<div class="portfolio-item">
											<img src="../../assets/images/portfolio/img8.jpg" alt="" />
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<a href="../../images/portfolio/img8.jpg" class="fancybox">
														<h5>Project Title</h5>
														<i class="fa fa-link fa-2x"></i></a>
												</div>
											</div>
										</div>
									</article>

									<article class="col-sm-4 isotopeItem print">
										<div class="portfolio-item">
											<img src="../../assets/images/portfolio/img9.jpg" alt="" />
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<a href="../../images/portfolio/img9.jpg" class="fancybox">
														<h5>Project Title</h5>
														<i class="fa fa-link fa-2x"></i></a>
												</div>
											</div>
										</div>
									</article>
								</div>

							</div>


						</div>
					</div>

				</section>
			</div>
		</div>

	</section>
	<!-- /container -->
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
				<a href="https://www.facebook.com/Educaci%C3%B3n-Online-1051002865029799/"><i class="fa fa-facebook"></i></a>
				<a href="https://github.com/crianbra/ProyectoPhp-Grupo8"><i class="fa fa-github"></i></a>
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
								<a href="contact.php">CONTÁCTENOS</a> |
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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="../../assets/js/jquery.cslider.js"></script>
	<script src="../../assets/js/jquery.isotope.min.js"></script>
	<script src="../../assets/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="../../assets/js/custom.js"></script>

</body>
</html>
