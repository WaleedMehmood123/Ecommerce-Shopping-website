<!-- connect file -->
<?php
include('includes/connect.php');
include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Css Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Css file -->
    <link rel="stylesheet" href="style.css">
    <title>Ecommerce Website using PHP and MySQL</title>
</head>
<body>
  <!-- first child -->
<nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <img src="images/logo1.png" alt="online Shopping" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item(); ?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: <?php total_cart_price(); ?>/-</a>
        </li>
       </ul>
      <form class="d-flex" role="search" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" name="search_data" aria-label="Search">
        <input type="submit" value="search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>

<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
    <li class="nav-item">
      <a class="nav-link" href="#">Welcome guest</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Login</a>
    </li>
  </ul>
</nav>

<!-- third child -->
<div class="bg-light">
  <h3 class="text-center">Hidden store</h3>
  <p class="text-center">Communications is at the heart of e-commerce and community</p>
</div>

<!-- fourth child -->
<div class="container-fluid">
<div class="row">
  <div class="col-md-10">
    <!-- product -->
    <div class="row">
      <!-- fetching products -->
      <?php
      // calling function
      get_all_products();
      get_unique_categories();
      get_unique_brands();
      ?>
    </div>
  </div>
  <div class="col-md-2 bg-secondary p-0">
    <!-- brands to be displayed -->
  <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
      <a class="nav-link text-light" href="#"><h5>Delivery Brands</h5></a>
    </li>
    <?php
    getbrands();
    ?>
  </ul>

  <!-- Categories to be displayed -->
  <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
      <a class="nav-link text-light" href="#"><h5>Categories</h5></a>
    </li>
    <?php
    getcategories();
    ?>
  </ul>
  </div>
</div>
</div>

<!-- last child -->
<?php
include('includes/footer.php');
?>
<!-- Bootstrap JS Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>