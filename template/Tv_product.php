<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['tv_submit'])) {
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['buy_product'])) {
        $Cart->buyItem($_POST['user_id'], $_POST['item_id']);
    }
}
?>

<h1 style="font-size: 50px; margin-left: 3%;">All Televisions</h1>
<hr>
<div class="container">
    <div class="row" style="margin-top: 2%;">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card mb-3" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assests/Tv-1.jpeg" class="img-fluid rounded-start py-4" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Mi 4A Horizon Edition </h5>
                            <ul class="list-group list-group-flush " style="padding-left: 3%;">
                                <li class="py-1">Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube</li>
                                <li class="py-1">Resolution: HD Ready 1366 x 768 Pixels</li>
                                <li class="py-1">Sound Output: 20 W</li>
                                <li class="py-1">Refresh Rate: 60 Hz</li>
                                <li class="py-1">Graphic Processor: Mali 450 MP3</li>
                            </ul>
                            <h3 class="pri"><b>Price: ₹17,499</b></h3>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="row justify-content-around py-2">
                        <div class="col-lg-4" style="margin-top: 2%;">
                        <form method="post" action="buy.php">
                                <input type="hidden" name="item_id" value="15">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="buy_product" class="btn btn-danger form-control">Proceed to Buy</button>
                            </form>
                        </div>
                        <div class="col-lg-4" style="float: right; margin-top: 2%;">
                            <form method="post">
                                <input type="hidden" name="item_id" value="15">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                $x = 15;
                                if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else {
                                    echo '<button type="submit" name="tv_submit" class="btn btn-warning form-control">Add to cart </button>';
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
                        <img src="assests/Tv-2.jpeg" class="img-fluid rounded-start  py-4" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">SONY</h5>
                            <ul class="list-group list-group-flush " style="padding-left: 3%;">
                                <li class="py-1">Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube</li>
                                <li class="py-1">Refresh Rate: 60 Hz</li>
                                <li class="py-1">Resolution: Ultra HD (4K) 3840 x 2160 pixels Pixels</li>
                                <li class="py-1">Covered in Warranty: 12 MONTHS</li>
                                <li class="py-1">Launch Year: 2020</li>
                            </ul>
                            <h3 class="pri"><b>Price: ₹80,790</b></h3>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="row justify-content-around py-2">
                        <div class="col-lg-4" style="margin-top: 2%;">
                        <form method="post" action="buy.php">
                                <input type="hidden" name="item_id" value="16">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="buy_product" class="btn btn-danger form-control">Proceed to Buy</button>
                            </form>
                        </div>
                        <div class="col-lg-4" style="float: right; margin-top: 2%;">
                            <form method="post">
                                <input type="hidden" name="item_id" value="16">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                $x = 16;
                                if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else {
                                    echo '<button type="submit" name="tv_submit" class="btn btn-warning form-control">Add to cart </button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- second row -->

    <div class="row" style="margin-top: 2%;">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card mb-3" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assests/Tv-3.jpeg" class="img-fluid rounded-start py-4" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Thomson OATHPRO Series</h5>
                            <ul class="list-group list-group-flush " style="padding-left: 3%;">
                                <li class="py-1">Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube</li>
                                <li class="py-1">Resolution: Ultra HD (4K) 3840 x 2160 Pixels</li>
                                <li class="py-1">Sound Output: 20 W</li>
                                <li class="py-1">Refresh Rate: 60 Hz</li>
                                <li class="py-1">Video Formats: MP4, MPEG, MPG, MKV</li>
                            </ul>
                            <h3 class="pri"><b>Price: ₹38,999</b></h3>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="row justify-content-around py-2">
                        <div class="col-lg-4" style="margin-top: 2%;">
                        <form method="post" action="buy.php">
                                <input type="hidden" name="item_id" value="17">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="buy_product" class="btn btn-danger form-control">Proceed to Buy</button>
                            </form>
                        </div>
                        <div class="col-lg-4" style="float: right; margin-top: 2%;">
                            <form method="post">
                                <input type="hidden" name="item_id" value="17">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                $x = 17;
                                if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else {
                                    echo '<button type="submit" name="tv_submit" class="btn btn-warning form-control">Add to cart </button>';
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
                        <img src="assests/Tv-4.jpeg" class="img-fluid rounded-start  py-4" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">SAMSUNG </h5>
                            <ul class="list-group list-group-flush " style="padding-left: 3%;">
                                <li class="py-1">Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube</li>
                                <li class="py-1">Refresh Rate: 60 Hz</li>
                                <li class="py-1">Resolution: Full HD 1920 x 1080 Pixels</li>
                                <li class="py-1">Audio Features: Dolby Digital Plus</li>
                                <li class="py-1">Launch Year: 2020</li>
                            </ul>
                            <h3 class="pri"><b>Price: ₹31,999</b></h3>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="row justify-content-around py-2">
                        <div class="col-lg-4" style="margin-top: 2%;">
                        <form method="post" action="buy.php">
                                <input type="hidden" name="item_id" value="18">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="buy_product" class="btn btn-danger form-control">Proceed to Buy</button>
                            </form>
                        </div>
                        <div class="col-lg-4" style="float: right; margin-top: 2%;">
                            <form method="post">
                                <input type="hidden" name="item_id" value="18">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                $x = 18;
                                if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else {
                                    echo '<button type="submit" name="tv_submit" class="btn btn-warning form-control">Add to cart </button>';
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
                        <img src="assests/Tv-5.jpeg" class="img-fluid rounded-start py-4" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Nokia</h5>
                            <ul class="list-group list-group-flush " style="padding-left: 3%;">
                                <li class="py-1">Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube</li>
                                <li class="py-1">Resolution: Full HD 1920 x 1080 Pixels</li>
                                <li class="py-1">Sound Output: 39W</li>
                                <li class="py-1">Refresh Rate: 60 Hz</li>
                                <li class="py-1">Speaker Type: QuatroX Speakers</li>
                            </ul>
                            <h3 class="pri"><b>Price: ₹26,999</b></h3>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="row justify-content-around py-2">
                        <div class="col-lg-4" style="margin-top: 2%;">
                        <form method="post" action="buy.php">
                                <input type="hidden" name="item_id" value="19">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="buy_product" class="btn btn-danger form-control">Proceed to Buy</button>
                            </form>
                        </div>
                        <div class="col-lg-4" style="float: right; margin-top: 2%;">
                            <form method="post">
                                <input type="hidden" name="item_id" value="19">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                $x = 19;
                                if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else {
                                    echo '<button type="submit" name="tv_submit" class="btn btn-warning form-control">Add to cart </button>';
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
                        <img src="assests/Tv-6.jpeg" class="img-fluid rounded-start  py-4" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">LG</h5>
                            <ul class="list-group list-group-flush " style="padding-left: 3%;">
                                <li class="py-1">Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube</li>
                                <li class="py-1">Refresh Rate: 50 Hz</li>
                                <li class="py-1">Resolution: Full HD 1920 x 1080 Pixels</li>
                                <li class="py-1">Surround Sound: DTS Virtual:X</li>
                                <li class="py-1">Launch Year: 2020</li>
                            </ul>
                            <h3 class="pri"><b>Price: ₹33,999</b></h3>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="row justify-content-around py-2">
                        <div class="col-lg-4" style="margin-top: 2%;">
                        <form method="post" action="buy.php">
                                <input type="hidden" name="item_id" value="20">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="buy_product" class="btn btn-danger form-control">Proceed to Buy</button>
                            </form>
                        </div>
                        <div class="col-lg-4" style="float: right; margin-top: 2%;">
                            <form method="post">
                                <input type="hidden" name="item_id" value="20">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                $x = 20;
                                if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else {
                                    echo '<button type="submit" name="tv_submit" class="btn btn-warning form-control">Add to cart </button>';
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