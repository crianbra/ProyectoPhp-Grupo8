<?php

class Persona
{
    private $idPersona;
    private $nombre;
    private $apellido;
    private $ciudad;
    private $direccion;
    private $edad;
    private $telefono;
    private $correo;
    
     function __construct($idPersona, $nombre, $apellido, $ciudad, $direccion, $edad, $telefono, $correo) {
       	$this->idPersona = $idPersona;
       	$this->nombre = $nombre;
	$this->apellido = $apellido;
       	$this->ciudad = $ciudad;
	$this->direccion = $direccion;
       	$this->edad = $edad;
	$this->telefono = $telefono;
       	$this->correo = $correo;
     }
    
     function setIdPersona($idPersona){
       $this->idPersona = $idPersona;
     } 
     function getIdPersona(){
       return $this->idPersona;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setApellido($apellido){
       $this->apellido = $apellido;
     } 
     function getApellido(){
       return $this->apellido;
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
    
}

?> 
