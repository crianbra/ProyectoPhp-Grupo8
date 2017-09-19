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
        $perfil = $_POST['perfil'];
        if ($usuarioCollector->validarUsuario($nombreusuario,$contrasenia)){
            $_SESSION['mySesion'] = $nombreusuario;
<<<<<<< HEAD:admin/usuario/validarUsuario.php
            //$_SESSION['rol'] = Usuario::$perfil;
            //$_SESSION['rol'] = Usuario::$perfil; //agrege una sesion rol para identificar al perfil del usuario
=======
            $_SESSION['rol'] = Usuario::$rol; //agrege una sesion rol para identificar al perfil del usuario
>>>>>>> b49817fc5ebe00ed93cca35a197f78273adb57a0:admin/usuario/validarUsuario.php
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
