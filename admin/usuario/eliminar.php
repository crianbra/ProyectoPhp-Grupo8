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
<<<<<<< HEAD
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
=======
$nombreusuario = $_POST["nombreusuario"];
$contrasenia =($_POST["contrasenia"]);
$perfil =($_POST["perfil"]);
$persona_id =($_POST["persona_id"]);

echo "Edicion en proceso..... </br>";

include_once("UsuarioCollector.php");
$UsuarioCollectorObj = new UsuarioCollector();
$UsuarioCollectorObj->deleteUsuario($id);

echo "valor id:".htmlspecialchars($id)." se borro " .$nombreusuario." </br>";
>>>>>>> b49817fc5ebe00ed93cca35a197f78273adb57a0

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>

</body>
</html>
