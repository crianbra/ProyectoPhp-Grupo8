<?php
session_start();
?>

<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Eliminar</title>
</head>
<body>

<div id="main">

<?php
$id=$_GET["id"];
$descripcion = $_POST["descripcion"];
$ayudante_id =($_POST["ayudante_id"]);

echo "Edicion en proceso..... </br>";

include_once("ReconocimientoCollector.php");
$ReconocimientoCollectorObj = new ReconocimientoCollector();
$ReconocimientoCollectorObj->deleteReconocimiento($id);

echo "valor id:".htmlspecialchars($id)." se borro " .$nombreusuario." </br>";

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>

</body>
</html>
