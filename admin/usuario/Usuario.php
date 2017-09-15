<?php

class Usuario
{
    private $idusuario;
    private $nombreusuario;
    private $contrasenia;
<<<<<<< HEAD:admin/usuario/Usuario.php
    private $persona_id;
    private $perfil;//variable estatica llamada perfil
=======
    private $personaid;
    public static  $perfil;//variable estatica llamada perfil
>>>>>>> aac5bd7ae6cf0ae4383f761c67406e2111a94329:php/usuario/Usuario.php
    
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
   
<<<<<<< HEAD:admin/usuario/Usuario.php
    /*public static function  getPerfil($p){
        static $perfil;
        $perfil=$p;
        return $perfil;
    }*/

=======
    public static function  getPerfil($p){
        static $perfil;
        $perfil=$p;
        return $perfil;
    }
>>>>>>> aac5bd7ae6cf0ae4383f761c67406e2111a94329:php/usuario/Usuario.php
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
