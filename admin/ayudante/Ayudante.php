<?php

class Ayudante
{
    private $idayudante;
    private $descripcion;
    private $usuario_id;
    private $reconocimiento_id;


     function __construct($idayudante,$descripcion,$usuario_id,$reconocimiento_id) {
       $this->idayudante = $idayudante;
       $this->descripcion = $descripcion;
       $this->usuario_id = $usuario_id;
       $this->reconocimiento_id = $reconocimiento_id;

        
     }
    
     function setAyudante($idayudante){
       $this->idayudante= $idayudante;
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
  

  function setUsuario_id($usuario_id){
       $this->usuario_id = $usuario_id;
     } 
     function getUsuario_id(){
       return $this->usuario_id;
     } 

     function setReconocimiento_id($reconocimiento_id){
       $this->reconocimiento_id = $reconocimiento_id;
     } 
     function getReconocimiento_id(){
       return $this->reconocimiento_id;
     } 



}

?> 
