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

$nombreusuario= $_POST["nombreusuario"];
$contrasenia =($_POST["contrasenia"]);
$perfil =($_POST["perfil"]);
$persona_id =($_POST["persona_id"]);
$idusuario= $_POST["idusuario"];



echo "Edicion en proceso..... </br>";

include_once("UsuarioCollector.php");
$UsuarioCollectorObj = new UsuarioCollector();
$UsuarioCollectorObj->updateUsuario($idusuario,$nombreusuario, $contrasenia, $perfil, $persona_id);
echo "id:".$idusuario." actualizando a:".$nombreusuario." </br>";

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>

</body>
</html>
