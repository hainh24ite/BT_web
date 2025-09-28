<?php include '../view/header.php'; ?>
<main>
    <aside>
        <h1>Categories</h1>
        <nav>
            <ul>
                <?php foreach($categories as $category) : ?>
                <li>
                    <a href="?category_id=<?php echo $category['categoryID']; ?>">
                        <?php echo $category['categoryName']; ?>
                    </a>
                </li>
                <?php endforeach; ?>
        </ul>
        </nav>
    </aside>
    <section>
        <h1><?php echo $category_name; ?></h1>
        <ul class="nav">
            <?php foreach ($products as $product) : ?>
            <li style="display:flex; align-items:center; gap:12px;">
                <a href="?action=view_product&amp;product_id=<?php echo $product['productID']; ?>">
                    <?php echo $product['productName']; ?>
                </a>
                <a href="?action=show_update_form&amp;product_id=<?php echo $product['productID']; ?>" class="menu-btn" style="padding:8px 18px; font-size:0.98rem; margin-bottom:0;">Sửa</a>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>
<?php include '../view/footer.php'; ?>