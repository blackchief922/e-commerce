<?php require 'views/partials/header.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<main class="container">
    <section class="hero">
        <div class="hero-copy">
            <span class="hero-badge">✨ Premium shopping experience</span>
            <h1>Elevated essentials for modern living</h1>
            <p>Discover curated products that blend quality, style, and comfort in every detail.</p>
            <div class="hero-actions">
                <a href="/products" class="btn">Shop Now</a>
                <a href="/about" class="btn btn-secondary">Learn More</a>
            </div>
        </div>
    </section>

    <section class="feature-grid">
        <div class="feature-card">
            <h3>Handpicked Selection</h3>
            <p>Only the finest products are featured to give your space and routine a polished feel.</p>
        </div>
        <div class="feature-card">
            <h3>Fast Checkout</h3>
            <p>Enjoy a streamlined purchasing flow with a modern cart experience from start to finish.</p>
        </div>
        <div class="feature-card">
            <h3>Premium Quality</h3>
            <p>Every item is chosen with craftsmanship, durability, and design in mind.</p>
        </div>
    </section>

    <section class="product-section">
        <div class="section-heading">
            <h2>Featured Products</h2>
        </div>
        <div class="product-container">
            <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="<?php echo htmlspecialchars($product['image'] ?? 'https://via.placeholder.com/400x250'); ?>" alt="<?php echo htmlspecialchars($product['title']); ?>">
                    </div>
                    <div class="product-content">
                        <h3><a href="/product?id=<?php echo $product['id']; ?>"><?php echo htmlspecialchars($product['title']); ?></a></h3>
                        <p><?php echo htmlspecialchars($product['description'] ?? 'Great product available now.'); ?></p>
                        <p class="price">$<?php echo number_format($product['price'] ?? 0, 2); ?></p>
                        <a href="/product?id=<?php echo $product['id']; ?>" class="btn">View product</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php require 'views/partials/footer.php'; ?>
