<?php
include_once('MateriaClass.php');
include $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/php/bd/Collector.php';
class MateriaCollector extends Collector
{
  
  function showMaterias() {
    $rows = self::$db->getRows("SELECT * FROM materia ");        
    
    $arrayMateria= array();
     
    foreach ($rows as $c){
      $aux = new Materia($c{'idmateria'},$c{'nombremateria'}, $c{'categoria_id'},$c{'alumno_id'},$c{'ayudante_id'});
      array_push($arrayMateria, $aux);
    }
    return $arrayMateria;        
  }
  function showMateria($id){
    
    $row = self::$db->getRows("SELECT * FROM materia WHERE idmateria='$id'");
      
    $Obj = new Materia($row[0]{'idmateria'},$row[0]{'nombremateria'}, $row[0]{'categoria_id'},$row[0]{'alumno_id'},$row[0]{'ayudante_id'});
    return $Obj;
}
function updateMateria($id,$nombre, $idc,$ayudante,$alumno){
    
	if($insertrow = self::$db->updateRow("UPDATE public.materia SET nombremateria= ? , categoria_id= ? , ayudante_id= ? , alumno_id= ?  WHERE idmateria= ?", array("{$nombre}","{$idc}" , "{$ayudante}","{$alumno}", "{$id}")))
    {
        return 1;
    }else
    return 1;
}
function deleteMateria($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.materia WHERE idmateria= ?", array("{$id}"));
}
function createMateria($nombremateria, $idcategoriaxmateria, $ayudante, $alumno){
    
  if($insertarrow = self::$db->insertRow("INSERT INTO public.materia (nombremateria,categoriamateria_id, ayudante_id, alumno_id) VALUES (?,?,?,?)", array ("{$nombremateria}", "{$idcategoriaxmateria}", "{$ayudante}", "{$alumno}"))){  
      return 1;
  }
    return 0;
}
}
?>
