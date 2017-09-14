<?php

include_once('Alumno.php');
include_once('../bd/Collector.php');

class AlumnoCollector extends Collector
{
  
  function showAlumnos() {
    $rows = self::$db->getRows("SELECT * FROM alumno ");        
    
    $arrayAlumno= array();        
    foreach ($rows as $c){
      $aux = new Alumno($c{'idalumno'},$c{'descripcion'}, $c{'usuarioid'});
      array_push($arrayAlumno, $aux);
    }
    return $arrayAlumno;        
  }

  function showAlumno($id){
    $row = self::$db->getRows("SELECT * FROM alumno where idalumno= ? ", array("{$id}"));

    $ObjAlumno = new Alumno($row[0]{'idalumno'},$row[0]{'descripcion'}, $row[0]{'usuarioid'});
    return $ObjAlumno;

}


function updateAlumno($id,$descripcion, $usuarioid){
	$insertrow = self::$db->updateRow("UPDATE public.alumno SET descripcion= ? usuarioid= ?  WHERE idalumno= ?", array("{$descripcion}","{$usuarioid}", $id));

}

function deleteAlumno($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.alumno WHERE idalumno= ?", array("{$id}"));

}

function createAlumno($descripcion, $usuarioid){
  $insertarrow = self::$db->insertRow("INSERT INTO public.alumno (descripcion,usuarioid) VALUES (?,?)", array ("{$descripcion}", "{$usuarioid}"));

}

}
?>

