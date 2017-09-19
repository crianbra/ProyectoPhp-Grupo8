<html>
<head>
</head>
<body>

<div id="main">

<?php
//$valor = $_POST["id"];
$valor2 = $_POST["nombre"];


//echo 'Hola Usuario con el ID : ' .htmlspecialchars($valor) . '!';
include_once("CxmateriaCollector.php");

$CategoriaCollectorObj = new CxmateriaCollector();
//$ObjPersona = $PersonaCollectorObj->createPersona($valor);

echo "Se ha guardado correctamente </br>";




 if (isset($_POST["nombre"])) {
     $nombre =($_POST["nombre"]);
     if ($CategoriaCollectorObj->createCategoria($nombre)) {
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
