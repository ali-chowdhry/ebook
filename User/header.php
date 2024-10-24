<?php
include("../connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Active Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>
<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Active.</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="Featured.php">Shop</a></li>
          <li><a href="Author.php">Author</a></li>
          <li><a href="Publisher.php">Publisher</a></li>
       
          <li class="dropdown"><a href="#"><span>Category</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <?php
          $fetch_query = "SELECT * FROM `category`";
          $result = mysqli_query($conn, $fetch_query);
          if ($result) {
            while ($row = mysqli_fetch_array($result)) {
          ?>
          <ul>
              <li><a href="#"><?php echo $row[1]; ?></a></li>
              <li><a href="#"><?php echo $row[1]; ?></a></li>
              <li><a href="#"><?php echo $row[1]; ?></a></li>
              <li><a href="#"><?php echo $row[1]; ?></a></li>
            </ul>
            <?php 
          }
        } else {
          echo "<p>No books found.</p>";
        }
          ?>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="cart.php"><i class="bi bi-cart" height="50px" width="20px"; ></i></a></li>
          
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>


    </div>
  </header>
  
  <main class="main">