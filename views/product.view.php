<?php require 'views/partials/header.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<main class="container">
    <section class="product-detail">
        <div class="detail-image">
            <img src="<?php echo htmlspecialchars($product['image'] ?? 'https://via.placeholder.com/700x450'); ?>" alt="<?php echo htmlspecialchars($product['title']); ?>">
        </div>
        <div class="detail-info">
            <h1><?php echo htmlspecialchars($product['title']); ?></h1>
            <p class="detail-price">
                $<?php echo number_format($product['price'] ?? 0, 2); ?>
            </p>
            <p><?php echo nl2br(htmlspecialchars($product['description'] ?? 'Discover this product in our shop.')); ?></p>

            <form method="post" class="cart-form">
                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <button type="submit" name="add_to_cart" class="btn">Add to cart</button>
            </form>
        </div>
    </section>
</main>

<?php require 'views/partials/footer.php'; ?>
