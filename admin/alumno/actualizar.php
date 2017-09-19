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
$usuario_id =($_POST["usuario_id"]);
$idalumno =($_POST["idalumno"]);

echo "Edicion en proceso..... </br>";

include_once("AlumnoCollector.php");
$AlumnoCollectorObj = new AlumnoCollector();
$AlumnoCollectorObj->updateAlumno($idalumno,$description, $usuario_id);
echo "Se Actualizo Correctamente";

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>

</body>
</html>
