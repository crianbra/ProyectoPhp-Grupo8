<?php

include_once('Materia.php');
include_once('../bd/Collector.php');

class MateriaCollector extends Collector
{

  function showMaterias() {
    $rows = self::$db->getRows("SELECT * FROM materia ");        
    
    $arrayMateria= array();        
    foreach ($rows as $c){
      $aux = new Materia($c{'idmateria'},$c{'nombre'},$c{'ayudante_id'},$c{'alumno_id'},$c{'categoria_id'});
      array_push($arrayMateria, $aux);
    }
    return $arrayMateria;        
  }

  function showMateria($id){
    $row = self::$db->getRows("SELECT * FROM materia where idmateria= ? ", array("{$id}"));

    $ObJMateria = new Materia($row[0]{'idmateria'},$row[0]{'nombre'},$row[0]{'ayudante_id'},$row[0]{'alumno_id'},$row[0]{'categoria_id'});
    return $ObJMateria;

}


function deleteMateria($id){
  $deleterow = self::$db->deleteRow("DELETE FROM materia WHERE idmateria= ?", array("{$id}"));

}
function updateMateria($idmateria,$nombre, $ayudante_id, $alumno_id, $categoria_id){
  $insertrow = self::$db->updateRow("UPDATE materia SET nombre= ? , ayudante_id= ?, alumno_id= ?, categoria_id= ?  WHERE idmateria= ?", array("{$nombre}", "{$ayudante_id}", "{$alumno_id}", "{$categoria_id}", $idmateria));

}

function createMateria($nombre,$ayudante_id,$alumno_id,$categoria_id){
  $insertarrow = self::$db->insertRow("INSERT INTO materia (nombre,ayudante_id,alumno_id,categoria_id) VALUES (?,?,?,?)", array ("{$nombre}","{$ayudante_id}","{$alumno_id}","{$categoria_id}"));
  

}

}
?>
