<?php

include_once('ContenidoClass.php');
include $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/php/bd/Collector.php';

class ContenidoCollector extends Collector
{
  
  function showContenidos() {
    $rows = self::$db->getRows("SELECT * FROM contenido ");        
    
    $array= array(); 
      $con=0;
    foreach ($rows as $c){
        //echo "C".$c{'nombrecategoria'};
      $aux = new Contenido($c{'idcontenido'},$c{'descripcion'}, $c{'materia_id'});
         
        array_push($array, $aux);  
    }
    return $array;        
  }

  function showContenido($id){
    $row = self::$db->getRows("SELECT * FROM contenido where idcontenido= ? ", array("{$id}"));

    $Obj = new Contenido($row[0]{'idcontenido'},$row[0]{'descripcion'},$row[0]{'materia_id'});
    return $Obj;

}


function updateContenido($id,$nombre,$materia){
	if($insertrow = self::$db->updateRow("UPDATE public.contenido SET descripcion= ? ,materia_id= ?  WHERE idcontenido= ?", array("{$nombre}","{$materia}",  $id))){
        return 1;
    }
         return 0;
}

function deleteContenido($id){
	if($deleterow = self::$db->deleteRow("DELETE FROM public.contenido WHERE idcontenido= ?", array("{$id}"))){
        return 1;
    }
          return 0;
}

function createContenido($nombre, $materia){
 if( $insertarrow = self::$db->insertRow("INSERT INTO public.contenido (descripcion, materia_id ) VALUES (?,?)", array ("{$nombre}", "{$materia}"))){
     return 1;
 }
    return 0;

}

}
?>