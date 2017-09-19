<?php
include_once('Usuario.php');
include_once('../bd/Collector.php');
include_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/admin/Autenticacion/Functions.php';
class UsuarioCollector extends Collector
{
  
  function validarUsuario($nombreusuario,$contrasenia){
      $rows = self::$db->getRows("SELECT * FROM usuario WHERE nombreusuario='$nombreusuario' AND contrasenia='$contrasenia'");               
    foreach ($rows as $c){
        $token= Functions::guid();
        $aux = new usuario($c{'idusuario'},$c{'nombreusuario'},$c{'contrasenia'},$c{'perfil'},$c{'persona_id'});
<<<<<<< HEAD
=======
        Usuario::$rol=$c{'perfil'};
>>>>>>> b49817fc5ebe00ed93cca35a197f78273adb57a0
        //Usuario::$perfil=$c{'perfil'};//agregando el perfil al usario con una variable estatica para no perder la referencia
        return 1;
       }
        return 0;
  }   
    
 }
?>
