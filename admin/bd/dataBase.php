<?php



class dataBase
{
  public $isConnected;
  protected $datab;

 private $host      = "ec2-54-225-88-199.compute-1.amazonaws.com";
  private $username  = "uzxaqhjmjxncxa";
  private $password  = "d0747a93621a7131e779199b9ab67e5457476bf8a081eb9b897d473d5b950e74";
  private $dbname    = "d6pba8juduci4s";
 /*
  private $host      = "localhost";
  private $username  = "postgres";
  private $password  = "postgres";
  private $dbname    = "educaciononline";*/



  public function __construct($username, $password, $host, $dbname, $options=array()){
    $this->isConnected = true;

    try { 
      $this->datab = new PDO("pgsql:host={$host};dbname={$dbname}", $username, $password, $options);
      $this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } 
    catch(PDOException $e) { 
      $this->isConnected = false;
      throw new Exception($e->getMessage());
    }
  }

  public function Disconnect(){
    $this->datab = null;
    $this->isConnected = false;
  }

  public function getRow($query, $params=array()){
    try{ 
      $stmt = $this->datab->prepare($query); 
      $stmt->execute($params);
      return $stmt->fetch();  
      }catch(PDOException $e){
      throw new Exception($e->getMessage());
    }
  }

  public function getRows($query, $params=array()){
    try{ 
      $stmt = $this->datab->prepare($query); 
      $stmt->execute($params);
      return $stmt->fetchAll();       
      }catch(PDOException $e){
      throw new Exception($e->getMessage());
    }       
  }

  public function insertRow($query, $params){
    try{ 
      $stmt = $this->datab->prepare($query); 
      $stmt->execute($params);
      }catch(PDOException $e){
      throw new Exception($e->getMessage());
    }           
  }

  public function updateRow($query, $params){
    return $this->insertRow($query, $params);
  }

  public function deleteRow($query, $params){
    return $this->insertRow($query, $params);
  }
}

?>
