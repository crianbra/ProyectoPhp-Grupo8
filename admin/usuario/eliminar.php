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
$nombre = $_POST["nombre"];
$ciudad =($_POST["ciudad"]);
$direccion =($_POST["direccion"]);
$edad =($_POST["edad"]);
$telefono =($_POST["telefono"]);
$correo =($_POST["correo"]);
$facebook =($_POST["facebook"]);

echo "Edicion en proceso..... </br>";

include_once("PersonaCollector.php");
$PersonaCollectorObj = new PersonaCollector();
$PersonaCollectorObj->deletePersona($id);

echo "valor id:".htmlspecialchars($id)." se borro " .$nombre." </br>";

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>

</body>
</html>
