<!-- product.php -->

<?php
require 'products_db.php';
require 'compontents/header.php';

$id = $_GET['product_id'];

$title = get_product_title($id);
$img_url = get_img_url($id);

require 'compontents/product_info.php';
require 'compontents/footer.php';