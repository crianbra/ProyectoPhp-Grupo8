<?php

class Ayudante
{
    private $idayudante;
    private $descripcion;
    private $usuarioid;

    
     function __construct($idayudante, $descripcion, $usuarioid) {
       	$this->idayudante = $idayudante;
       	$this->descripcion = $descripcion;
        $this->usuarioid = $usuarioid;
      
     }
    
     function setIdAyudante($idayudante){
       $this->idayudante = $idayudante;
     } 
     function getIdAyudante(){
       return $this->idayudante;
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
