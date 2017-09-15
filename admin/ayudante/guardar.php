<html>
<head>
</head>
<body>

<div id="main">

<?php
$valor = $_POST["id"];
$valor2 = $_POST["descripcion"];
$valor3 = $_POST["usuario_id"];
$valor3 = $_POST["reconocimiento_id"];

echo 'Hola Usuario con el ID : ' .htmlspecialchars($valor) . '!';
include_once("AyudanteCollector.php");

$AyudanteCollectorObj = new AyudanteCollector();
//$ObjPersona = $PersonaCollectorObj->createPersona($valor);

echo "Se ha guardado correctamente </br>";




 if (isset($_POST["descripcion"])) {
     $descripcion =($_POST["descripcion"]);
     $usuario_id =($_POST["usuario_id"]);
     $reconocimiento_id =($_POST["reconocimiento_id"]);

     if ($AyudanteCollectorObj->createAyudante($descripcion, $usuario_id,$reconocimiento_id)) {
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
