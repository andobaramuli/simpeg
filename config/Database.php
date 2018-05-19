<?php
class Database
{
  protected $db_host, $db_user, $db_pass, $db_name, $connection;

  public function __construct($db_host,$db_user,$db_pass,$db_name){
    $this->db_host = $db_host;
    $this->db_user = $db_user;
    $this->db_pass = $db_pass;
    $this->db_name = $db_name;
  }

  public function connectToMySQL(){
    if(isset($this->db_host) && isset($this->db_user) && (isset($this->db_pass) || $this->db_pass == null)){
      $this->connection = @mysqli_connect($this->db_host,$this->db_user,$this->db_pass);
      if($this->connection){
        if(isset($this->db_name)){
          @mysqli_select_db($this->connection, $this->db_name);
          return $this->connection;
        }else{
          die("Can not find the selected database");
          return $this->connection;
        }
      }else{
        die("Connection Failed: ".mysqli_error());
      }
    }else{
      die("Connection Failed: ".mysqli_error());
    }
  }

  public function disconnectToMySQL(){
    if($this->connection){
      @mysqli_close($this->connection);
    }else{
      die("No Connection to the database");
    }
  }
}

?>
