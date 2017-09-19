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

$nombre= $_POST["nombre"];
$idcategoria =($_POST["idcategoria"]);

echo "Edicion en proceso..... </br>";

include_once("CxmateriaCollector.php");
$CategoriaCollectorObj = new CxmateriaCollector();
$CategoriaCollectorObj->updateCategoria($idcategoria,$nombre);
echo "id:".$nombre." actualizando a:".$nombre." </br>";

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>

</body>
</html>
