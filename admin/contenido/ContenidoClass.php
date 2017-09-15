<?php
class ContenidoClass
{
    private $idcontenido;
    private $descripcion;
    private $materia_id;
    
     function __construct($idcontenido, $descripcion, $materia_id) {
       	$this->idcontenido = $idcontenido;
       	$this->descripcion = $descripcion;
        $this->materia_id = $materia_id;
         
     }
    
     function setIdcontenido($id){
       $this->idcontenido = $id;
     } 
     function getIdcontenido(){
       return $this->idcontenido;
     } 
     function setDescripcion($nombre){
       $this->descripcion = $nombre;
     } 
     function getDescripcion(){
       return $this->descripcion;
     }
    function setMateria_id($alu){
        $this->materia_id = $alu;
    }
    function getMateria_id(){
        return $this->materia_id;
    }
}
?> 