<?php include '../view/header.php'; ?>
<main>

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($categories as $category) : ?>
        <tr>
            <td>
                <form action="index.php" method="post" style="display:flex; gap:8px; align-items:center;">
                    <input type="hidden" name="action" value="update_category">
                    <input type="hidden" name="category_id" value="<?php echo $category['categoryID']; ?>">
                    <input type="text" name="name" value="<?php echo htmlspecialchars($category['categoryName']); ?>" style="padding:6px 12px; border-radius:6px; border:1px solid #6366f1; font-size:1rem;">
                    <input type="submit" value="Lưu" class="menu-btn" style="padding:6px 16px; font-size:0.98rem; margin-bottom:0;">
                </form>
            </td>
            <td></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Add Category</h2>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="add_category">
        <input type="text" name="name" placeholder="Category Name" required>
        <input type="submit" value="Add Category">
    </form>

    <p><a href="index.php?action=list_products">List Products</a></p>

    <?php if (!empty($category) && !empty($products)) : ?>
    <h2>Products in <?php echo htmlspecialchars($category['categoryName']); ?></h2>
    <table>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th class="right">Price</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($products as $product) : ?>
        <tr>
            <td><?php echo htmlspecialchars($product['productCode']); ?></td>
            <td><?php echo htmlspecialchars($product['productName']); ?></td>
            <td class="right">$<?php echo htmlspecialchars($product['listPrice']); ?></td>
            <td style="display:flex; gap:8px;">
                <a href="../product_catalog/index.php?action=show_update_form&amp;product_id=<?php echo $product['productID']; ?>" class="menu-btn" style="padding:6px 16px; font-size:0.98rem; margin-bottom:0;">Sửa</a>
                <form action="../product_manager/index.php" method="post" style="display:inline;">
                    <input type="hidden" name="action" value="delete_product">
                    <input type="hidden" name="product_id" value="<?php echo $product['productID']; ?>">
                    <input type="hidden" name="category_id" value="<?php echo $category['categoryID']; ?>">
                    <input type="submit" value="Delete" class="menu-btn" style="background:#6366f1;">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>

    <?php if (!empty($category)) : ?>
    <h2>Edit Category: <?php echo htmlspecialchars($category['categoryName']); ?></h2>
    <form action="index.php" method="post" style="margin-bottom:32px; display:flex; gap:12px; align-items:center;">
        <input type="hidden" name="action" value="update_category">
        <input type="hidden" name="category_id" value="<?php echo $category['categoryID']; ?>">
        <input type="text" name="name" value="<?php echo htmlspecialchars($category['categoryName']); ?>" style="padding:8px 16px; border-radius:8px; border:1.5px solid #6366f1; font-size:1.1rem;">
        <input type="submit" value="Lưu" class="menu-btn" style="padding:8px 24px; font-size:1.05rem; margin-bottom:0;">
    </form>
    <?php endif; ?>

</main>
<?php include '../view/footer.php'; ?>