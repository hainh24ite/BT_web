<?php
// Get data from form
$product_description = filter_input(INPUT_POST, 'product_description', FILTER_SANITIZE_STRING);
$list_price = filter_input(INPUT_POST, 'list_price', FILTER_VALIDATE_FLOAT);
$discount_percent = filter_input(INPUT_POST, 'discount_percent', FILTER_VALIDATE_FLOAT);

// Calculate discount
$discount = $list_price * $discount_percent * 0.01;
$discount_price = $list_price - $discount;

// Format numbers
$list_price_f = '$' . number_format($list_price, 2);
$discount_percent_f = $discount_percent . '%';
$discount_f = '$' . number_format($discount, 2);
$discount_price_f = '$' . number_format($discount_price, 2);

// Escape HTML special characters for safety
$product_description_h = htmlspecialchars($product_description);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Product Discount Calculator</h1>

    <label>Product Description:</label>
    <span><?php echo $product_description_h; ?></span><br>

    <label>List Price:</label>
    <span><?php echo $list_price_f; ?></span><br>

    <label>Standard Discount:</label>
    <span><?php echo $discount_percent_f; ?></span><br>

    <label>Discount Amount:</label>
    <span><?php echo $discount_f; ?></span><br>

    <label>Discount Price:</label>
    <span><?php echo $discount_price_f; ?></span><br>
</body>
</html>
