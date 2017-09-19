<?php

include_once('Contactenos.php');
include_once('../bd/Collector.php');

class ContectenosCollector extends Collector
{
 
  function showContactos() {
    $rows = self::$db->getRows("SELECT * FROM contactenos ");        
    
    $arrayContacto= array();        
    foreach ($rows as $c){
      $aux = new Contactenos($c{'idcontactenos'},$c{'nombre'},$c{'email'},$c{'telefono'},$c{'asunto'},$c{'mensaje'});
      array_push($arrayContacto, $aux);
    }
    return $arrayContacto;        
  }

  function showContacto($id){
    $row = self::$db->getRows("SELECT * FROM contactenos where idcontactenos= ? ", array("{$id}"));

    $ObJContacto = new Contactenos($row[0]{'idcontactenos'},$row[0]{'nombre'},$row[0]{'email'},$row[0]{'telefono'},$row[0]{'asunto'},$row[0]{'mensaje'});
    return $ObJContacto;

}


function deleteContacto($id){
  $deleterow = self::$db->deleteRow("DELETE FROM contactenos WHERE idcontactenos= ?", array("{$id}"));

}

function createDemo($nombre,$email,$telefono,$asunto,$mensaje){
  $insertarrow = self::$db->insertRow("INSERT INTO contactenos (nombre,email,telefono,asunto,mensaje) VALUES (?,?,?,?,?)", array ("{$nombre}","{$email}","{$telefono}","{$asunto}","{$mensaje}"));
  

}

}
?>
