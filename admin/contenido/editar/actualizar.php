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
$materia_id =($_POST["materia_id"]);
$idcontenido= $_POST["idcontenido"];



echo "Edicion en proceso..... </br>";

include_once("../CollectorContenido.php");
$CollectorContenidoObj = new CollectorContenido();
$CollectorContenidoObj->updateUsuario($idcontenido,$descripcion, $materia_id);
//echo "id:".$idusuario." actualizando a:".$nombreusuario." </br>";

?>

<div><a href="../index.php">Volver al Inicio</a></div>
</div>

</body>
</html>
