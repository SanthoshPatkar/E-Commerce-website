<?php

require ('Database/db_control.php');

require ('Database/product.php');

require ('database/cart_d.php');

$db = new DBController();

$product_all = new Product($db);
$product_item = $product_all->getData();

$Cart = new Cart($db );