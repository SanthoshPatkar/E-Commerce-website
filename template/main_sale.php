<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['main_sale_submit'])) {
    $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
  }
}
?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assests/banner1.jpg" class="d-block w-100" height="600px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assests/banner2.jpg" class="d-block w-100" height="600px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assests/banner3.png" class="d-block w-100" height="600px" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- end banner -->

<section id="sales-laptops" style="margin-top: 2%;">
  <h2 class="py-4 font-rubik font-size-30" style="margin-left: 3%;"> Top sales Laptops</h2>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
          <img src="assests/lap-1.jpeg" class="card-img-top" alt="..." height="220px">
          <div class="card-body" style="height: 160px;">
            <h5 class="card-title">Lenovo Ideapad</h5>
            <p class="card-text">(8 GB/1 TB HDD/256 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce GTX
              1650/120Hz) </p>
          </div>
          <ul class="list-group list-group-flush" style="height: 90px;">
            <li class="list-group-item">Processor: Ryzen 5 Hexa Core 4600H</li>
            <li class="list-group-item"><b>Price: ₹62,990</b></li>
          </ul>
          <div class="card-body">
            <form method="post">
              <input type="hidden" name="item_id" value="1">
              <input type="hidden" name="user_id" value="<?php echo 1; ?>">
              <?php
              $x = 1;
              if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
              } else {
                echo '<button type="submit" name="main_sale_submit" class="btn btn-warning form-control">Add to cart </button>';
              }
              ?>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
          <img src="assests/lap-2.jpeg" class="card-img-top" alt="..." height="220px">
          <div class=" card-body" style="height: 160px;">
            <h5 class="card-title">HP Pavilion</h5>
            <p class="card-text"> (16 GB/1 TB HDD/256 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce 1650Ti)
            </p>
          </div>
          <ul class="list-group list-group-flush" style="height: 90px;">
            <li class="list-group-item">Processor: Ryzen 7 Octa Core</li>
            <li class="list-group-item"><b>Price :₹79,990</b></li>
          </ul>
          <div class="card-body">
            <form method="post">
              <input type="hidden" name="item_id" value="2">
              <input type="hidden" name="user_id" value="<?php echo 1; ?>">
              <?php
              $x = 2;
              if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
              } else {
                echo '<button type="submit" name="main_sale_submit" class="btn btn-warning form-control">Add to cart </button>';
              }
              ?>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="card" style="width: 18rem;">
          <img src="assests/lap-3.jpeg" class="card-img-top" alt="..." height="220px">
          <div class=" card-body" style="height: 160px;">
            <h5 class="card-title">MSI GF63</h5>
            <p class="card-text">(8 GB/1 TB HDD/256 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce GTX 1650
              Max)
            </p>
          </div>
          <ul class="list-group list-group-flush" style="height: 90px;">
            <li class="list-group-item">Processor: Core i7 10th Gen/li>
            <li class="list-group-item"><b>price: ₹69,990</b></li>
          </ul>
          <div class="card-body">
          <form method="post">
              <input type="hidden" name="item_id" value="3">
              <input type="hidden" name="user_id" value="<?php echo 1; ?>">
              <?php
              $x = 3;
              if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
              } else {
                echo '<button type="submit" name="main_sale_submit" class="btn btn-warning form-control">Add to cart </button>';
              }
              ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Mobiles -->

