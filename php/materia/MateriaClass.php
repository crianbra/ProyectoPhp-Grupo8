<?php
class Materia
{
    private $idmateria;
    private $nombremateria;
    private $ayudante_id;
    private $alumno_id;
    private $categoria_id;
    
     function __construct($idmateria, $nombremateria, $categoria_id, $alumno,$ayudante) {
       	$this->idmateria = $idmateria;
       	$this->nombremateria = $nombremateria;
        $this->categoria_id = $categoria_id;
        $this->ayudante_id= $ayudante;
        $this->alumno_id = $alumno;
         
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
    function setALumno($alu){
        $this->alumno_id = $alu;
    }
    function getAlumno(){
        return $this->alumno_id;
    }
    function setAyudante($ayudante){
        $this->ayudante_id= $ayudante;
    }
    function getAyudante(){
        $this->ayudante_id;
    }
     function setIdCategoriaxMateria($idc){
       $this->categoria_id = $idc;
     } 
     function getIdCategoriaXMateria(){
       return $this->categoria_id;
     }
     
}
?> 
