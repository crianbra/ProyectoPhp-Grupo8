<?php
include_once('Usuario.php');
include_once('../bd/Collector.php');
//include_once('../Autenticacion/Functions.php');
class UsuarioCollector extends Collector
{
  
  function validarUsuario($nombreusuario,$contrasenia,$perfil){
      $rows = self::$db->getRows("SELECT * FROM usuario WHERE nombreusuario='$nombreusuario' AND contrasenia='$contrasenia' AND perfil=$perfil");               
    foreach ($rows as $c){
        $token= Functions::guid();
        $aux = new usuario($c{'idusuario'},$c{'nombreusuario'},$c{'contrasenia'},$c{'perfil'},$c{'persona_id'});
        //Usuario::$perfil=$c{'perfil'};//agregando el perfil al usario con una variable estatica para no perder la referencia
        return 1;
       }
        return 0;
  }   
    
 }
?>
