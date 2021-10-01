<?php
ob_start();
 include('header.php');
?>
    

<?php

count($product_all->getData('cart'))?include('template/cart_detail.php'):include('template/cart_not.php');



include('footer.php');
?>