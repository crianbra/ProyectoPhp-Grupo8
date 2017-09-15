<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/php/materia/CollectorMateria.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/php/materia/MateriaClass.php';    

 $coll = new MateriaCollector();
if (isset($_GET["id"])) {
    //global $id;
    $obj = $coll->showMateria($_GET["id"]);
    $id=$obj->getIdMateria();
   
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
                <a href="../index.php">
                   
                    Materias</a>
                          </li>
            <li >
                <a href="../../contenido/index.php">
                    
                    Contenido</a>
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
                            <label for="nombre">ID Materia</label>
                            <label for="nombre"><?php echo $obj->getIdMateria(); ?></label>
                            <label for="nombre">Nombre Materia</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $obj->getNombreMateria(); ?>" placeholder="Nombre">
                            <label for="nombre">id Categoria</label>
                            <input type="text" class="form-control" id="idcat" name="idcat" value="<?php echo $obj->getIdCategoriaXMateria(); ?>" placeholder="idcat">
                            <label for="nombre">id Ayudante</label>
                            <input type="text" class="form-control" id="idayu" name="idayu" value="<?php echo $obj->getAyudante(); ?>" placeholder="ayu">
                             <label for="nombre">id Alumno</label>
                            <input type="text" class="form-control" id="idalu" name="idalu" value="<?php echo $obj->getAlumno(); ?>" placeholder="idcat">

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
    $idc=$_POST["idcat"];
    $iday=$_POST["idayu"];
    $idal=$_POST["idalu"];
  
    if ($coll->updateMateria($id,$nombre,$idc,$iday,$idal)) {
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
