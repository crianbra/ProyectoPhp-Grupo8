<?php 
session_start();
if($_SESSION['rol']!='admin'){
    header("location: ../../../index.php");
    exit();
     
}
require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/php/categoriaxmateria/CategoriaXMateriaCollector.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/php/categoriaxmateria/CategoriaXMateria.php'; 

 $coll = new CategoriaXMateriaCollector();
if (isset($_GET["id"])) {
    //global $id;
    $obj = $coll->showCategoriaXMateria($_GET["id"]);
   
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
        <!--/.nav-collapse -->
        </div>
    </div>
          <div >

            

            <div id="page-wrapper">
                <div class="container-fluid">

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        
                        <input type="hidden" name="id" value="<?php echo $obj->getIdMateria(); ?>">
                        
                        <div class="form-group">
                            <label for="nombre">ID Categoria Por Materia</label>
                            <label for="nombre"><?php echo $obj->getIdCategoriaMateria(); ?></label>
                            <label for="nombre">Nombre Categoria Por Materia</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $obj->getNombreCategoria(); ?>" placeholder="Nombre">
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
    if ($coll->updateMateria($id,$nombre)) {
        //var_dump($obj);
        header("Location: ../index.php");
        exit();
    } else {
        echo "Hubo un error al intentar actualizar la categoria por materia.";
    }
} else {
    header("Location: ../index.php");
    exit();
}
