<?php

class Reconocimiento
{
    private $idreconocimiento;
    private $descripcion;
    
     function __construct($idreconocimiento, $descripcion) {
       	$this->idreconocimiento = $idreconocimiento;
       	$this->descripcion = $descripcion;
     }
 
     function setIdreconocimiento($idreconocimiento){
       $this->idreconocimiento = $idreconocimiento;
     } 
     function getIdreconocimiento(){
       return $this->idreconocimiento;
     }
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     }
         
}

?> 
