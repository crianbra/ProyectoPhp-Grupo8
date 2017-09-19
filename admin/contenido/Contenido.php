<?php

class Contenido
{
    private $idcontenido;
    private $descripcion;
    private $materia_id;

     function __construct($idcontenido,$descripcion,$materia_id) {
       $this->idcontenido = $idcontenido;
       $this->descripcion = $descripcion;
       $this->materia_id = $materia_id;
        
     }
    
     function setContenido($idcontenido){
       $this->idcontenido= $idcontenido;
     } 
     function getIdContenido(){
       return $this->idcontenido;
     } 
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
  

  function setMateria_id($materia_id){
       $this->materia_id = $materia_id;
     } 
     function getMateria_id(){
       return $this->materia_id;
     } 



}

?> 
