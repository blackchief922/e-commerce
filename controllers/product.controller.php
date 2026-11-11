<?php

$id = $_GET['id'] ?? null;

if (!$id) {
    abort(404);
}

$product = $db
    ->query('SELECT * FROM products WHERE id = ?', [(int)$id])
    ->fetch(PDO::FETCH_ASSOC);

if (!$product) {
    abort(404);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    $quantity = max(1, (int)($_POST['quantity'] ?? 1));
    $cart = $_SESSION['cart'] ?? [];

    if (!isset($cart[$product['id']])) {
        $cart[$product['id']] = [
            'product'  => $product,
            'quantity' => 0,
        ];
    }

    $cart[$product['id']]['quantity'] += $quantity;
    $_SESSION['cart'] = $cart;

    header('Location: /cart');
    exit;
}

require 'views/product.view.php';
