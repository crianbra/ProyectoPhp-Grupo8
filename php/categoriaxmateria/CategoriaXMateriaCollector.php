<?php

include_once('CategoriaXMateria.php');
include $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/php/bd/Collector.php';

class CategoriaXMateriaCollector extends Collector
{
  
  function showCategoriaXMaterias() {
    $rows = self::$db->getRows("SELECT * FROM categoriaxmateria ");        
    
    $array= array(); 
      $con=0;
    foreach ($rows as $c){
        //echo "C".$c{'nombrecategoria'};
      $aux = new CategoriaXMateria($c{'idcategoria'},$c{'nombre'});
         
        array_push($array, $aux);  
    }
    return $array;        
  }

  function showCategoriaXMateria($id){
    $row = self::$db->getRows("SELECT * FROM categoriaxmateria where idcategoria= ? ", array("{$id}"));

    $Obj = new CategoriaXMateria($row[0]{'idcategoria'},$row[0]{'nombre'});
    return $Obj;

}


function updateCategoriaXMateria($id,$nombre){
	if($insertrow = self::$db->updateRow("UPDATE public.categoriaxmateria SET nombre= ?   WHERE idcategoria= ?", array("{$nombre}", $id))){
        return 1;
    }
         return 0;
}

function deleteCategoriaXMateria($id){
	if($deleterow = self::$db->deleteRow("DELETE FROM public.categoriaxmateria WHERE idcategoria= ?", array("{$id}"))){
        return 1;
    }
          return 0;
}

function createCategoriaxMateria($nombre){
 if( $insertarrow = self::$db->insertRow("INSERT INTO public.categoriaxmateria (nombre) VALUES (?)", array ("{$nombre}"))){
     return 1;
 }
    return 0;

}

}
?>

