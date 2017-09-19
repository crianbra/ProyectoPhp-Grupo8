<?php
session_start();
//$_SESSION["rol"]="admin";
//session_write_close();
//header("Location: ../../index.php");


if(isset($_SESSION['rol'])){
	session_destroy();
	echo "se ha cerrado sesion exitosamente <br/>";
	echo "<a href='../index.php'>Salir</a>";
}else{
	echo "ERROR.... <br/>";
	echo "<a href='../index.php'>Salir</a>";
}
?>

