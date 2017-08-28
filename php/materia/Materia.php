<?php
class Materia
{
    private $idalumno;
    private $descripcion;
    private $usuarioid;
    
     function __construct($idalumno, $descripcion, $usuarioid) {
       	$this->idalumno = $idalumno;
       	$this->descripcion = $descripcion;
        $this->usuarioid = $usuarioid;
      
     }
    
     function setIdAlumno($idalumno){
       $this->idalumno = $idalumno;
     } 
     function getIdAlumno(){
       return $this->idalumno;
     } 
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     }
     function setUsuarioid($usuarioid){
       $this->usuarioid = $usuarioid;
     } 
     function getUsuarioid(){
       return $this->usuarioid;
     }
     
}
?> 
