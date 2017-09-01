<?php

include_once('AlumnoxMateria.php');
include_once('../bd/Collector.php');

class AlumnoxMateriaCollector extends Collector
{

  function showAyudante() {
    $rows = self::$db->getRows("SELECT * FROM alumnoxmateria");

    $array= array();
    foreach ($rows as $c){
      $aux = new AlumnoxMateria($c{'idalumno'},$c{'idmateria'});
      array_push($array, $aux);
    }
    return $array;
  }

  function showAlumnoxMateria($id){
    $row = self::$db->getRows("SELECT * FROM alumnoxmateria where idayudante= ? ", array("{$id}"));

    $ObjAyudante = new Ayudante($row[0]{'idayudante'},$row[0]{'descripcion'}, $row[0]{'usuarioid'});
    return $ObjAyudante;

}


function updateAyudante($id,$descripcion, $usuarioid){
	$insertrow = self::$db->updateRow("UPDATE public.ayudante SET descripcion= ? usuarioid= ?  WHERE idayudante= ?", array("{$descripcion}","{$usuarioid}", $id));

}

function deleteAyudante($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.ayudante WHERE idayudante= ?", array("{$id}"));

}

function createAyudante($descripcion, $usuarioid){
  $insertarrow = self::$db->insertRow("INSERT INTO public.ayudante (descripcion,usuarioid) VALUES (?,?)", array ("{$descripcion}", "{$usuarioid}"));

}

}
?>
