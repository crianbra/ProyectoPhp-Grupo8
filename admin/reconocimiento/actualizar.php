<?php
session_start();
?>

<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Actualizar</title>
</head>
<body>

<div id="main">

<?php

$descripcion= $_POST["descripcion"];
$ayudante_id =($_POST["ayudante_id"]);
$idreconocimiento= $_POST["idreconocimiento"];



echo "Edicion en proceso..... </br>";

include_once("ReconocimientoCollector.php");
$ReconocimientoCollectorObj = new ReconocimientoCollector();
$ReconocimientoCollectorObj->updateReconocimiento($idreconocimiento,$descripcion);
echo "id:".$idreconocimiento." actualizando a:".$nombreusuario." </br>";

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>

</body>
</html>
