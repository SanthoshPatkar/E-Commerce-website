<?php
require ('../Database/db_control.php');

require ('../Database/product.php');

$db = new DBController();

$product_all = new Product($db);

if (isset($_POST['itemid'])){
    $result = $product_all->getProduct($_POST['itemid']);
    echo json_encode($result);
}