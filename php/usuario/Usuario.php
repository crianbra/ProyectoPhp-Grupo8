<?php

class Usuario
{
    private $idusuario;
    private $nombreusuario;
    private $contrasenia;
    private $personaid;
    
     function __construct($idusuario, $nombreusuario, $contrasenia, $personaid) {
       	$this->idusuario = $idusuario;
       	$this->nombreusuario = $nombreusuario;
        $this->contrasenia = $contrasenia;
       	$this->personaid = $personaid;
     }
 
     function setIdusuario($idusuario){
       $this->idusuario = $idusuario;
     } 
     function getIdusuario(){
       return $this->idusuario;
     }
     function setNombreusuario($nombreusuario){
       $this->nombreusuario = $nombreusuario;
     } 
     function getNombreusuario(){
       return $this->nombreusuario;
     }
     function setContrasenia($contrasenia){
       $this->contrasenia = $contrasenia;
     } 
     function getContrasenia(){
       return $this->contrasenia;
     }
     function setPersonaid($personaid){
       $this->personaid = $personaid;
     } 
     function getPersonaid(){
       return $this->personaid;
     }
    
}

?> 
