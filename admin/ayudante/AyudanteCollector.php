<?php

include_once('Ayudante.php');
include_once('../bd/Collector.php');

class AyudanteCollector extends Collector
{
 
  function showAyudantes() {
    $rows = self::$db->getRows("SELECT * FROM ayudante ");        
    
    $arrayAyudante= array();        
    foreach ($rows as $c){
      $aux = new Ayudante($c{'idayudante'},$c{'descripcion'},$c{'usuario_id'},$c{'reconocimiento_id'});
      array_push($arrayAyudante, $aux);
    }
    return $arrayAyudante;        
  }

  function showAyudante($id){
    $row = self::$db->getRows("SELECT * FROM ayudante where idayudante= ? ", array("{$id}"));

    $ObJAyudante = new Ayudante($row[0]{'idayudante'},$row[0]{'descripcion'},$row[0]{'usuario_id'},$row[0]{'reconocimiento_id'});
    return $ObJAyudante;

}


function deleteAyudante($id){
  $deleterow = self::$db->deleteRow("DELETE FROM ayudante WHERE idayudante= ?", array("{$id}"));

}
function updateAyudante($idayudante,$descripcion, $usuario_id, $reconocimiento_id){
  $insertrow = self::$db->updateRow("UPDATE ayudante SET descripcion= ? , usuario_id= ? , reconocimiento_id= ? WHERE idayudante= ?", array("{$descripcion}", "{$usuario_id}", "{$reconocimiento_id}", $idayudante));

}

function createAyudante($descripcion,$usuario_id,$reconocimiento_id){
  $insertarrow = self::$db->insertRow("INSERT INTO ayudante (descripcion,usuario_id,reconocimiento_id) VALUES (?,?,?)", array ("{$descripcion}","{$usuario_id}","{$reconocimiento_id}"));
  

}

}
?>
