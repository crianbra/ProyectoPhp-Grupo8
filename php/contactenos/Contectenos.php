<?php

class Contactenos
{
    private $idcontactenos;
    private $nombre;
    private $email;
    private $telefono;
    private $materia;
    private $mensaje;

     function __construct($idcontactenos,$nombre,$email,$telefono,$materia,$mensaje) {
       $this->idcontactenos = $idcontactenos;
       $this->nombre = $nombre;
       $this->email = $email;
        $this->telefono = $telefono;
       $this->materia = $materia;
        $this->mensaje = $mensaje;
     }
    
     function setIdContactenos($idcontactenos){
       $this->idcontactenos= $idcontactenos;
     } 
     function getIdContactenos(){
       return $this->idcontactenos;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
  

  function setEmail($email){
       $this->email = $email;
     } 
     function getEmail(){
       return $this->email;
     } 


function setTelefono($telefono){
       $this->telefono = $telefono;
     } 
     function getTelefono(){
       return $this->telefono;
     } 

function setMateria ($materia){
       $this->materia = $materia;
     } 
     function getMateria(){
       return $this->materia;
     } 

function setMensaje ($mensaje){
       $this->mensaje = $mensaje;
     } 
     function getMensaje(){
       return $this->mensaje;
     } 

}

?> 