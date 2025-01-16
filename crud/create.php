<?php

include_once 'database.php';
include_once 'product.php';
$database =  new Database();
$db = $database->get_connection();
$table = new product($db);

if(isset($_POST['btnsubmit'])){
  $table->name=   $_POST['product_name'];
  $table->price=   $_POST['product_price'];
  $table->image=   $_POST['product_image'];
  $table->color=   $_POST['product_color'];


  $table->create();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Create=page</title>
</head>
<body>
<div class="container">
    <div class="row bg-success text-center text-white p-3 rounded">
        <div class="col-md-12">
            <h1>OOP Create Form</h1>
        </div>
    </div>

    <form class="mt-4" action="create.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Name </label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="product_name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Price </label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="product_price">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Image </label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="product_image">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Color </label>
    <input type="color" class="form-control" id="exampleInputPassword1" name="product_color">
  </div>
  
<input type="submit" value="Create data" class="btn btn-primary" name="btnsubmit">
</form>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>