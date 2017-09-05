<?php
class AlumnoxMateria
{
    private $idmateria;
    private $idalumno;

     function __construct($idalumno, $idmateria {
       	$this->idalumno = $idalumno;
       	$this->materia = $idmateria;

     }

     function setIdAlumno($idalumno){
       $this->idalumno = $idalumno;
     }
     function getIdAlumno(){
       return $this->idalumno;
     }
     function setMateria($materia){
       $this->materia = $materia;
     }
     function getIdMateria(){
       return $this->idmateria;
     }
  

}
?>
