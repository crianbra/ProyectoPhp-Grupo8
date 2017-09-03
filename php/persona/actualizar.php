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
$id_demo= $_POST["id_demo"];

echo "Edicion en proceso..... </br>";

include_once("PersonaoCollector.php");
$PersonaCollectorObj = new DemoCollector();
$PersonaCollectorObj->updatePersona($id,$nombre, $ciudad, $direccion, $edad, $telefono, $correo, $facebook);

echo "id:".$id." actualizando a:".$nombre." </br>";

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>

</body>
</html>
