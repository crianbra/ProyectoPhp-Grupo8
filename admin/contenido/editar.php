<?php 
session_start();

require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/admin/contenido/ContenidoCollector.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/admin/contenido/Contenido.php';    



$id = $_GET["id"];
//echo "valor de id es ". $id;
include_once("ContenidoCollector.php");
include_once("Contenido.php");
$ContenidoCollectorObj = new ContenidoCollector();
$ObjContenido = $ContenidoCollectorObj->showContenido($id);


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
                <a class="navbar-brand" href="../index.php">
                    <img src="../../assets/images/logo.png" alt="Techro HTML5 template"></a>
            </div>
             <div class="collapse navbar-collapse navbar-ex1-collapse">
                   <ul class="nav navbar-nav side-nav">
           <li >
                <h2><a href="index.php">
                    
                    .:. Contenido .:.</a></h2>
            </li>
        </ul>
    </div>
        <!--/.nav-collapse -->
        </div>
    </div>

        <div id="wrapper">

            
            <div id="page-wrapper">
                <div class="container-fluid">

                    <form action="actualizar.php" method="post">

                       <div class="form-group">
                            <label for="idcontenido">Id </label>
                            <input type="text" class="form-control" id="idcontenido" name="idcontenido" value="<?php echo $ObjContenido->getIdContenido(); ?>" placeholder="Id Contenido" rows="6" readonly>
                        </div>
                        <div class="form-group">
                            <label for="description">Descripcion</label>
                            <input type="text" class="form-control" id="description" name="description" value="<?php echo $ObjContenido->getDescripcion(); ?>" placeholder="Descripcion" rows="6">
                        </div>
                        <div class="form-group">
                            <label for="materia_id">ID Materia</label>
                            <input type="text"class='form-control' id="materia_id" name="materia_id" value="<?php echo $ObjContenido->getMateria_id(); ?>"  placeholder="ID Materia" rows="6" >
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