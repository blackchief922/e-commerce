<?php require 'views/partials/header.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<main class="container cart-page">
    <h1>Your Cart</h1>

    <?php if (empty($cart)): ?>
        <p class="empty-cart">Your cart is empty. <a href="/products">Continue shopping</a>.</p>
    <?php else: ?>
        <form method="post">
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $cartTotal = 0; ?>
                    <?php foreach ($cart as $item): ?>
                        <?php $product = $item['product']; ?>
                        <?php $lineTotal = ($product['price'] ?? 0) * $item['quantity']; ?>
                        <?php $cartTotal += $lineTotal; ?>
                        <tr>
                            <td><?php echo htmlspecialchars($product['title']); ?></td>
                            <td>$<?php echo number_format($product['price'] ?? 0, 2); ?></td>
                            <td>
                                <input type="number" name="quantity[<?php echo $product['id']; ?>]" value="<?php echo $item['quantity']; ?>" min="0">
                            </td>
                            <td>$<?php echo number_format($lineTotal, 2); ?></td>
                            <td><a href="/cart?remove=<?php echo $product['id']; ?>" class="remove-link">Remove</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="cart-summary">
                <p>Cart total: <strong>$<?php echo number_format($cartTotal, 2); ?></strong></p>
                <button type="submit" name="update_cart" class="btn">Update cart</button>
                <a href="/products" class="btn">Continue shopping</a>
            </div>
        </form>
    <?php endif; ?>
</main>

<?php require 'views/partials/footer.php'; ?>
