<?php 
session_start();
   if($_SESSION["rol"]!="admin"){
    header("location: ../../index.php");
    exit();
}
include_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/php/contenido/ContenidoClass.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/php/contenido/CollectorContenido.php';

 $coll = new ContenidoCollector();
if (isset($_GET["id"])) {
    //global $id;
    $obj = $coll->showContenido($_GET["id"]);
    $id=$obj->getIdContenido();
   
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
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../../../js/jquery-example.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
    <link href="../../../css/personalizado.css" rel="stylesheet">
    <link href="../../../css/starter-template.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="../../../assets/images/logo_navegador.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/css/font-awesome.min.css">
    <!-- Customyles for our template -->
    <link rel="stylesheet" href="../../../assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    </head>
        <body>
<!-- Fixed navbar -->
    <div class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="index.html">
                    <img src="../../../assets/images/logo.png" alt="Techro HTML5 template"></a>
            </div>
            <div class="navbar-collapse collapse">
                      <ul class="nav navbar-nav side-nav">
                          <li >
                <a href="../../../admin/index.php">
                    
                    Menu Administrador</a>
            </li>
            <li >
                <a href="#">
                    
                    Alumnos</a>
            </li>
            <li >
                <a href="#">
                    
                    Usuarios</a>
            </li>
            <li >
                <a href="#">
                    
                    Personas</a>
            </li>
            <li >
                <a href="../../categoriaxmateria/index.php">
                    
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
        <!--/.nav-collapse -->
        </div>
    </div>
          <div >

            

            <div id="page-wrapper">
                <div class="container-fluid">

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        
                        <input type="hidden" name="id" value="<?php echo $obj->getIdContenido(); ?>">
                        
                        <div class="form-group">
                            <label for="nombre">ID Contenido</label>
                            <label for="nombre"><?php echo $obj->getIdContenido(); ?></label>
                            <label for="nombre">Descripcion</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $obj->getDescripcion(); ?>" placeholder="Nombre">
                            <label for="nombre">id Materia</label>
                            <input type="text" class="form-control" id="idmat" name="idmat" value="<?php echo $obj->getMateria(); ?>" placeholder="idmat">
                            

                        </div>
                        <button type="submit" class="btn btn-default">Actualizar</button>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>     
    </body>

    
<?php
} elseif (isset($_POST["id"]) && isset($_POST["nombre"])) {
    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $idc=$_POST["idmat"];
  
    if ($coll->updateContenido($id,$nombre,$idc)) {
        //var_dump($obj);
        header("Location: ../index.php");
        exit();
    } else {
        echo "Hubo un error al intentar actualizar la contenido por materia.";
    }
} else {
    header("Location: ../index.php");
    exit();
}
