<?php 
session_start();

require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/admin/ayudante/AyudanteCollector.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/admin/ayudante/Ayudante.php';    



$id = $_GET["id"];
<<<<<<< HEAD
//echo "valor de id es ". $id;
=======
echo "valor de id es ". $id;
>>>>>>> b49817fc5ebe00ed93cca35a197f78273adb57a0
include_once("AyudanteCollector.php");
include_once("Ayudante.php");
$AyudanteCollectorObj = new AyudanteCollector();
$ObjAyudante = $AyudanteCollectorObj->showAyudante($id);


?>
<html lang='es'>
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Educacion Online -User</title>
    <!--  CSS de Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../../js/jquery-example.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <link href="../../css/personalizado.css" rel="stylesheet">
    <link href="../../css/starter-template.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="../../assets/images/logo_navegador.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
    <!-- Customyles for our template -->
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
<<<<<<< HEAD
                <a class="navbar-brand" href="index.php">
                    <img src="../../assets/images/logo.png" alt="Techro HTML5 template"></a>
            </div>
             <div class="collapse navbar-collapse navbar-ex1-collapse">
                   <ul class="nav navbar-nav side-nav">
            <li >
                <h2><a href="index.php">
                    
                    .:. Ayudante .:.</a></h2>
            </li>
        </ul>
    </div>
=======
                <a class="navbar-brand" href="index.html">
                    <img src="../../assets/images/logo.png" alt="Techro HTML5 template"></a>
            </div>
            <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav side-nav">
            <li >
                <a href="#">
                    
                    Alumnos</a>
            </li>
            <li >
                <a href="#">
                    
                    Usuarios</a>
            </li>
            <li >
                <a href="index.php">
                    
                    Personas</a>
            </li>
            <li >
                <a href="#">
                    
                    Categoria Por Materias</a>
            </li>
            <li >
                <a href="#">
                   
                    Cursos</a>
            </li>
            <li >
                <a href="#">
             
                    Perfil</a>
            </li>
            <li >
                <a href="#">
                    
                    Ayudantes</a>
            </li>
                     <li >
                <a href="#">
                   
                    Materias</a>
                          </li>
            <li >
                <a href="#">
                    
                    Alumnos Por Materias</a>
            </li>
            <li >
                <a href="#">
                    
                    Contactenos</a>
            </li>
        </ul>
            </div>
>>>>>>> b49817fc5ebe00ed93cca35a197f78273adb57a0
        <!--/.nav-collapse -->
        </div>
    </div>

        <div id="wrapper">

            
            <div id="page-wrapper">
                <div class="container-fluid">

                    <form action="actualizar.php" method="post">

                       <div class="form-group">
                            <label for="idayudante">Id </label>
                            <input type="text" class="form-control" id="idayudante" name="idayudante" value="<?php echo $ObjAyudante->getIdAyudante(); ?>" placeholder="Id Ayudante" rows="6" readonly>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $ObjAyudante->getDescripcion(); ?>" placeholder="Descripcion" rows="6">
                        </div>
                        <div class="form-group">
                            <label for="usuario_id">ID USUARIO</label>
                            <input type="text"class='form-control' id="usuario_id" name="usuario_id" value="<?php echo $ObjAyudante->getUsuario_id(); ?>"  placeholder="ID USUARIO" rows="6" >
                        </div>
                        <div class="form-group">
                            <label for="reconocimiento_id">ID RECOCOMIENTO</label>
                            <input type="text"class='form-control' id="reconocimiento_id" name="reconocimiento_id" value="<?php echo $ObjAyudante->getReconocimiento_id(); ?>"  placeholder="ID RECOCOMIENTO" rows="6" >
                        </div>
                        
                        <button type="submit" class="btn btn-default">Actualizar</button>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
    </body>
    </html>