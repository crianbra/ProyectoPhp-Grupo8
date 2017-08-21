<?php

include_once('Usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{
  
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'nombreusuario'}, $c{'contrasenia'}, $c{'idpersona_fk'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }

  function showUsuario($id){
    $row = self::$db->getRows("SELECT * FROM usuario where idusuario= ? ", array("{$id}"));

    $ObjUsuario = new Usuario($row[0]{'idusuario'},$row[0]{'nombreusuario'}, $row[0]{'contrasenia'}, $row[0]{'idpersona_fk'});
    return $ObjUsuario;

}


function updateUsuario($id,$nombre){
	$insertrow = self::$db->updateRow("UPDATE public.usuario SET nombreusuario= ? WHERE idusuario= ?", array("{$nombreusuario}", $id));

}

function deleteUsuario($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.usuario WHERE idusuario= ?", array("{$id}"));

}

}
?>

