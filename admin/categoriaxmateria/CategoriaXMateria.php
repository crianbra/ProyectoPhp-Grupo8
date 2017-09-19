<?php
/**
 *
 */
class CategoriaXMateria
{
  private $idcategoria;
  private $nombre;

  function __construct($id, $nombre)
  {
    $this->idcategoria=$id;
    $this->nombre=$nombre;
      
  }
  public function setIdCategoriaMateria($id)
  {
     $this->$idcategoria=$id;    # code...
  }
  public function getIdCategoriaMateria(){
      //echo "get $this->idcategoriamateria";
    return $this->idcategoria;
  }
    public function setNombreCategoria($nom){
        $this->nombre=$nom;
    }
    public function getNombreCategoria(){
       // echo "get $this->nombrecategoria";
        return $this->nombre;
    }
}



 ?>
