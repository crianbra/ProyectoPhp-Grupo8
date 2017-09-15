<html>
<head>
</head>
<body>

<div id="main">

<?php
$valor = $_POST["nombreusuario"];

echo 'Hola ' .htmlspecialchars($valor) . '!';
include_once("UsuarioCollector.php");

$UsuarioCollectorObj = new UsuarioCollector();
//$ObjPersona = $PersonaCollectorObj->createPersona($valor);

echo "Se ha guardado correctamente </br>";




 if (isset($_POST["nombreusuario"])) {
     $nombreusuario =($_POST["nombreusuario"]);
     $contrasenia =($_POST["contrasenia"]);
     $perfil =($_POST["perfil"]);
     $personaid =($_POST["persona_id"]);
     

     if ($UsuarioCollectorObj->createUsuario($nombreusuario, $contrasenia, $perfil, $personaid)) {
         //var_dump($obj);
     	echo "Se ha guardado correctamente </br>";
         header("Location: ../index.php");
         exit();
     } else {
         
     }
 } else {
    echo "Hubo un error al intentar crear el usuario.";
}

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
