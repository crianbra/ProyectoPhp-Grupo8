<?php 
session_start();
   



$id = $_GET["id"];
//echo "valor de id es ". $id;
include_once("PersonaCollector.php");
include_once("Persona.php");
$PersonaCollectorObj = new PersonaCollector();
$ObjPersona = $PersonaCollectorObj->showPersona($id);


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
                    
                    .:. Persona .:.</a></h2>
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
                            <label for="idpersona">Id Persona</label>
                            <input type="text" class="form-control" id="idpersona" name="idpersona" value="<?php echo $ObjPersona->getIdpersona(); ?>" placeholder="Id Persona" rows="6" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $ObjPersona->getNombre(); ?>" placeholder="Nombre" rows="6">
                        </div>
                        <div class="form-group">
                            <label for="ciudad">Ciudad</label>
                            <input type="text"class='form-control' id="ciudad" name="ciudad" value="<?php echo $ObjPersona->getCiudad(); ?>"  placeholder="Ciudad" rows="6">
                        </div>
                        <div class="form-group">
                            <label for="direccion">Direccion</label>
                            <input type="text"class='form-control' id="direccion" name="direccion" value="<?php echo $ObjPersona->getDireccion(); ?>" placeholder="Direccion" rows="6">
                        </div>
                        <div class="form-group">
                            <label for="edad">Edad</label>
                            <input type="text"class='form-control' id="edad" name="edad" value="<?php echo $ObjPersona->getEdad(); ?>" placeholder="Edad" rows="6">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text"class='form-control' id="telefono" name="telefono" value="<?php echo $ObjPersona->getTelefono(); ?>" placeholder="Telefono" rows="6">
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="text"class='form-control' id="correo" name="correo" value="<?php echo $ObjPersona->getCorreo(); ?>" placeholder="Correo" rows="6">
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text"class='form-control' id="facebook" name="facebook" value="<?php echo $ObjPersona->getFacebook(); ?>" placeholder="Facebook" rows="6">
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