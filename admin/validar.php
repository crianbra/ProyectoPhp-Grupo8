<?php
include_once('usuario/Usuario.php');
include_once('bd/Collector.php');
include_once('Autenticacion/Functions.php');
class UsuarioCollector extends Collector
{
  
  function validarUsuario($nombreusuario,$contrasenia){
      $rows = self::$db->getRows("SELECT * FROM usuario WHERE nombreusuario='$nombreusuario' AND contrasenia='$contrasenia'");               
    foreach ($rows as $c){
        $token= Functions::guid();
        $aux = new usuario($c{'idusuario'},$c{'nombreusuario'},$c{'contrasenia'},$c{'perfil'},$c{'persona_id'});
        Usuario::$rol=$c{'perfil'};
        //Usuario::$perfil=$c{'perfil'};//agregando el perfil al usario con una variable estatica para no perder la referencia
        return 1;
       }
        return 0;
  }   
    
 }
?>
