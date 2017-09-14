<?php
/**
 *
 */
class CategoriaXMateria
{
  private $idcategoriamateria;
  private $nombrecategoria;

  function __construct($id, $nombre)
  {
    $this->idcategoriamateria=$id;
    $this->nombrecategoria=$nombre;
      
  }
  public function setIdCategoriaMateria($id)
  {
     $this->$idcategoriamateria=$id;    # code...
  }
  public function getIdCategoriaMateria(){
      //echo "get $this->idcategoriamateria";
    return $this->idcategoriamateria;
  }
    public function setNombreCategoria($nom){
        $this->nombrecategoria=$nom;
    }
    public function getNombreCategoria(){
       // echo "get $this->nombrecategoria";
        return $this->nombrecategoria;
    }
}



 ?>
