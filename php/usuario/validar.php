<?php
include_once('Usuario.php');
include_once('../bd/Collector.php');
class UsuarioCollector extends Collector
{
  
  function validarUsuario($nombreusuario,$contrasenia){
      $rows = self::$db->getRows("SELECT * FROM usuario WHERE nombreusuario='$nombreusuario' AND contrasenia='$contrasenia'");               
    foreach ($rows as $c){
      $aux = new usuario($c{'idusuario'},$c{'nombreusuario'},$c{'contrasenia'},$c{'personaid'});
      return 1;
    }
    return 0;
  }    
    
 }
?>
