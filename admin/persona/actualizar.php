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

$nombre = $_POST["nombre"];
$ciudad =($_POST["ciudad"]);
$direccion =($_POST["direccion"]);
$edad =($_POST["edad"]);
$telefono =($_POST["telefono"]);
$correo =($_POST["correo"]);
$facebook =($_POST["facebook"]);
$idpersona= $_POST["idpersona"];

echo "Edicion en proceso..... </br>";

include_once("PersonaCollector.php");
$PersonaCollectorObj = new PersonaCollector();
$PersonaCollectorObj->updatePersona($idpersona,$nombre, $ciudad, $direccion, $edad, $telefono, $correo, $facebook);

echo "id:".$idpersona." actualizando a:".$nombre." </br>";

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>

</body>
</html>
