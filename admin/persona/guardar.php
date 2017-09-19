<html>
<head>
</head>
<body>

<div id="main">

<?php
$valor = $_POST["nombre"];

echo 'Hola ' .htmlspecialchars($valor) . '!';
include_once("PersonaCollector.php");

$PersonaCollectorObj = new PersonaCollector();
//$ObjPersona = $PersonaCollectorObj->createPersona($valor);

echo "Se ha guardado correctamente </br>";




 if (isset($_POST["nombre"])) {
     $nombre =($_POST["nombre"]);
     $ciudad =($_POST["ciudad"]);
     $direccion =($_POST["direccion"]);
     $edad =($_POST["edad"]);
     $telefono =($_POST["telefono"]);
     $correo =($_POST["correo"]);
     $facebook =($_POST["facebook"]);

     if ($PersonaCollectorObj->createPersona($nombre,$ciudad,$direccion,$edad,$telefono,$correo,$facebook)) {
         //var_dump($obj);
     	echo "Se ha guardado correctamente </br>";
         header("Location: ../index.php");
         exit();
     } else {
         
     }
 } else {
    echo "Hubo un error al intentar crear la materia.";
}

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
