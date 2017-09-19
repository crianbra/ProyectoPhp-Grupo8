<?php
session_start();
include_once('validar.php');
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <?php
        
        
        $usuarioCollector = new UsuarioCollector();
        $nombreusuario = $_POST['usuario'];
        $contrasenia = $_POST['clave'];
        if ($usuarioCollector->validarUsuario($nombreusuario,$contrasenia)){
            $_SESSION['mySesion'] = $nombreusuario;
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../index.php'>";
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


