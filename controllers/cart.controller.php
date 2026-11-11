<?php

$cart = $_SESSION['cart'] ?? [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_cart'])) {
    foreach ($_POST['quantity'] as $productId => $qty) {
        $productId = (int)$productId;
        $quantity = max(0, (int)$qty);

        if (isset($cart[$productId])) {
            if ($quantity === 0) {
                unset($cart[$productId]);
            } else {
                $cart[$productId]['quantity'] = $quantity;
            }
        }
    }

    $_SESSION['cart'] = $cart;
    header('Location: /cart');
    exit;
}

if (isset($_GET['remove'])) {
    $removeId = (int)$_GET['remove'];
    unset($cart[$removeId]);
    $_SESSION['cart'] = $cart;
    header('Location: /cart');
    exit;
}

$title = 'Your Cart';
require 'views/cart.view.php';
