<?php

include_once('Reconocimiento.php');
include_once('../bd/Collector.php');

class ReconocimientoCollector extends Collector
{
  
  function showReconocimientos() {
    $rows = self::$db->getRows("SELECT * FROM reconocimiento ");        
    
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Reconocimiento($c{'idreconocimiento'},$c{'descripcion'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }

  function showReconocimiento($id){
    $row = self::$db->getRows("SELECT * FROM reconocimiento where idreconocimiento= ? ", array("{$id}"));

    $ObjReconocimiento = new Reconocimiento($row[0]{'idreconocimiento'},$row[0]{'descripcion'});
    return $ObjReconocimiento;

}


function updateReconocimiento($idreconocimiento,$descripcion){
	$insertrow = self::$db->updateRow("UPDATE reconocimiento SET descripcion= ? WHERE idreconocimiento= ?", array("{$descripcion}", $idreconocimiento));

}

function deleteReconocimiento($idreconocimiento){
	$deleterow = self::$db->deleteRow("DELETE FROM reconocimiento WHERE idreconocimiento= ?", array("{$idreconocimiento}"));

}

function createReconocimiento($descripcion){
  $insertarrow = self::$db->insertRow("INSERT INTO reconocimiento (descripcion) VALUES (?)", array ("{$descripcion}"));

}

}
?>

