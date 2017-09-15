<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/php/materia/CollectorMateria.php';

$coll = new MateriaCollector();
if (isset($_GET["id"])) {
    $obj = $coll->deleteMateria($_GET["id"]);
    //header("Location: ../index.php");
    //exit();
} else {
    //header("Location: ../index.php");
    //exit();
}