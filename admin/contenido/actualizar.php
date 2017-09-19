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

$description= $_POST["description"];
$materia_id =($_POST["materia_id"]);
$idcontenido =($_POST["idcontenido"]);

echo "Edicion en proceso..... </br>";

include_once("ContenidoCollector.php");
$ContenidoCollectorObj = new ContenidoCollector();
$ContenidoCollectorObj->updateContenido($idcontenido,$description, $materia_id);
//echo "id:".$description." actualizando a:".$description." </br>";

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>

</body>
</html>
