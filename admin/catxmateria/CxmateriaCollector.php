<?php

include_once('Cxmateria.php');
include_once('../bd/Collector.php');

class CxmateriaCollector extends Collector
{
 
 function showCategorias() {
    $rows = self::$db->getRows("SELECT * FROM categoriaxmateria ");        
    
    $arrayCategoria= array();        
    foreach ($rows as $c){
      $aux = new Cxmateria($c{'idcategoria'},$c{'nombre'});
      array_push($arrayCategoria, $aux);
    }
    return $arrayCategoria;        
  }

  function showCategoria($id){
    $row = self::$db->getRows("SELECT * FROM categoriaxmateria where idcategoria= ? ", array("{$id}"));

    $ObJCategoria = new Cxmateria($row[0]{'idcategoria'},$row[0]{'nombre'});
    return $ObJCategoria;

}


function deleteCategoria($id){
  $deleterow = self::$db->deleteRow("DELETE FROM categoriaxmateria WHERE idcategoria= ?", array("{$id}"));

}
function updateCategoria($idcategoria,$nombre){
  $insertrow = self::$db->updateRow("UPDATE categoriaxmateria SET nombre= ?  WHERE idcategoria= ?", array("{$nombre}", $idcategoria));

}

function createCategoria($nombre){
  $insertarrow = self::$db->insertRow("INSERT INTO categoriaxmateria (nombre) VALUES (?)", array ("{$nombre}"));
  

}

}
?>
