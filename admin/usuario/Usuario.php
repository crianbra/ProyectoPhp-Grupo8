<?php

class Usuario
{
    private $idusuario;
    private $nombreusuario;
    private $contrasenia;
    private $persona_id;
    private $perfil;//variable estatica llamada perfil
    public static $rol;
    
     function __construct($idusuario, $nombreusuario, $contrasenia, $perfil, $persona_id) {
       	$this->idusuario = $idusuario;
       	$this->nombreusuario = $nombreusuario;
        $this->contrasenia = $contrasenia;
       	$this->persona_id = $persona_id;
        $this->perfil= $perfil;
     }
 
     function setIdusuario($idusuario){
       $this->idusuario = $idusuario;
     } 
     function getIdusuario(){
       return $this->idusuario;
     }
   
    public static function  getRol($p){
        static $rol;
        $rol=$p;
        return $rol;
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
     function setPersona_id($persona_id){
       $this->persona_id = $persona_id;
     } 
     function getPersona_id(){
       return $this->persona_id;
     }
     function setPerfil($perfil){
       $this->perfil = $perfil;
     } 
     function getPerfil(){
       return $this->perfil;
     }
    
}

?> 
