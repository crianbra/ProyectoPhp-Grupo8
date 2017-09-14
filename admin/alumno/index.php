<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';
use mas_acceso\edificio\categoria\CategoriaCollector;
use mas_acceso\edificio\categoria\CategoriaClass;
$colector= new CategoriaCollector();
?>
<!DOCTYPE html>
<html lang='es'>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name="copyright" content="+Acceso">
        <!--Nombre de la compañia-->
        <meta name="organization" content="+Acceso"/>
        <!--Nombre de la Organizacion-->
        <meta name="generator" content="Notepad++">
        <!--Cual es la herramienta que se utiliza para editar, crear la pagina web-->
        <meta name="name" content="Admin - Lugares">
        <meta name="description" content="Pagina de inicio de administración de lugares.">
        <meta name="author" content="Guillermo Bernal">
        <!-- http://getbootstrap.com/css/#overview-mobile -->
        <meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=no'>
        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
        <title>+Acceso</title>
        <!-- http://getbootstrap.com/getting-started/ -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

        <link rel="stylesheet" href="/admin/css/sb-admin.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    </head>

    <body>

        <div id="wrapper">

            <?php include $_SERVER['DOCUMENT_ROOT'].'/admin/partes/menu.php'; ?>

            <div id="page-wrapper">

                <div class="container-fluid">
                  <div class="col-lg-6">
                      <h2>Categorias</h2>
                      <div class="table-responsive">
                          <table class="table table-hover">
                              <thead>
                                  <tr>
                                      <th>ID</th>
                                      <th>NOMBRE</th>
                                      <th>DESCRIPCION</th>
                                  </tr>
                              </thead>
                              <tbody>

          <?php

            foreach ($colector->readAllCategoria() as $datos) {
                ?>

                     <tr>
                      <td> <?php echo $datos->getId(); ?> </td>
                       <td> <?php echo $datos->getNombre(); ?> </td>
                       <td> <?php echo $datos->getDescripcion(); ?> </td>
			                 <td><a href="/admin/categoria/editar/?id=<?php echo $datos->getId();?>"> Editar</a>  </td>
                       <td><a href="/admin/categoria/borrar/?id=<?php echo $datos->getId();?>"> Eliminar</a>  </td>
                     </tr>
                   <?php
            }
            ?>
            <tr>
              <td><a href="/admin/categoria/agregar/"> Agregar</a>  </td>
            </tr>
          </tbody>
          </table>
          </div>
          </div>

          </div>
          <!-- /.container-fluid -->

          </div>
          <!-- /#page-wrapper -->

          </div>
          <!-- /#wrapper -->

          <!-- Morris Charts JavaScript -->
          <script src="/admin/js/plugins/morris/raphael.min.js"></script>
          <script src="/admin/js/plugins/morris/morris.min.js"></script>
          <script src="/admin/js/plugins/morris/morris-data.js"></script>

          </html>
