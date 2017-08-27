<?php

include_once('Curso.php');
include_once('../bd/Collector.php');



class CursoCollector extends Collector
{
  
  function showCurso() {
    $rows = self::$db->getRows("SELECT * FROM curso ");        
    
    $arrayCurso= array();        
    foreach ($rows as $c){
      $aux = new Curso($c{'idcurso'},$c{'idalumnoxmateria'}, $c{'idayudante'});
      array_push($arrayCurso, $aux);
    }
    return $arrayCurso;        
  }

  function showCurso($id){
    $row = self::$db->getRows("SELECT * FROM curso where idcurso= ? ", array("{$id}"));

    $ObjCurso = new Alumno($row[0]{'idcurso'},$row[0]{'idalumnoxmateria'}, $row[0]{'idayudante'});
    return $ObjCurso;

}


function updateCurso($id,$idalumnoxmateria, $idayudante){
	$insertrow = self::$db->updateRow("UPDATE public.curso SET idalumnoxmateria= ? idayudante= ?  WHERE idcurso= ?", array("{$idalumnoxmateria}","{$idayudante}", $id));

}

function deleteCurso($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.curso WHERE idcurso= ?", array("{$id}"));

}

function createAlumno($idalumnoxmateria, $idayudante){
  $insertarrow = self::$db->insertRow("INSERT INTO public.curso (idalumnoxmateria,idayudante) VALUES (?,?)", array ("{$idalumnoxmateria}", "{$idayudante}"));

}

}
?>

