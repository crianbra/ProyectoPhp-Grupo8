<html>
<head>
</head>
<body>

<div id="main">

<?php
include_once("ReconocimientoCollector.php");

$ReconocimientoCollectorObj = new ReconocimientoCollector();
//$ObjPersona = $PersonaCollectorObj->createPersona($valor);

echo "Se ha guardado correctamente </br>";




 if (isset($_POST["descripcion"])) {
     $descripcion =($_POST["descripcion"]);
     

     if ($ReconocimientoCollectorObj->createReconocimiento($descripcion)) {
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
