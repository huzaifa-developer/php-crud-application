<?php

class Database{
private $hostname = "localhost";
private $username = "root";
private $password = "";
private $dbname = "oopcrud";
public $conn;

function get_connection(){

$this->conn = new mysqli($this->hostname,$this->username,$this->password,$this->dbname);

if($this->conn->connect_error){
    echo "Connection failed";
}else{
   return $this->conn;
}


}



}


$obj = new Database();
$obj->get_connection();



?>