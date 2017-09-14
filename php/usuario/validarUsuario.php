<?php
session_start();
require('validar.php');
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <?php
        $usuarioCollector = new UsuarioCollector();
		$nombreusuario = $_POST['nombreusuario'];
		$contrasenia = $_POST['contrasenia'];
        if ($usuarioCollector->validarUsuario($nombreusuario,$contrasenia)){
            $_SESSION['mySesion'] = $nombreusuario;
            $_SESSION['rol'] = Usuario::$perfil; //agrege una sesion rol para identificar al perfil del usuario
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../sitioweb/index.php'>";
        }
        else{
             $mensaje = "EL USUARIO NO SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../login.php'>";
        }
	   ?>
            
    </head>
    <body>
	
    </body>
</html>
