<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
</head>
<body>
    <h1>Product Discount Calculator</h1>
    <form action="display_discount.php" method="post">
        <label for="product_description">Product Description:</label>
        <input type="text" name="product_description" id="product_description"><br><br>

        <label for="list_price">List Price:</label>
        <input type="text" name="list_price" id="list_price"><br><br>

        <label for="discount_percent">Discount Percent:</label>
        <input type="text" name="discount_percent" id="discount_percent"><br><br>

        <input type="submit" value="Calculate Discount">
    </form>
</body>
</html>
