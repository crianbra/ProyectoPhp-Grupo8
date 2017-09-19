<?php

class Materia
{
    private $idmateria;
    private $nombre;
    private $ayudante_id;
    private $alumno_id;
    private $categoria_id;

     function __construct($idmateria,$nombre,$ayudante_id,$alumno_id,$categoria_id) {
       $this->idmateria = $idmateria;
       $this->nombre = $nombre;
       $this->ayudante_id = $ayudante_id;
        $this->alumno_id = $alumno_id;
       $this->categoria_id = $categoria_id;

     }
    
     function setMateria($idmateria){
       $this->idmateria= $idmateria;
     } 
     function getIdMateria(){
       return $this->idmateria;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
  
 function setAyudante_id($ayudante_id){
       $this->ayudante_id = $ayudante_id;
     } 
     function getAyudante_id(){
       return $this->ayudante_id;
     } 

      function setAlumno_id($alumno_id){
       $this->alumno_id = $alumno_id;
     } 
     function getAlumno_id(){
       return $this->alumno_id;
     } 

      function setCategoria_id($categoria_id){
       $this->categoria_id = $categoria_id;
     } 
     function getCategoria_id(){
       return $this->categoria_id;
     } 


}

?> 
