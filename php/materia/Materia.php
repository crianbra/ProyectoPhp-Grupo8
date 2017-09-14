<?php
class Materia
{
    private $idmateria;
    private $nombremateria;
    private $idcategoriamateria;

     function __construct($idmateria, $nombremateria, $idcategoriamateria) {
       	$this->idmateria = $idmateria;
       	$this->nombremateria = $nombremateria;
        $this->idcategoriamateria = $idcategoriamateria;

     }

     function setIdMateria($id){
       $this->idmateria = $id;
     }
     function getIdMateria(){
       return $this->idmateria;
     }
     function setNombreMateria($nm){
       $this->nombremateria = $nm;
     }
     function getNombreMateria(){
       return $this->nombremateria;
     }
     function setIdCategoriaMateria($idcategoriamateria){
       $this->idcategoriamateria = $idcategoriamateria;
     }
     function getIdCategoriaMateria(){
       return $this->idcategoriamateria;
     }

}
?>
