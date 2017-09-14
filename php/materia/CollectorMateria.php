<?php
include_once('MateriaClass.php');
include $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/php/bd/Collector.php';
class MateriaCollector extends Collector
{
  
  function showMaterias() {
    $rows = self::$db->getRows("SELECT * FROM materia ");        
    
    $arrayMateria= array();
     
    foreach ($rows as $c){
      $aux = new Materia($c{'idmateria'},$c{'nombremateria'}, $c{'idcategoriamateria_fk'});
      array_push($arrayMateria, $aux);
    }
    return $arrayMateria;        
  }
  function showMateria($id){
    
    $row = self::$db->getRows("SELECT * FROM materia WHERE idmateria='$id'");
      
    $Obj = new Materia($row[0]{'idmateria'},$row[0]{'nombremateria'}, $row[0]{'idcategoriamateria_fk'});
    return $Obj;
}
function updateMateria($id,$nombre, $idc){
    
	if($insertrow = self::$db->updateRow("UPDATE public.materia SET nombremateria= ? , idcategoriamateria_fk= ?  WHERE idmateria= ?", array("{$nombre}","{$idc}", "{$id}")))
    {return 1;
    }
    return 0;
}
function deleteMateria($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.materia WHERE idmateria= ?", array("{$id}"));
}
function createMateria($nombremateria, $idcategoriaxmateria){
    
  if($insertarrow = self::$db->insertRow("INSERT INTO public.materia (nombremateria,idcategoriamateria_fk) VALUES (?,?)", array ("{$nombremateria}", "{$idcategoriaxmateria}"))){  
      return 1;
  }
    return 0;
}
}
?>
