<html>
<head>
</head>
<body>

<div id="main">

<?php
//$valor = $_POST["id"];
$valor2 = $_POST["nombre"];
$valor3 = $_POST["ayudante_id"];
$valor4 = $_POST["alumno_id"];
$valor5 = $_POST["categoria_id"];


//echo 'Hola Usuario con el ID : ' .htmlspecialchars($valor) . '!';
include_once("MateriaCollector.php");

$MateriaCollectorObj = new MateriaCollector();
//$ObjPersona = $PersonaCollectorObj->createPersona($valor);

echo "Se ha guardado correctamente </br>";




 if (isset($_POST["nombre"])) {
     $nombre =($_POST["nombre"]);
     $ayudante_id =($_POST["ayudante_id"]);
     $alumno_id =($_POST["alumno_id"]);
     $categoria_id =($_POST["categoria_id"]);  
     if ($MateriaCollectorObj->createMateria($nombre, $ayudante_id,$alumno_id,$categoria_id)) {
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
