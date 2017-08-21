<?php

include_once('Persona.php');
include_once('Collector.php');

class PersonaCollector extends Collector
{
  
  function showPersonas() {
    $rows = self::$db->getRows("SELECT * FROM persona ");        
    
    $arrayPersona= array();        
    foreach ($rows as $c){
      $aux = new Persona($c{'idpersona'},$c{'nombre'}, $c{'apellido'}, $c{'ciudad'}, $c{'direccion'}, $c{'edad'}, $c{'telefono'}, $c{'correo'});
      array_push($arrayPersona, $aux);
    }
    return $arrayPersona;        
  }

  function showPersona($id){
    $row = self::$db->getRows("SELECT * FROM persona where idpersona= ? ", array("{$id}"));

    $ObjPersona = new Persona($row[0]{'idpersona'},$row[0]{'nombre'}, $row[0]{'apellido'}, $row[0]{'ciudad'}, $row[0]{'direccion'}, $row[0]{'edad'}, $row[0]{'telefono'}, $row[0]{'correo'});
    return $ObjPersona;

}


function updatePersona($id,$nombre){
	$insertrow = self::$db->updateRow("UPDATE public.persona SET nombre= ? WHERE idpersona= ?", array("{$nombre}", $id));

}

function deletePersona($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.persona WHERE idpersona= ?", array("{$id}"));

}

}
?>

