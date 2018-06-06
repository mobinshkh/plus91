<?php

function show_product($cat_id, $product_id){
  $products=[
    ['cat_id'=>111,'product_id'=>1,'name'=>'samsung'],
    ['cat_id'=>222,'product_id'=>2,'name'=>'Nokia'],
    ['cat_id'=>333,'product_id'=>3,'name'=>'Oppo'],
    ['cat_id'=>444,'product_id'=>4,'name'=>'Lava'],
    ['cat_id'=>555,'product_id'=>5,'name'=>'MI'],
  ];
  foreach ($products as $product) {   
    if ($product['cat_id']==$cat_id && $product['product_id']==$product_id) {
      return $product;
    }
  }
  return false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Plus91 Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron">
    <h3>Rounting Concept in core PHP By using .htaccess file</h3>   
  </div>
  <?php 
    if(isset($_GET['url'])){
     //echo "<pre>";
     //print_r($_GET);

    $url=$_GET['url'];
    $url=explode('/', $url);


    //print_r($url);
    //echo "</pre>";
    if ($url[0]=='index') {
      $cat_id=$url[1];
      $product_id=$url[2];
      echo "<h4 align='center'>Entered Catagory id=".$cat_id." and Product id=".$product_id."</h4>";
      $data=show_product($cat_id,$product_id);
      if($data){
        echo "<br><h3 align='center'>Data Found: </h3><br>";
        //print_r($data);

        echo "<h4 align='center'> Catagory id= ".$data['cat_id']."<br>Product id= ".$data['product_id']."<br>Product Name= ".$data['name']."</h3>";
      }else{
        echo "<br><h3 align='center'>Product Not Found</h3><br>";
      }
    } 
  }
  ?>      
</div>

</body>
</html>

