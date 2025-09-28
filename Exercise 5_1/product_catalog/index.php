<?php
require('../model/database.php');
require('../model/product_db.php');
require('../model/category_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_products';
    }
}  

if ($action == 'list_products') {
    $category_id = filter_input(INPUT_GET, 'category_id', 
            FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE) {
        $category_id = 1;
    }
    $categories = get_categories();
    $category_name = get_category_name($category_id);
    $products = get_products_by_category($category_id);
    include('product_list.php');
} else if ($action == 'view_product') {
    $product_id = filter_input(INPUT_GET, 'product_id', 
            FILTER_VALIDATE_INT);   
    if ($product_id == NULL || $product_id == FALSE) {
        $error = 'Missing or incorrect product id.';
        include('../errors/error.php');
    } else {
        $categories = get_categories();
        $product = get_product($product_id);

      
        $code = $product['productCode'];
        $name = $product['productName'];
        $list_price = $product['listPrice'];

    
        $discount_percent = 30;  
        $discount_amount = round($list_price * ($discount_percent/100.0), 2);
        $unit_price = $list_price - $discount_amount;

        $discount_amount_f = number_format($discount_amount, 2);
        $unit_price_f = number_format($unit_price, 2);


        $image_filename = '../images/' . $code . '.png';
        $image_alt = 'Image: ' . $code . '.png';

        include('product_view.php');
    }
} else if ($action == 'show_update_form') {
    $product_id = filter_input(INPUT_GET, 'product_id', FILTER_VALIDATE_INT);
    if ($product_id == NULL || $product_id == FALSE) {
        $error = 'Missing or incorrect product id.';
        include('../errors/error.php');
    } else {
        $categories = get_categories();
        $product = get_product($product_id);
        include('product_update.php');
    }
} else if ($action == 'update_product') {
    $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
    $code = filter_input(INPUT_POST, 'code');
    $name = filter_input(INPUT_POST, 'name');
    $price = filter_input(INPUT_POST, 'price');
    if ($product_id == NULL || $product_id == FALSE || $category_id == NULL || $category_id == FALSE || $code == NULL || $name == NULL || $price == NULL || $price == FALSE) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        update_product($product_id, $category_id, $code, $name, $price);
        header("Location: .?category_id=$category_id");
    }
}
?>