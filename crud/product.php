<?php

class product{

public $id;
public $name;
public $price;
public $color;
public $image;

private $table = "product";

private $conn;

function __construct($db){
    $this->conn = $db;
}


public function create(){

 $query= "INSERT INTO `product`( `Product_name`, `product_price`, `product_image`, `product_color`) VALUES (?,?,?,?)";
$preparedquery = $this->conn->prepare($query);
$preparedquery->bind_param("siss",$this->name,$this->price,$this->image,$this->color);

if($preparedquery->execute()){
   return $preparedquery->execute();
}

else{
    echo "sorry ! try again";
}

}

public function read(){
    
}

public function update(){
    
}

public function delete(){
    
}


}


?>