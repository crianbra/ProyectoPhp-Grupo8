<?php

include_once('Ayudante.php');
include_once('../bd/Collector.php');

class AyudanteCollector extends Collector
{
  
  function showAyudante() {
    $rows = self::$db->getRows("SELECT * FROM Ayudante ");        
    
    $arrayAyudante= array();        
    foreach ($rows as $c){
      $aux = new Ayudante($c{'idayudante'},$c{'descripcion'}, $c{'usuarioid'});
      array_push($arrayAyudante, $aux);
    }
    return $arrayAyudante;        
  }

  function showAyudante($id){
    $row = self::$db->getRows("SELECT * FROM ayudante where idayudante= ? ", array("{$id}"));

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

