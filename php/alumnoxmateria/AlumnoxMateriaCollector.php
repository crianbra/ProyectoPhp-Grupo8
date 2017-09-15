<?php

include_once('AlumnoxMateria.php');
include_once('../bd/Collector.php');

class AlumnoxMateriaCollector extends Collector
{

  function showAlumnoxMateria() {
    $rows = self::$db->getRows("SELECT * FROM alumnoxmateria");

    $array= array();
    foreach ($rows as $c){
      $aux = new AlumnoxMateria($c{'idalumno'},$c{'idmateria'});
      array_push($array, $aux);
    }
    return $array;
  }

  function showAlumnoxMateria($idalumno,$idmateria){
    $row = self::$db->getRows("SELECT * FROM alumnoxmateria where idmateria= ? ", array("{$idmateria}" and idalumno= ? "{$idalumno}"));

    $Obj = new AlumnoxMateria($row[0]{'idalumno'},$row[0]{'idmateria'});
    return $Obj;

}




function deleteAlumnoxMateria($idalumno, $idmateria){
	$deleterow = self::$db->deleteRow("DELETE FROM public.alumnoxmateria WHERE idalumno= ?", array("{$idalumno}")"and idmateria= ?", array("{$idmateria}"));

}

function createAlumnoxMateria($descripcion, $usuarioid){
  $insertarrow = self::$db->insertRow("INSERT INTO public.ayudante (descripcion,usuarioid) VALUES (?,?)", array ("{$descripcion}", "{$usuarioid}"));

}

}
?>
