<?php
class Contenido
{
    private $idcontenido;
    private $descripcion;
    private $materia_id;
    
     function __construct($idcontenido, $des, $materia) {
       	$this->idcontenido = $idcontenido;
       	$this->descripcion = $des;
        $this->materia_id = $materia;
         
     }
    
     function setIdContenido($id){
       $this->idcontenido = $id;
     } 
     function getIdContenido(){
       return $this->idcontenido;
     } 
     function setDescripcion($nombre){
       $this->descripcion = $nombre;
     } 
     function getDescripcion(){
       return $this->descripcion;
     }
    function setMateria($alu){
        $this->materia_id = $alu;
    }
    function getMateria(){
        return $this->materia_id;
    }
}
?> 