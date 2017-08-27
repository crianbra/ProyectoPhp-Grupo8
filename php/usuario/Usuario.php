<?php

class Usuario
{
    private $idUsuario;
    private $nombreUsuario;
    private $contrasenia;
    private $idPersona;
    
     function __construct($idUsuario, $nombreUsuario, $contrasenia, $idPersona) {
       	$this->idUsuario = $idUsuario;
       	$this->nombreUsuario = $nombreUsuario;
	$this->contrasenia = $contrasenia;
       	$this->idPersona = $idPersona;
     }
 
     function setIdUsuario($idUsario){
       $this->idUsuario = $idUsuario;
     } 
     function getIdUsuario(){
       return $this->idUsuario;
     }
     function setNombreUsuario($nombreUsuario){
       $this->nombreUsuario = $nombreUsuario;
     } 
     function getNombreUsuario(){
       return $this->nombreUsuario;
     }
     function setContrasenia($contrasenia){
       $this->contrasenia = $contrasenia;
     } 
     function getContrasenia(){
       return $this->contrasenia;
     }
     function setIdPersona($idPersona){
       $this->idPersona = $idPersona;
     } 
     function getIdPersona(){
       return $this->idPersona;
     }
    
}

?> 
