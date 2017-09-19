<html>
<head>
</head>
<body>

<div id="main">

<?php
$valor = $_POST["id"];
$valor2 = $_POST["descripcion"];
$valor3 = $_POST["materia_id"];

//echo 'Hola Usuario con el ID : ' .htmlspecialchars($valor) . '!';
include_once("ContenidoCollector.php");

$ContenidoCollectorObj = new ContenidoCollector();
//$ObjPersona = $PersonaCollectorObj->createPersona($valor);

echo "Se ha guardado correctamente </br>";




 if (isset($_POST["descripcion"])) {
     $descripcion =($_POST["descripcion"]);
     $materia_id =($_POST["materia_id"]);
      
     if ($ContenidoCollectorObj->createContenido($descripcion, $materia_id)) {
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
