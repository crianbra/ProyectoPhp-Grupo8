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


echo "Edicion en proceso..... </br>";

include_once("ContenidoCollector.php");
$ContenidoCollectorObj = new ContenidoCollector();
$ContenidoCollectorObj->deleteContenido($id);

echo "valor id:".htmlspecialchars($id)." se borro " .$id." </br>";

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>

</body>
</html>
