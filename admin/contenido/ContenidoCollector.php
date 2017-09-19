<?php

include_once('Contenido.php');
include_once('../bd/Collector.php');

class ContenidoCollector extends Collector
{
 
  function showContenidos() {
    $rows = self::$db->getRows("SELECT * FROM contenido ");        
    
    $arrayContenido= array();        
    foreach ($rows as $c){
      $aux = new Contenido($c{'idcontenido'},$c{'descripcion'},$c{'materia_id'});
      array_push($arrayContenido, $aux);
    }
    return $arrayContenido;        
  }

  function showContenido($id){
    $row = self::$db->getRows("SELECT * FROM contenido where idcontenido= ? ", array("{$id}"));

    $ObJContenido = new Contenido($row[0]{'idcontenido'},$row[0]{'descripcion'},$row[0]{'materia_id'});
    return $ObJContenido;

}


function deleteContenido($id){
  $deleterow = self::$db->deleteRow("DELETE FROM contenido WHERE idcontenido= ?", array("{$id}"));

}
function updateContenido($idcontenido,$descripcion, $materia_id){
  $insertrow = self::$db->updateRow("UPDATE contenido SET descripcion= ? , materia_id= ?  WHERE idcontenido= ?", array("{$descripcion}", "{$materia_id}", $idcontenido));

}

function createContenido($descripcion,$materia_id){
  $insertarrow = self::$db->insertRow("INSERT INTO contenido (descripcion,materia_id) VALUES (?,?)", array ("{$descripcion}","{$materia_id}"));
  

}

}
?>
