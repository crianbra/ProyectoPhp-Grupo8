<?php

include_once('Usuario.php');
include_once('../bd/Collector.php');
include_once('../Autenticacion/Functions.php');

class UsuarioCollector extends Collector
{
  
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'nombreusuario'}, $c{'contrasenia'}, $c{'perfil'}, $c{'persona_id'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }

  function showUsuario($id){
    $row = self::$db->getRows("SELECT * FROM usuario where idusuario= ? ", array("{$id}"));

    $ObjUsuario = new Usuario($row[0]{'idusuario'},$row[0]{'nombreusuario'}, $row[0]{'contrasenia'}, $row[0]{'perfil'}, $row[0]{'persona_id'});
    return $ObjUsuario;

}


function updateUsuario($idusuario,$nombreusuario, $contrasenia, $perfil, $persona_id){
	$insertrow = self::$db->updateRow("UPDATE usuario SET nombreusuario= ? , contrasenia= ? , perfil= ? , persona_id= ? WHERE idusuario= ?", array("{$nombreusuario}", "{$contrasenia}", "{$perfil}", "{$persona_id}", $idusuario));

}

function deleteUsuario($id){
	$deleterow = self::$db->deleteRow("DELETE FROM usuario WHERE idusuario= ?", array("{$id}"));

}

function createUsuario($nombreusuario, $contrasenia, $perfil, $persona_id){
  $insertarrow = self::$db->insertRow("INSERT INTO usuario (nombreusuario, contrasenia, perfil, persona_id) VALUES (?,?,?,?)", array ("{$nombreusuario}", "{$contrasenia}", "{$perfil}", "{$persona_id}"));

}

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
        
function buscarUsuario($nombreusuario) {
                $rows = self::$db->getRows("SELECT * FROM usuario WHERE nombreusuario='$nombreusuario'");               
                foreach ($rows as $c){
                  $aux = new Usuario($c{'idusuario'},$c{'nombreusuario'},$c{'contrasenia'},$c{'perfil'},$c{'persona_id'});
                  return 1;
                }
                return 0;          
            }

}
?>

