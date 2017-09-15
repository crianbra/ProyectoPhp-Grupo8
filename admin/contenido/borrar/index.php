<?php
session_start();
   if($_SESSION["rol"]!="admin"){
    header("location: ../../index.php");
    exit();
   }
include_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/admin/contenido/CollectorContenido.php';

$coll = new ContenidoCollector();
if (isset($_GET["id"])) {
    echo $_GET["id"];
    $obj = $coll->deleteContenido($_GET["id"]);
    header("Location: ../index.php");
    exit();
} else {
    header("Location: ../index.php");
    exit();
}