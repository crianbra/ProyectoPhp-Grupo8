<?php

include_once('Persona.php');
include_once('Collector.php');

class PersonaCollector extends Collector
{
  
  function showPersonas() {
    $rows = self::$db->getRows("SELECT * FROM persona ");        
    
    $arrayPersona= array();        
    foreach ($rows as $c){
      $aux = new Persona($c{'idpersona'},$c{'nombre'}, $c{'ciudad'}, $c{'direccion'}, $c{'edad'}, $c{'telefono'}, $c{'correo'}, $c{'facebook'});
      array_push($arrayPersona, $aux);
    }
    return $arrayPersona;        
  }

  function showPersona($id){
    $row = self::$db->getRows("SELECT * FROM persona where idpersona= ? ", array("{$id}"));

    $ObjPersona = new Persona($row[0]{'idpersona'},$row[0]{'nombre'}, $row[0]{'ciudad'}, $row[0]{'direccion'}, $row[0]{'edad'}, $row[0]{'telefono'}, $row[0]{'correo'}, $row[0]{'facebook'});
    return $ObjPersona;

}


function updatePersona($id,$nombre, $ciudad, $direccion, $edad, $telefono, $correo, $facebook){
	$insertrow = self::$db->updateRow("UPDATE public.persona SET nombre= ? ciudad= ? direccion=? edad= ? telefono= ? correo= ? facebook= ? WHERE idpersona= ?", array("{$nombre}","{$ciudad}","{$direccion}" ,"{$edad}" ,"{$telefono}" ,"{$correo}" ,"{$facebook}", $id));

}

function deletePersona($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.persona WHERE idpersona= ?", array("{$id}"));

}

function createPersona($nombre, $ciudad, $direccion, $edad, $telefono, $correo, $facebook){
  $insertarrow = self::$db->insertRow("INSERT INTO public.persona (nombre,ciudad,direccion,edad,telefono,correo,facebook) VALUES (?,?,?,?,?,?,?)", array ("{$nombre}", "{$ciudad}", "{$direccion}" ,"{$edad}" ,"{$telefono}" ,"{$correo}" ,"{$facebook}"));

}

}
?>

