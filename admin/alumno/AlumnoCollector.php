<?php

include_once('Alumno.php');
include_once('../bd/Collector.php');

class AlumnoCollector extends Collector
{
 
  function showAlumnos() {
    $rows = self::$db->getRows("SELECT * FROM alumno ");        
    
    $arrayAlumnos= array();        
    foreach ($rows as $c){
      $aux = new Alumno($c{'idalumno'},$c{'descripcion'},$c{'usuario_id'});
      array_push($arrayAlumnos, $aux);
    }
    return $arrayAlumnos;        
  }

  function showAlumno($id){
    $row = self::$db->getRows("SELECT * FROM alumno where idalumno= ? ", array("{$id}"));

    $ObJAlumno = new Alumno($row[0]{'idalumno'},$row[0]{'descripcion'},$row[0]{'usuario_id'});
    return $ObJAlumno;

}


function deleteAlumno($id){
  $deleterow = self::$db->deleteRow("DELETE FROM alumno WHERE idalumno= ?", array("{$id}"));

}
function updateAlumno($idalumno,$descripcion, $usuario_id){
  $insertrow = self::$db->updateRow("UPDATE alumno SET descripcion= ? , usuario_id= ?  WHERE idalumno= ?", array("{$descripcion}", "{$usuario_id}", $idalumno));

}

function createAlumno($descripcion,$usuario_id){
  $insertarrow = self::$db->insertRow("INSERT INTO alumno (descripcion,usuario_id) VALUES (?,?)", array ("{$descripcion}","{$usuario_id}"));
  

}

}
?>
