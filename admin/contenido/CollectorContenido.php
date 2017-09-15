<?php

include_once('ContenidoClass.php');
include $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/admin/bd/Collector.php';

class CollectorContenido extends Collector
{
  
  function showContenidos() {
    $rows = self::$db->getRows("SELECT * FROM contenido ");        
    
    $array= array(); 
      $con=0;
    foreach ($rows as $c){
        //echo "C".$c{'nombrecategoria'};
      $aux = new ContenidoClass($c{'idcontenido'},$c{'descripcion'}, $c{'materia_id'});
         
        array_push($array, $aux);  
    }
    return $array;        
  }

  function showContenido($id){
    $row = self::$db->getRows("SELECT * FROM contenido where idcontenido= ? ", array("{$id}"));

    $Obj = new ContenidoClass($row[0]{'idcontenido'},$row[0]{'descripcion'},$row[0]{'materia_id'});
    return $Obj;

}


function updateContenido($id,$nombre,$materia_id){
	if($insertrow = self::$db->updateRow("UPDATE contenido SET descripcion= ? , materia_id= ?  WHERE idcontenido= ?", array("{$nombre}","{$materia_id}",  $id))){
        return 1;
    }
         return 0;
}

function deleteContenido($id){
	if($deleterow = self::$db->deleteRow("DELETE FROM contenido WHERE idcontenido= ?", array("{$id}"))){
        return 1;
    }
          return 0;
}

function createContenido($nombre, $materia_id){
 if( $insertarrow = self::$db->insertRow("INSERT INTO contenido (descripcion, materia_id ) VALUES (?,?)", array ("{$nombre}", "{$materia_id}"))){
     return 1;
 }
    return 0;

}

}
?>