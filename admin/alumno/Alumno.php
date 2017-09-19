<?php

class Alumno
{
    private $idalumno;
    private $descripcion;
    private $usuario_id;

     function __construct($idalumno,$descripcion,$usuario_id) {
       $this->idalumno = $idalumno;
       $this->descripcion = $descripcion;
       $this->usuario_id = $usuario_id;
        
     }
    
     function setAlumno($idalumno){
       $this->idalumno= $idalumno;
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
  

  function setUsuario_id($usuario_id){
       $this->usuario_id = $usuario_id;
     } 
     function getUsuario_id(){
       return $this->usuario_id;
     } 



}

?> 
