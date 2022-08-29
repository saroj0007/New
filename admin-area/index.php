<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
</head>
<body>

<div class="container-fluid p-0">
    <!-- first-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img src="../images/logo.jpg" alt="" class="logo" >
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">welcome admin</a>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>

<!--second-->
<div class="bg-light">
    <h3 class="text-center p-2">Manage details</h3>
</div>



<!--third-->
<div class="row">
    <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
        <div class="px-3"></div>
        <div>
            <a href=""><img src="../images/carts.jpg" class="admin_image"></a>
            <p class="text-light text-center">Admin Name</p>
        </div>
        <div class="button text-center">
        <button><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
        <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert categories</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
        <button><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">All payment</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">List users</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>        </div>
    </div>
</div>

<div class="container my-3">
    <?php
if(isset($_GET['insert_category']))
{
include('insert_categories.php');

}

if(isset($_GET['insert_brands']))
{
include('insert_brands.php');

}
    ?>
</div>
<div class="bg-info p-3 text-center">
  <p>All rights reserved O- Designed by BCA Team</p>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>
</html>