<?php

class Ayudante
{
    private $idcurso;
    private $idalumnoxmateria;
    private $idayudante;

    
     function __construct($idcurso, $idalumnoxmateria, $idayudante) {
       	$this->idcurso = $idcurso;
       	$this->idalumnoxmateria = $idalumnoxmateria;
        $this->idayudante = $idayudante;
      
     }
    
     function setIdCurso($idcurso){
       $this->idcurso = $idcurso;
     } 
     function getIdCurso(){
       return $this->idcurso;
     } 
     function setIdalumnoxmateria($idalumnoxmateria){
       $this->idalumnoxmateria = $idalumnoxmateria;
     } 
     function getIdalumnoxmateria(){
       return $this->idalumnoxmateria;
     }
     function setIdayudante($idayudante){
       $this->idayudante = $idayudante;
     } 
     function getIdayudante(){
       return $this->idayudante;
     }
     
}

?> 
