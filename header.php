<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="assests/favicon.ico" type="image/x-icon" sizes="64x64">  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Expo-Ecom</title>

  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <!-- owl-carousel
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- custom css -->
  <link rel="stylesheet" href="style.css">
  <?php
    // require functions.php file
    require ('function.php');
    ?>

</head>

<body>
  <header id="header">
    <div class="strip  px-4 py-1 bg-dark">
      <h1 class="font-size-100 text-light text-center" style="font-family:Apple Chancery, cursive;font-size:43px">ECOM-EXPO</h1>
    </div>

    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid ps-5">
        <a class="navbar-brand" href="index.php">HOME</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-light" href="laptop.php">Laptops</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="mobile.php">Mobiles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="Tv.php">Telivision</a>
            </li>
          </ul>
          <form action="#" class="font-size-14 font-rale">
            <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
              <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
              <span class="px-3 py-2 rounded-pill text-dark bg-light font-size-20"><?php echo count($product_all->getData('cart')); ?></span>
            </a>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <main id="main-site">