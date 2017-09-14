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
      $aux = new CategoriaXMateria($c{'idcategoriamateria'},$c{'nombrecategoria'});
         
        array_push($array, $aux);  
    }
    return $array;        
  }

  function showCategoriaXMateria($id){
    $row = self::$db->getRows("SELECT * FROM categoriaxmateria where idcategoriamateria= ? ", array("{$id}"));

    $Obj = new CategoriaXMateria($row[0]{'idcategoriamateria'},$row[0]{'nombrecategoria'});
    return $Obj;

}


function updateCategoriaXMateria($id,$nombre){
	if($insertrow = self::$db->updateRow("UPDATE public.categoriaxmateria SET nombrecategoria= ?   WHERE idcategoriamateria= ?", array("{$nombre}", $id))){
        return 1;
    }
         return 0;
}

function deleteCategoriaXMateria($id){
	if($deleterow = self::$db->deleteRow("DELETE FROM public.categoriaxmateria WHERE idcategoriamateria= ?", array("{$id}"))){
        return 1;
    }
          return 0;
}

function createCategoriaxMateria($nombre){
 if( $insertarrow = self::$db->insertRow("INSERT INTO public.categoriaxmateria (nombrecategoria) VALUES (?)", array ("{$nombre}"))){
     return 1;
 }
    return 0;

}

}
?>

