<?php
class Materia
{
    private $idmateria;
    private $nombremateria;
    private $idcategoriaxmateria_fx;
    
     function __construct($idmateria, $nombremateria, $idcategoriaxmateria) {
       	$this->idmateria = $idmateria;
       	$this->nombremateria = $nombremateria;
        $this->idcategoriaxmateria_fk = $idcategoriaxmateria;
      
     }
    
     function setIdMateria($id){
       $this->idMateria = $id;
     } 
     function getIdMateria(){
       return $this->idmateria;
     } 
     function setNombreMateria($nombre){
       $this->nombremateria = $nombre;
     } 
     function getNombreMateria(){
       return $this->nombremateria;
     }
     function setIdCategoriaxMateria($idc){
       $this->idcategoriaxmateria_fk = $idc;
     } 
     function getIdCategoriaXMateria(){
       return $this->idcategoriaxmateria_fk;
     }
     
}
?> 
