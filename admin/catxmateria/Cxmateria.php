<?php

class Cxmateria
{
    private $idcategoria;
    private $nombre;



     function __construct($idcategoria,$nombre) {
       $this->idcategoria = $idcategoria;
       $this->nombre = $nombre;
          
     }
    
     function setCategoria($idcategoria){
       $this->idcategoria= $idcategoria;
     } 
     function getIdCategoria(){
       return $this->idcategoria;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
  

}

?> 
