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
$ayudante_id =($_POST["ayudante_id"]);
$alumno_id =($_POST["alumno_id"]);
$categoria_id =($_POST["categoria_id"]);
$idmateria =($_POST["idmateria"]);

echo "Edicion en proceso..... </br>";

include_once("MateriaCollector.php");
$MateriaCollectorObj = new MateriaCollector();
$MateriaCollectorObj->updateMateria($idmateria,$nombre, $ayudante_id,$alumno_id,$categoria_id);
echo "id:".$nombre." actualizando a:".$nombre." </br>";

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>

</body>
</html>
