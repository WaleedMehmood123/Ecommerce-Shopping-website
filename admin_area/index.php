<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
     <!-- Bootstrap Css Link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
     <!-- Font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- Css file -->
    <link rel="stylesheet" href="../style.css">

<style>
    .admin_image{
    width: 100px;
    object-fit: contain;
}
.footer{
    position: absolute;
    bottom: 0;
}
</style>    
    
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img src="../images/logo1.png" alt="online Shopping" class="logo">
            <nav class="navbar navbar-expand-lg navbar-light bg-info">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Welcome Guest</a>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>

    <!-- second child -->
    <div class="bg-light">
        <h3 class="text-center p-2">Manage Details</h3>
    </div>

    <!-- third child -->
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="p-3">
                <a href="#"><img src="../images/blue-car.jpg" alt="profile pic" class="admin_image"></a>
                <p class="text-light text-center">Admin Name</p>
            </div>
            <div class="button text-center p-3">
            <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1 py-1 px-3">Insert Products</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1 py-1 px-3">View Products</a></button>
            <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1 py-1 px-3">Insert Categories</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1 py-1 px-3">View Categories</a></button>
            <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1 py-1 px-3">Insert Brands</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1 py-1 px-3">View Brands</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1 py-1 px-3">All Orders</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1 py-1 px-3">All Payments</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1 py-1 px-3">List Users</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1 py-1 px-3">Logout</a></button>
        </div>
        </div>
    </div>
    </div>

    <!-- fourth child -->
    <div class="container my-3">
        <?php
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
        if(isset($_GET['insert_brand'])){
            include('insert_brands.php');
        }
        ?>
    </div>
    
    <!-- last child -->
    <div class="bg-info p-3 text-center footer">
        <p>All Rights Reserved @ Developed By Waleed 2023</p>
    </div>
    </div>


<!-- Bootstrap JS Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>