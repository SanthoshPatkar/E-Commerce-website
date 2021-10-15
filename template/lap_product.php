<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['lap_submit'])) {
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['buy_product'])) {
        $Cart->buyItem($_POST['user_id'], $_POST['item_id']);
    }
}
?>

<h1 style="font-size: 50px; margin-left: 3%;">All Laptops</h1>
<hr>
<div class="container">
    <div class="row" style="margin-top: 2%;">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card mb-3" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assests/lap-1.jpeg" class="img-fluid rounded-start py-4" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Lenovo Ideapad Gaming 3 Ryzen 5 Hexa Core 4600H</h5>
                            <ul class="list-group list-group-flush " style="padding-left: 3%;">
                                <li class="py-1">NVIDIA GeForce GTX 1650</li>
                                <li class="py-1">15.6 inch Full HD LED Backlit, IPS Anti-Glare Display (250 nits
                                    Brightness, 120 Hz Refresh Rate)</li>
                                <li class="py-1">Light Laptop without Optical Disk Drive</li>
                                <li class="py-1">Pre-installed Genuine Windows 10 OS</li>
                                <li class="py-1">3.0 GHz with Turbo Boost Upto 4.0 Ghz</li>
                                <li class="py-1">Battery Backup: Upto 6.7 hours</li>
                            </ul>
                            <h3 class="pri"><b>Price: ₹62,990</b></h3>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="row justify-content-around py-2">
                        <div class="col-lg-4" style="margin-top: 2%;">
                            <form method="post" action="buy.php">
                                <input type="hidden" name="item_id" value="1">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="buy_product" class="btn btn-danger form-control">Proceed to Buy</button>
                            </form>
                        </div>
                        <div class="col-lg-4" style="float: right; margin-top: 2%;">
                            <form method="post">
                                <input type="hidden" name="item_id" value="1">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                $x = 1;
                                if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else {
                                    echo '<button type="submit" name="lap_submit" class="btn btn-warning form-control">Add to cart </button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card mb-3" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assests/lap-2.jpeg" class="img-fluid rounded-start  py-4" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">HP Pavilion Gaming Ryzen 7 Octa Core 4800H</h5>
                            <ul class="list-group list-group-flush " style="padding-left: 3%;">
                                <li class="py-1">15.6 inch Full HD WLED Backlit Anti-glare Micro-edge IPS Display</li>
                                <li class="py-1">NVIDIA GeForce 1650Ti</li>
                                <li class="py-1">Light Laptop without Optical Disk Drive</li>
                                <li class="py-1">Pre-installed Genuine Windows 10 OS</li>
                                <li class="py-1">2.9 GHz with Turbo Boost Upto 4.2 GHz</li>
                                <li class="py-1">Gaming, Processing & Multitasking</li>
                            </ul>
                            <h3 class="pri"><b>Price: ₹79,990</b></h3>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="row justify-content-around py-2">
                        <div class="col-lg-4" style="margin-top: 2%;">
                        <form method="post" action="buy.php">
                                <input type="hidden" name="item_id" value="2">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="buy_product" class="btn btn-danger form-control">Proceed to Buy</button>
                            </form>
                        </div>
                        <div class="col-lg-4" style="float: right; margin-top: 2%;">
                            <form method="post">
                                <input type="hidden" name="item_id" value="2">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                $x = 2;
                                if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else {
                                    echo '<button type="submit" name="lap_submit" class="btn btn-warning form-control">Add to cart </button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row second -->
    <div class="row" style="margin-top: 2%;">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card mb-3" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assests/lap-3.jpeg" class="img-fluid rounded-start  py-4" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">MSI GF63 Thin Core i7 10th Gen</h5>
                            <ul class="list-group list-group-flush " style="padding-left: 3%;">
                                <li class="py-1">NVIDIA GeForce GTX 1650 Max Q</li>
                                <li class="py-1">15.6 inch Full HD LED Backlit IPS Display (60Hz Refresh Rate, 45%NTSC Color Gamut)</li>
                                <li class="py-1">Processing & Multitasking</li>
                                <li class="py-1">Pre-installed Genuine Windows 10 OS</li>
                                <li class="py-1">2.6 GHz with 5 GHz Max Turbo Boost Frequency</li>
                                <li class="py-1">Full HD LED Backlit IPS Display (60Hz Refresh Rate, 45%NTSC Color Gamut)</li>
                            </ul>
                            <h3 class="pri"><b>Price: ₹69,990</b></h3>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="row justify-content-around py-2">
                        <div class="col-lg-4" style="margin-top: 2%;">
                        <form method="post" action="buy.php">
                                <input type="hidden" name="item_id" value="3">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="buy_product" class="btn btn-danger form-control">Proceed to Buy</button>
                            </form>
                        </div>
                        <div class="col-lg-4" style="float: right;margin-top: 2%; ">
                            <form method="post">
                                <input type="hidden" name="item_id" value="3">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                $x = 3;
                                if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else {
                                    echo '<button type="submit" name="lap_submit" class="btn btn-warning form-control">Add to cart </button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card mb-3" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assests/lap-4.jpeg" class="img-fluid rounded-start  py-4" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">HP Pavilion Core i5 11th Gen</h5>
                            <ul class="list-group list-group-flush " style="padding-left: 3%;">
                                <li class="py-1">Stylish & Portable Thin and Light Laptop</li>
                                <li class="py-1">Finger Print Sensor for Faster System Access</li>
                                <li class="py-1">14 inch Full HD LED Backlit Anti Glare IPS Micro-edge Display (250 nits Brightness, 45% NTSC Color Gamut, 157 PPI)</li>
                                <li class="py-1">Pre-installed Genuine Windows 10 OS</li>
                                <li class="py-1">4.20 GHz Max Turbo Frequency</li>
                                <li class="py-1">HP True Vision 720p HD WebcamG</li>
                            </ul>
                            <h3 class="pri"><b>Price: ₹66,990</b></h3>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="row justify-content-around py-2">
                        <div class="col-lg-4" style="margin-top: 2%;">
                        <form method="post" action="buy.php">
                                <input type="hidden" name="item_id" value="4">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="buy_product" class="btn btn-danger form-control">Proceed to Buy</button>
                            </form>
                        </div>
                        <div class="col-lg-4" style="float: right;margin-top: 2%;">
                            <form method="post">
                                <input type="hidden" name="item_id" value="4">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                $x = 4;
                                if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else {
                                    echo '<button type="submit" name="lap_submit" class="btn btn-warning form-control">Add to cart </button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- third row -->


    <div class="row" style="margin-top: 2%;">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card mb-3" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assests/lap-5.jpeg" class="img-fluid rounded-start  py-4" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">ASUS Core i3 10th Gen</h5>
                            <ul class="list-group list-group-flush " style="padding-left: 3%;">
                                <li class="py-1">Stylish & Portable Thin and Light Laptop</li>
                                <li class="py-1">15.6 inch Full HD LED (16:9, 200nits Brightness, NTSC: 45% Color Gamut, 83% Screen-to-body Ratio)</li>
                                <li class="py-1">Finger Print Sensor for Faster System Access</li>
                                <li class="py-1">Pre-installed Genuine Windows 10 OS</li>
                                <li class="py-1">
                                    1.2 GHz with Turbo Boost Upto 3.4 GHz</li>
                                <li class="py-1">Full HD LED Backlit Anti-glare Display</li>
                            </ul>
                            <h3 class="pri"><b>Price: ₹38,990</b></h3>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="row justify-content-around py-2">
                        <div class="col-lg-4" style="margin-top: 2%;">
                        <form method="post" action="buy.php">
                                <input type="hidden" name="item_id" value="5">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="buy_product" class="btn btn-danger form-control">Proceed to Buy</button>
                            </form>
                        </div>
                        <div class="col-lg-4" style="float: right;margin-top: 2%;">
                            <form method="post">
                                <input type="hidden" name="item_id" value="5">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                $x = 5;
                                if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else {
                                    echo '<button type="submit" name="lap_submit" class="btn btn-warning form-control">Add to cart </button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card mb-3" style="max-width: 600px; ">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assests/lap-6.jpeg" class="img-fluid rounded-start  py-4" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">HP 15-ec1105AX Ryzen 5 Hexa Core</h5>
                            <ul class="list-group list-group-flush " style="padding-left: 3%;">
                                <li class="py-1">NVIDIA GeForce GTX 1650</li>
                                <li class="py-1">15.6 inch Full HD IPS WLED-backlit Display (Brightness: 250 nits, 141 ppi, Color Gamut: 45% NTSC)</li>
                                <li class="py-1">Gaming, Processing & Multitasking</li>
                                <li class="py-1">Pre-installed Genuine Windows 10 OS</li>
                                <li class="py-1">3.0 GHz with Turbo Boost Upto 4.0 GHz</li>
                                <li class="py-1">Full HD IPS Anti-glare WLED-backlit Display </li>
                            </ul>
                            <h3 class="pri"><b>Price: ₹59,990</b></h3>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="row justify-content-around py-2">
                        <div class="col-lg-4" style="margin-top: 2%;">
                        <form method="post" action="buy.php">
                                <input type="hidden" name="item_id" value="6">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="buy_product" class="btn btn-danger form-control">Proceed to Buy</button>
                            </form>
                        </div>
                        <div class="col-lg-4" style="float: right;margin-top: 2%;">
                            <form method="post">
                                <input type="hidden" name="item_id" value="6">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                $x = 6;
                                if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else {
                                    echo '<button type="submit" name="lap_submit" class="btn btn-warning form-control">Add to cart </button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- four -->

    <div class="row" style="margin-top: 2%;">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card mb-3" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assests/lap-7.jpeg" class="img-fluid rounded-start  py-4" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">DELL Vostro Core i3 10th Gen</h5>
                            <ul class="list-group list-group-flush " style="padding-left: 3%;">
                                <li class="py-1">Stylish & Portable Thin and Light Laptop</li>
                                <li class="py-1">14 inch Full HD LED Backlit Anti-glare Display</li>
                                <li class="py-1">Battery Backup Upto 10 hours</li>
                                <li class="py-1">Pre-installed Genuine Windows 10 OS</li>
                                <li class="py-1">1.2 GHz with Turbo Boost Upto 3.4 GHz</li>
                                <li class="py-1">English International Non Backlit Keyboard</li>
                            </ul>
                            <h3 class="pri"><b>Price: ₹39,190</b></h3>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="row justify-content-around py-2">
                        <div class="col-lg-4" style="margin-top: 2%;">
                        <form method="post" action="buy.php">
                                <input type="hidden" name="item_id" value="7">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="buy_product" class="btn btn-danger form-control">Proceed to Buy</button>
                            </form>
                        </div>
                        <div class="col-lg-4" style="float: right;margin-top: 2%;">
                            <form method="post">
                                <input type="hidden" name="item_id" value="7">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                $x = 7;
                                if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else {
                                    echo '<button type="submit" name="lap_submit" class="btn btn-warning form-control">Add to cart </button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card mb-3" style="max-width: 600px; ">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assests/lap-8.jpeg" class="img-fluid rounded-start  py-4" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">DELL Inspiron Core i3 11th Gen</h5>
                            <ul class="list-group list-group-flush " style="padding-left: 3%;">
                                <li class="py-1">Stylish & Portable Thin and Light Laptop</li>
                                <li class="py-1">15.6 inch Full HD Anti Glare Display</li>
                                <li class="py-1">Processing & Multitasking, Everyday Use</li>
                                <li class="py-1">Pre-installed Genuine Windows 10 OS</li>
                                <li class="py-1">1.7 GHz upto Max Turbo Frequency at 4.1 GHz</li>
                                <li class="py-1">Kensington Lock Port </li>
                            </ul>
                            <h3 class="pri"><b>Price: ₹45,490</b></h3>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="row justify-content-around py-2">
                        <div class="col-lg-4" style="margin-top: 2%;">
                        <form method="post" action="buy.php">
                                <input type="hidden" name="item_id" value="8">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="buy_product" class="btn btn-danger form-control">Proceed to Buy</button>
                            </form>
                        </div>
                        <div class="col-lg-4" style="float: right;margin-top: 2%;">
                            <form method="post">
                                <input type="hidden" name="item_id" value="8">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                $x = 8;
                                if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else {
                                    echo '<button type="submit" name="lap_submit" class="btn btn-warning form-control">Add to cart </button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>