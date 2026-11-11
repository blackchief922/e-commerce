<?php require 'views/partials/header.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<main class="container">
    <section class="product-section">
        <h2>Shop All Products</h2>
        <div class="product-container">
            <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="<?php echo htmlspecialchars($product['image'] ?? 'https://via.placeholder.com/400x250'); ?>" alt="<?php echo htmlspecialchars($product['title']); ?>">
                    </div>
                    <div class="product-content">
                        <h3><a href="/product?id=<?php echo $product['id']; ?>"><?php echo htmlspecialchars($product['title']); ?></a></h3>
                        <p><?php echo htmlspecialchars($product['description'] ?? 'Quality item for your collection.'); ?></p>
                        <p class="price">$<?php echo number_format($product['price'] ?? 0, 2); ?></p>
                        <a href="/product?id=<?php echo $product['id']; ?>" class="btn">View product</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php require 'views/partials/footer.php'; ?>
