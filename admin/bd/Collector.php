<?php
include_once('dataBase.php');

// Define configuration
/*define("DB_HOST", "ec2-54-225-88-199.compute-1.amazonaws.com");
define("DB_USER", "uzxaqhjmjxncxa");
define("DB_PASS", "d0747a93621a7131e779199b9ab67e5457476bf8a081eb9b897d473d5b950e74");
define("DB_NAME", "d6pba8juduci4s");*/

define("DB_HOST", "ec2-54-235-90-125.compute-1.amazonaws.com");
define("DB_USER", "miibzjjmqasrvo");
define("DB_PASS", "7214b15265adb77bc9507330f0509eff2d5e6ae06186022a0143ea2db363857b");
define("DB_NAME", "depacrdvqb96vg");


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
