<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/php/categoriaxmateria/CategoriaXMateriaCollector.php';

$coll = new CategoriaXMateriaCollector();
if (isset($_GET["id"])) {
    echo $_GET["id"];
    $obj = $coll->deleteCategoriaXMateria($_GET["id"]);
    header("Location: ../index.php");
    exit();
} else {
    header("Location: ../index.php");
    exit();
}