<section id="sales-mobiles" style="margin-top: 2%;">
  <h2 class="py-4 font-rubik font-size-40" style="margin-left: 3%;"> Top sales Mobiles</h2>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card" style="width: 17rem;">
          <img src="assests/mobile-1.jpeg" class="card-img-top" style="object-fit: contain;" alt="..." height="350px">
          <div class="card-body" style="height: 160px;">
            <h5 class="card-title">POCO X3 Pro</h5>
            <p class="card-text">8 GB RAM | 128 GB ROM | Expandable Upto 1 TB</p>
            <p class="card-text">48MP camera | 5160 mAh Battery | Snapdragon 860 Processor </p>
          </div>
          <ul class="list-group list-group-flush" style="height: 30px;">
            <li class="list-group-item"><b>Price: ₹20,999</b></li>
          </ul>
          <div class="card-body">
            <form method="post">
              <input type="hidden" name="item_id" value="9">
              <input type="hidden" name="user_id" value="<?php echo 1; ?>">
              <?php
              $x = 9;
              if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
              } else {
                echo '<button type="submit" name="main_sale_submit" class="btn btn-warning form-control">Add to cart </button>';
              }
              ?>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card" style="width: 17rem;">
          <img src="assests/mobile-2.jpeg" class="card-img-top" style="object-fit: contain;" alt="..." height="350px">
          <div class="card-body" style="height: 160px;">
            <h5 class="card-title">vivo X60</h5>
            <p class="card-text">12 GB RAM | 256 GB ROM</p>
            <p class="card-text">48MP camera | 4300 mAh Battery | Snapdragon 870 Processor </p>
          </div>
          <ul class="list-group list-group-flush" style="height: 30px;">
            <li class="list-group-item"><b>Price: ₹39,990</b></li>
          </ul>
          <div class="card-body">
            <form method="post">
              <input type="hidden" name="item_id" value="10">
              <input type="hidden" name="user_id" value="<?php echo 1; ?>">
              <?php
              $x = 10;
              if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
              } else {
                echo '<button type="submit" name="main_sale_submit" class="btn btn-warning form-control">Add to cart </button>';
              }
              ?>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card" style="width: 17rem;">
          <img src="assests/mobile-3.jpeg" class="card-img-top" style="object-fit: contain;" alt="..." height="350px">
          <div class="card-body" style="height: 160px;">
            <h5 class="card-title">realme GT 5G </h5>
            <p class="card-text">8 GB RAM | 128 GB ROM</p>
            <p class="card-text">64MP camera | 4500 mAh Battery | Snapdragon 888 Processor </p>
          </div>
          <ul class="list-group list-group-flush" style="height: 30px;">
            <li class="list-group-item"><b>Price: ₹37,999</b></li>
          </ul>
          <div class="card-body">
            <form method="post">
              <input type="hidden" name="item_id" value="11">
              <input type="hidden" name="user_id" value="<?php echo 1; ?>">
              <?php
              $x = 11;
              if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
              } else {
                echo '<button type="submit" name="main_sale_submit" class="btn btn-warning form-control">Add to cart </button>';
              }
              ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- tv -->

<section id="sales-tv" style="margin-top: 2%;">
  <h2 class="py-4 font-rubik font-size-30" style="margin-left: 3%;"> Top sales Television</h2>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
          <img src="assests/Tv-1.jpeg" class="card-img-top" alt="..." height="220px">
          <div class="card-body" style="height: 100px;">
            <h5 class="card-title">Mi 4A Horizon</h5>
            <p class="card-text"> 80 cm (32 inch) HD Ready LED Smart Android TV </p>
          </div>
          <ul class="list-group list-group-flush" style="height: 90px;">
            <li class="list-group-item">Resolution: HD Ready 1366 x 768 Pixels</li>
            <li class="list-group-item"><b>Price: ₹17,499</b></li>
          </ul>
          <div class="card-body">
            <form method="post">
              <input type="hidden" name="item_id" value="15">
              <input type="hidden" name="user_id" value="<?php echo 1; ?>">
              <?php
              $x = 15;
              if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
              } else {
                echo '<button type="submit" name="main_sale_submit" class="btn btn-warning form-control">Add to cart </button>';
              }
              ?>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
          <img src="assests/Tv-2.jpeg" class="card-img-top" alt="..." height="220px">
          <div class="card-body" style="height: 100px;">
            <h5 class="card-title">SONY</h5>
            <p class="card-text"> 138.8 cm (55 inch) Ultra HD (4K) LED Smart TV </p>
          </div>
          <ul class="list-group list-group-flush" style="height: 90px;">
            <li class="list-group-item">Resolution: Ultra HD (4K) 3840 x 2160 pixels Pixels</li>
            <li class="list-group-item"><b>Price: ₹80,799</b></li>
          </ul>
          <div class="card-body">
            <form method="post">
              <input type="hidden" name="item_id" value="16">
              <input type="hidden" name="user_id" value="<?php echo 1; ?>">
              <?php
              $x = 16;
              if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
              } else {
                echo '<button type="submit" name="main_sale_submit" class="btn btn-warning form-control">Add to cart </button>';
              }
              ?>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="card" style="width: 18rem;">
          <img src="assests/Tv-3.jpeg" class="card-img-top" alt="..." height="220px">
          <div class="card-body" style="height: 100px;">
            <h5 class="card-title">Thomson OATHPRO</h5>
            <p class="card-text">139 cm (55 inch) Ultra HD (4K) LED Smart Android TV with Digital Plus</p>
          </div>
          <ul class="list-group list-group-flush" style="height: 90px;">
            <li class="list-group-item">Resolution: Ultra HD (4K) 3840 x 2160 Pixels</li>
            <li class="list-group-item"><b>Price: ₹38,999</b></li>
          </ul>
          <div class="card-body">
            <form method="post">
              <input type="hidden" name="item_id" value="17">
              <input type="hidden" name="user_id" value="<?php echo 1; ?>">
              <?php
              $x = 17;
              if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
              } else {
                echo '<button type="submit" name="main_sale_submit" class="btn btn-warning form-control">Add to cart </button>';
              }
              ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>