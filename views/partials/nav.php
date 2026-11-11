<?php
$cartCount = 0;
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $cartCount += $item['quantity'];
    }
}
?>
<header>
    <div class="container">
        <a href="/" class="logo">My<span>Shop</span></a>
        <nav>
            <ul>
                <li><a href="/" class="nav-link">Home</a></li>
                <li><a href="/products" class="nav-link">Shop</a></li>
                <li><a href="/cart" class="nav-link">Cart<?php echo $cartCount ? ' (' . $cartCount . ')' : ''; ?></a></li>
                <li><a href="/about" class="nav-link">About</a></li>
                <li><a href="/contact" class="nav-link">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>