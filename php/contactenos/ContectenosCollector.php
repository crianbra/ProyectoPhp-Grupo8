<?php

include_once('Contectenos.php');
include_once('Collector.php');

class ContectenosCollector extends Collector
{
 
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM contactenos ");        
    
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'idcontactenos'},$c{'nombre'},$c{'email'},$c{'telefono'},$c{'materia'},$c{'mensaje'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }

  function showDemo($id){
    $row = self::$db->getRows("SELECT * FROM contactenos where idcontactenos= ? ", array("{$id}"));

    $ObjDemo = new Demo($row[0]{'idcontactenos'},$row[0]{'nombre'},$row[0]{'email'},$row[0]{'telefono'},$row[0]{'materia'},$row[0]{'mensaje'});
    return $ObjDemo;

}


function updateDemo($id,$nombre,$cedula,$tipo,$fechanacimiento){
$insertrow = self::$db->updateRow("UPDATE public.persona SET nombre= ?, cedula= ?, tipo= ?, fechanacimiento= ? WHERE idpersona= ?", array("{$nombre}","{$cedula}","{$tipo}","{$fechanacimiento}",$id));
}




function deleteDemo($id){
  $deleterow = self::$db->deleteRow("DELETE FROM public.contactenos WHERE idcontactenos= ?", array("{$id}"));

}

function createDemo($nombre,$email,$telefono,$materia,$mensaje){
  $insertarrow = self::$db->insertRow("INSERT INTO public.contactenos (nombre,email,telefono,materia,mensaje) VALUES (?,?,?,?,?)", array ("{$nombre}","{$email}","{$telefono}","{$materia}","{$mensaje}"));
  

}

}
?>
