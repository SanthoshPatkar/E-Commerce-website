<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['delete-cart-submit'])){
            $deletedrecord = $Cart->deleteCart($_POST['item_id']);
        }

    }
?>

<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h3 class="font-baloo font-size-30">Shopping Cart</h3>
        <div class="row">
            <div class="col-sm-9" style="min-height: 300px;">
                <?php
                    foreach ($product_all->getData('cart') as $item):
                        $cart = $product_all->getProduct($item['item_id']);
                        $subTotal[] = array_map(function ($item){
                ?>
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="<?php echo $item['p_image'] ?? "" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-20 "><?php echo $item['p_name'] ?? "Unknown"; ?></h5>
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-25">
                                <button class="qty-up border bg-light" style="height:50px; margin-top:6px" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                <input type="text" style="height:50px; width:50px" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input border w-100 bg-light text-center" disabled value="1" placeholder="1">
                                <button style="height:50px;margin-top:6px " data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border bg-light px-2"><i class="fas fa-angle-down"></i></button>
                            </div>

                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right ms-5">Delete</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger font-baloo">
                        ₹<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['p_price'] ?? 0; ?></span>
                        </div>
                    </div>
                </div>
                <?php
                            return $item['p_price'];
                        }, $cart); 
                    endforeach;
                ?>
            </div>
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; ₹<span class="text-danger"><span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
                        <form method="post" action="buy.php">
                                <button type="submit" name="buy_product" class="btn btn-warning mt-3 form-control">Proceed to Buy</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>