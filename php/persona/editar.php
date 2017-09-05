<?php
  session_start();

?>
<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Editar</title>
</head>
<body>

<?php
$id = $_GET["id"];
echo "valor de id es ". $id;
include_once("PersonaCollector.php");
include_once("Persona.php");
$PersonaCollectorObj = new PersonaCollector();
$ObjPersona = $PersonaCollectorObj->showPersona($id);
print_r($ObjPersona);

?>

<form action="actualizar.php" method="post">
            <fieldset>
		<label>Identificacion</label>
		<input type="text" name="id_demo" value="<?php echo $ObjPersona->getIdpersona(); ?>" readonly /></br></br>
		<label>Usuario</label>
		<input type="text" name="nombre" value="<?php echo $ObjPersona->getNombre(); ?>" autofocus required /></br>
		</br>
                <button type="submit">Actualizar</button>
		</br></br>
                <a href='index.php'>Cancelar</a>
        </fieldset>
	</form>

 

</body>
</html>




