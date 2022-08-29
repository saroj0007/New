<?php
include ('includes/connect.php');



function getproducts(){
    global $con;
    if(!isset($_GET['categories'])){
      if(!isset($_GET['brand']))
    {
    $select_query = "select * from `products` order by rand() LIMIT 0,9";
$result_query = mysqli_query($con,$select_query);
// $row = mysqli_fetch_assoc($result_query);
while ($row = mysqli_fetch_assoc($result_query)){
  $product_id = $row['product_id'];
  $product_title = $row['product_title'];
  $product_description = $row['product_description'];
  $product_image1 = $row['product_image1'];
  $product_price = $row['product_price'];
  $categories_id = $row['categories_id'];
  $brand_id = $row['brand_id'];
  echo "  <div class='col-md-4 mb-2'>
  <div class='card' >
  <img src='./admin-area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
  <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_description</p>
    <a href='#' class='btn btn-info'>Add to carts</a>
    <a href='#' class='btn btn-secondary'>View More</a>
  </div>
</div>
</div>";



}
}
    }
  }

//get all products
function get_all_products(){
  global $con;
  if(!isset($_GET['categories'])){
    if(!isset($_GET['brand']))
  {
  $select_query = "select * from `products` order by rand()";
$result_query = mysqli_query($con,$select_query);
// $row = mysqli_fetch_assoc($result_query);
while ($row = mysqli_fetch_assoc($result_query)){
$product_id = $row['product_id'];
$product_title = $row['product_title'];
$product_description = $row['product_description'];
$product_image1 = $row['product_image1'];
$product_price = $row['product_price'];
$categories_id = $row['categories_id'];
$brand_id = $row['brand_id'];
echo "  <div class='col-md-4 mb-2'>
<div class='card' >
<img src='./admin-area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
  <h5 class='card-title'>$product_title</h5>
  <p class='card-text'>$product_description</p>
  <a href='#' class='btn btn-info'>Add to carts</a>
  <a href='#' class='btn btn-secondary'>View More</a>
</div>
</div>
</div>";

}
}
  }
}

// unique_categories

  function get_unique_categories(){
    global $con;
    if(isset($_GET['categories'])){
      $categories_id = $_GET['categories'];
    $select_query = "select * from `products` where categories_id = $categories_id";
$result_query = mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows == 0){
  echo "<h2 class='text-center text-danger'>No stock for this categories</h2>";
}
// $row = mysqli_fetch_assoc($result_query);
while ($row = mysqli_fetch_assoc($result_query)){
  $product_id = $row['product_id'];
  $product_title = $row['product_title'];
  $product_description = $row['product_description'];
  $product_image1 = $row['product_image1'];
  $product_price = $row['product_price'];
  $categories_id = $row['categories_id'];
  $brand_id = $row['brand_id'];
  echo "  <div class='col-md-4 mb-2'>
  <div class='card' >
  <img src='./admin-area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
  <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_description</p>
    <a href='#' class='btn btn-info'>Add to carts</a>
    <a href='#' class='btn btn-secondary'>View More</a>
  </div>
</div>
</div>";
}
}
}


// unique_brands

function get_unique_brands(){
  global $con;
  if(isset($_GET['brand'])){
  $brand_id = $_GET['brand'];
  $select_query = "select * from `products` where brand_id = $brand_id";
$result_query = mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows == 0){
echo "<h2 class='text-center text-danger'>No brands available here</h2>";
}
// $row = mysqli_fetch_assoc($result_query);
while ($row = mysqli_fetch_assoc($result_query)){
$product_id = $row['product_id'];
$product_title = $row['product_title'];
$product_description = $row['product_description'];
$product_image1 = $row['product_image1'];
$product_price = $row['product_price'];
$categories_id = $row['categories_id'];
$brand_id = $row['brand_id'];
echo "  <div class='col-md-4 mb-2'>
<div class='card' >
<img src='./admin-area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
  <h5 class='card-title'>$product_title</h5>
  <p class='card-text'>$product_description</p>
  <a href='#' class='btn btn-info'>Add to carts</a>
  <a href='#' class='btn btn-secondary'>View More</a>
</div>
</div>
</div>";
}
}
}
  




function getbrands(){
    global $con;
    $select_brands="select * from `brands`";
    $result_brands=mysqli_query($con,$select_brands);
    while($row_data=mysqli_fetch_assoc( $result_brands)){
      $brand_title=$row_data['brand_title'];
      $brand_id=$row_data['brand_id'];
     echo "<li class='nav-item'>
     <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
   </li>";
    }
}



function getcategories(){
    global $con;
    $select_categories="select * from `categories`";
    $result_categories=mysqli_query($con,$select_categories);
    $row_data=mysqli_fetch_assoc( $result_categories);
    while($row_data=mysqli_fetch_assoc( $result_categories)){
      $categories_title=$row_data['categories_title'];
      $categories_id=$row_data['categories_id'];
     echo "<li class='nav-item'>
     <a href='index.php?categories=$categories_id' class='nav-link text-light'>$categories_title</a>
   </li>";
    }
}

// search products
function search_products(){
  global $con;
  if(isset($_GET['search_data_product'])){
  $search_data_value = $_GET['search_data'];
  }
  
  $search_query="select * from `products` where product_keywords like '%$search_data_value%'";
$result_query=mysqli_query($con,$search_query);

$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows == 0){
  echo "<h2 class='text-center text-danger'>No results match</h2>";
}
while($row = mysqli_fetch_assoc($result_query))
{
  $product_id = $row['product_id'];
  $product_title = $row['product_title'];
  $product_description = $row['product_description'];
  $product_image1 = $row['product_image1'];
  $product_price = $row['product_price'];
  $categories_id = $row['categories_id'];
  $brand_id = $row['brand_id'];
echo "  <div class='col-md-4 mb-2'>
<div class='card' >
<img src='./admin-area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
  <h5 class='card-title'>$product_title</h5>
  <p class='card-text'>$product_description</p>
  <a href='#' class='btn btn-info'>Add to carts</a>
  <a href='./product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
</div>
</div>
</div>";
}
}
?>
