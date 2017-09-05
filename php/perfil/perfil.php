<?php

class Perfil
{
    private $idperfil;
    private $nombreperfil;
    
     function __construct($idperfil, $nombreperfil) {
       	$this->idperfil = $idperfil;
       	$this->nombre = $nombre;
      }
    
      function setIdperfil($idperfil){
       $this->idperfil = $idperfil;
      } 
     function getIdperfil(){
       return $this->idperfil;
      } 
     function setNombreperfil($nombreperfil){
       $this->nombreperfil = $nombreperfil;
      } 
     function getNombreperfil(){
       return $this->nombreperfil;
      }
       
}

?> 