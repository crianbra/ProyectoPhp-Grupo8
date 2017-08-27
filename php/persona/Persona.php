<?php

class Persona
{
    private $idpersona;
    private $nombre;
    private $ciudad;
    private $direccion;
    private $edad;
    private $telefono;
    private $correo;
    private $facebook;
    
     function __construct($idpersona, $nombre, $ciudad, $direccion, $edad, $telefono, $correo, $facebook) {
       	$this->idpersona = $idpersona;
       	$this->nombre = $nombre;
        $this->ciudad = $ciudad;
        $this->direccion = $direccion;
       	$this->edad = $edad;
        $this->telefono = $telefono;
       	$this->correo = $correo;
        $this->facebook = $facebook;
     }
    
     function setIdpersona($idpersona){
       $this->idpersona = $idpersona;
     } 
     function getIdpersona(){
       return $this->idpersona;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setCiudad($ciudad){
       $this->ciudad = $ciudad;
     } 
     function getCiudad(){
       return $this->ciudad;
     }
     function setDireccion($direccion){
       $this->direccion = $direccion;
     } 
     function getDireccion(){
       return $this->direccion;
     }
     function setEdad($edad){
       $this->edad = $edad;
     } 
     function getEdad(){
       return $this->edad;
     }
     function setTelefono($telefono){
       $this->telefono = $telefono;
     } 
     function getTelefono(){
       return $this->telefono;
     }
     function setCorreo($correo){
       $this->correo = $correo;
     } 
     function getCorreo(){
       return $this->correo;
     }
     function setFacebook($facebook){
      $this->facebook = $facebook
     }
    function getFacebook(){
       return $this->facebook;
     }
}

?> 
