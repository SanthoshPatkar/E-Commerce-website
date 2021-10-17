<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['mobile_submit'])) {
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
      }
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['buy_product'])) {
        $Cart->buyItem($_POST['user_id'], $_POST['item_id']);
    }
}
?>

<h1 style="font-size: 50px; margin-left: 3%;">All Mobiles</h1>
<hr>
<div class="container">
    <div class="row" style="margin-top: 2%;">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card mb-3" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assests/mobile-1.jpeg" class="img-fluid rounded-start py-4" style="object-fit: contain; height: 350px; margin-left: 10%;" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">POCO X3 Pro </h5>
                            <ul class="list-group list-group-flush " style="padding-left: 3%;">
                                <li class="py-1">6 GB RAM | 128 GB ROM | Expandable Upto 1 TB</li>
                                <li class="py-1">16.94 cm (6.67 inch) Full HD+ Display</li>
                                <li class="py-1">48MP + 8MP + 2MP + 2MP | 20MP Front Camera</li>
                                <li class="py-1">5160 mAh Lithium-ion Polymer Battery</li>
                                <li class="py-1">Qualcomm Snapdragon 860 Processor</li>
                            </ul>
                            <h3 class="pri"><b>Price: ₹18,990</b></h3>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="row justify-content-around py-2">
                        <div class="col-lg-4" style="margin-top: 2%;">
                        <form method="post" action="buy.php">
                                <input type="hidden" name="item_id" value="9">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="buy_product" class="btn btn-danger form-control">Proceed to Buy</button>
                            </form>
                        </div>
                        <div class="col-lg-4" style="float: right; margin-top: 2%;">
                            <form method="post">
                                <input type="hidden" name="item_id" value="9">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                $x = 9;
                                if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else {
                                    echo '<button type="submit" name="mobile_submit" class="btn btn-warning form-control">Add to cart </button>';
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
                        <img src="assests/mobile-2.jpeg" class="img-fluid rounded-start py-4" style="object-fit: contain; height: 350px; margin-left: 10%;" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Vivo X60 </h5>
                            <ul class="list-group list-group-flush " style="padding-left: 3%;">
                                <li class="py-1">12 GB RAM | 256 GB ROM</li>
                                <li class="py-1">16.66 cm (6.56 inch) Full HD+ Display</li>
                                <li class="py-1">48MP + 13MP + 13MP | 32MP Front Camera</li>
                                <li class="py-1">4300 mAh Lithium-ion Battery</li>
                                <li class="py-1">Qualcomm Snapdragon 870 Processor</li>
                            </ul>
                            <h3 class="pri"><b>Price: ₹39,990</b></h3>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="row justify-content-around py-2">
                        <div class="col-lg-4" style="margin-top: 2%;">
                        <form method="post" action="buy.php">
                                <input type="hidden" name="item_id" value="10">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="buy_product" class="btn btn-danger form-control">Proceed to Buy</button>
                            </form>
                        </div>
                        <div class="col-lg-4" style="float: right; margin-top: 2%;">
                            <form method="post">
                                <input type="hidden" name="item_id" value="10">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                $x = 10;
                                if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else {
                                    echo '<button type="submit" name="mobile_submit" class="btn btn-warning form-control">Add to cart </button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- second -->

    <div class="row" style="margin-top: 2%;">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card mb-3" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assests/mobile-3.jpeg" class="img-fluid rounded-start py-4" style="object-fit: contain; height: 350px; margin-left: 10%;" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">realme GT 5G</h5>
                            </h5>
                            <ul class="list-group list-group-flush " style="padding-left: 3%;">
                                <li class="py-1">8 GB RAM | 128 GB ROM</li>
                                <li class="py-1">16.33 cm (6.43 inch) Full HD+ Display</li>
                                <li class="py-1">64MP + 8MP + 2MP | 16MP Front Camera</li>
                                <li class="py-1">4500 mAh Battery</li>
                                <li class="py-1">Qualcomm Snapdragon 888 Processor</li>
                            </ul>
                            <h3 class="pri"><b>Price: ₹37,990</b></h3>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="row justify-content-around py-2">
                        <div class="col-lg-4" style="margin-top: 2%;">
                        <form method="post" action="buy.php">
                                <input type="hidden" name="item_id" value="11">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="buy_product" class="btn btn-danger form-control">Proceed to Buy</button>
                            </form>
                        </div>
                        <div class="col-lg-4" style="float: right; margin-top: 2%;">
                            <form method="post">
                                <input type="hidden" name="item_id" value="11">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                $x = 11;
                                if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else {
                                    echo '<button type="submit" name="mobile_submit" class="btn btn-warning form-control">Add to cart </button>';
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
                        <img src="assests/mobile-4.jpeg" class="img-fluid rounded-start py-4" style="object-fit: contain; height: 350px; margin-left: 10%;" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">SAMSUNG Galaxy F62</h5>
                            <ul class="list-group list-group-flush " style="padding-left: 3%;">
                                <li class="py-1">SAMSUNG Galaxy F62</li>
                                <li class="py-1">17.02 cm (6.7 inch) Full HD+ Display</li>
                                <li class="py-1">64MP + 12MP + 5MP + 5MP | 32MP Front Camera</li>
                                <li class="py-1">7000 mAh Lithium-ion Battery</li>
                                <li class="py-1">Exynos 9825 Processo</li>
                            </ul>
                            <h3 class="pri"><b>Price: ₹25,990</b></h3>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="row justify-content-around py-2">
                        <div class="col-lg-4" style="margin-top: 2%;">
                        <form method="post" action="buy.php">
                                <input type="hidden" name="item_id" value="12">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="buy_product" class="btn btn-danger form-control">Proceed to Buy</button>
                            </form>
                        </div>
                        <div class="col-lg-4" style="float: right; margin-top: 2%;">
                            <form method="post">
                                <input type="hidden" name="item_id" value="12">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                $x = 12;
                                if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else {
                                    echo '<button type="submit" name="mobile_submit" class="btn btn-warning form-control">Add to cart </button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- third -->

    <div class="row" style="margin-top: 2%;">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card mb-3" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assests/mobile-5.jpeg" class="img-fluid rounded-start py-4" style="object-fit: contain; height: 350px; margin-left: 10%;" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Mi 10T </h5>
                            </h5>
                            <ul class="list-group list-group-flush " style="padding-left: 3%;">
                                <li class="py-1">8 GB RAM | 128 GB ROM</li>
                                <li class="py-1">16.94 cm (6.67 inch) Full HD+ Display</li>
                                <li class="py-1">64MP + 13MP + 5MP | 20MP Front Camera</li>
                                <li class="py-1">5000 mAh Li-ion Polymer Battery</li>
                                <li class="py-1">Qualcomm Snapdragon 865 Processorr</li>
                            </ul>
                            <h3 class="pri"><b>Price: ₹34,990</b></h3>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="row justify-content-around py-2">
                        <div class="col-lg-4" style="margin-top: 2%;">
                        <form method="post" action="buy.php">
                                <input type="hidden" name="item_id" value="13">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="buy_product" class="btn btn-danger form-control">Proceed to Buy</button>
                            </form>
                        </div>
                        <div class="col-lg-4" style="float: right; margin-top: 2%;">
                            <form method="post">
                                <input type="hidden" name="item_id" value="13">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                $x = 13;
                                if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else {
                                    echo '<button type="submit" name="mobile_submit" class="btn btn-warning form-control">Add to cart </button>';
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
                        <img src="assests/mobile-6.jpeg" class="img-fluid rounded-start py-4" style="object-fit: contain; height: 350px; margin-left: 10%;" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">OPPO Reno3 Pro </h5>
                            <ul class="list-group list-group-flush " style="padding-left: 3%;">
                                <li class="py-1">8 GB RAM | 128 GB ROM | Expandable Upto 256 GB</li>
                                <li class="py-1">16.26 cm (6.4 inch) Display</li>
                                <li class="py-1">64MP + 13MP + 8MP + 2MP | 44MP + 2MP Dual Front Camera</li>
                                <li class="py-1">4025 mAh Battery</li>
                                <li class="py-1">MediaTek Helio P95 Processor</li>
                            </ul>
                            <h3 class="pri"><b>Price: ₹25,299</b></h3>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="row justify-content-around py-2">
                        <div class="col-lg-4" style="margin-top: 2%;">
                        <form method="post" action="buy.php">
                                <input type="hidden" name="item_id" value="14">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="buy_product" class="btn btn-danger form-control">Proceed to Buy</button>
                            </form>
                        </div>
                        <div class="col-lg-4" style="float: right; margin-top: 2%;">
                            <form method="post">
                                <input type="hidden" name="item_id" value="14">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                $x = 14;
                                if (in_array($x, $Cart->getCartId($product_all->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else {
                                    echo '<button type="submit" name="mobile_submit" class="btn btn-warning form-control">Add to cart </button>';
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