<?php

include_once('Usuario.php');
include_once('../bd/Collector.php');

class UsuarioCollector extends Collector
{
  
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'nombreusuario'}, $c{'contrasenia'}, $c{'personaid'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }

  function showUsuario($id){
    $row = self::$db->getRows("SELECT * FROM usuario where idusuario= ? ", array("{$id}"));

    $ObjUsuario = new Usuario($row[0]{'idusuario'},$row[0]{'nombreusuario'}, $row[0]{'contrasenia'}, $row[0]{'personaid'});
    return $ObjUsuario;

}


function updateUsuario($id,$nombreusuario, $contrasenia, $personaid){
	$insertrow = self::$db->updateRow("UPDATE public.usuario SET nombreusuario= ? contrasenia= ? personaid= ? WHERE idusuario= ?", array("{$nombreusuario}", "{$contrasenia}", "{$personaid}", $id));

}

function deleteUsuario($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.usuario WHERE idusuario= ?", array("{$id}"));

}

function createUsuario($nombreusuario, $contrasenia, $personaid){
  $insertarrow = self::$db->insertRow("INSERT INTO public.persona (nombreusuario, contrasenia, personaid) VALUES (?,?,?)", array ("{$nombreusuario}", "{$contrasenia}", "{$personaid}"));

}

}
?>

