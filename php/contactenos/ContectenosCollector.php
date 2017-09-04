<?php

include_once('Contectenos.php');
include_once('../bd/Collector.php');

class ContactenosCollector extends Collector
{
   
  function showContactenos() {
    $rows = self::$db->getRows("SELECT * FROM contactenos ");        
    
    $arrayContactenos= array();        
    foreach ($rows as $c){
      $aux = new Contactenos($c{'idcontactenos'},$c{'nombre'}, $c{'email'},$c{'telefono'},$c{'materia'},$c{'mensaje'});
      array_push($arrayContactenos, $aux);
    }
    return $arrayContactenos;        
  }

  function showContactenos($id){
    $row = self::$db->getRows("SELECT * FROM contactenos where idcontactenos= ? ", array("{$id}"));

    $ObjContactenos= new Contactenos($row[0]{'idcontactenos'},$row[0]{'nombre'}, $row[0]{'email'} $row[0]{'telefono'} $row[0]{'materia'} $row[0]{'mensaje'});
    return $ObjContactenos;

}


function updateContactenos($id,$nombre, $email, $telefono, $materia, $mensaje){
	$insertrow = self::$db->updateRow("UPDATE public.contactenos SET nombre= ? , email= ? , telefono= ? , mensaje= ?  WHERE idcontactenos= ?", array("{$nombre}","{$email}","{$telefono}","{$materia}","{$mensaje}", $id));

}

function deleteContactenos($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.contactenos WHERE idcontactenos= ?", array("{$id}"));

}

function createContactenos($$nombre, $email, $telefono, $materia, $mensaje){
  $insertarrow = self::$db->insertRow("INSERT INTO public.contactenos (nombre,email,telefono,materia,mensaje) VALUES (?,?,?,?,?)", array ("{$nombre}","{$email}","{$telefono}","{$materia}","{$mensaje}"));

}

}
?>

