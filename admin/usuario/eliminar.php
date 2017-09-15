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
$nombreusuario = $_POST["nombreusuario"];
$contrasenia =($_POST["contrasenia"]);
$perfil =($_POST["perfil"]);
$persona_id =($_POST["persona_id"]);

echo "Edicion en proceso..... </br>";

include_once("UsuarioCollector.php");
$UsuarioCollectorObj = new UsuarioCollector();
$UsuarioCollectorObj->deleteUsuario($id);

echo "valor id:".htmlspecialchars($id)." se borro " .$nombreusuario." </br>";

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>

</body>
</html>
