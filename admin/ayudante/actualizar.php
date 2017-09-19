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
$usuario_id =($_POST["usuario_id"]);
$reconocimiento_id =($_POST["reconocimiento_id"]);
$idayudante =($_POST["idayudante"]);

echo "Edicion en proceso..... </br>";

include_once("AyudanteCollector.php");
$AyudanteCollectorObj = new AyudanteCollector();
$AyudanteCollectorObj->updateAyudante($idayudante,$descripcion, $usuario_id,$reconocimiento_id);
echo "Se Actualizo Correctamente";

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>

</body>
</html>
