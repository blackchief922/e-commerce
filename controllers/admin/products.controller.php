<?php
requireAdmin();
require "validation.php";

$config = require "config.php";
$db = new Database($config, "root", "");

$message = null;
$messageType = 'info';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    $title = trim((string) ($_POST['title'] ?? ''));
    $description = trim((string) ($_POST['description'] ?? ''));
    $price = trim((string) ($_POST['price'] ?? ''));

    if (Validation::string($title, 1, 100)) {
        $errors['title'] = 'A title is required and must be no more than 100 characters.';
    }

    if (Validation::string($description, 1, 1000)) {
        $errors['description'] = 'A description is required and must be no more than 1000 characters.';
    }

    if (!is_numeric($price) || (float) $price < 0) {
        $errors['price'] = 'Please enter a valid price.';
    }
    



    if (empty($errors)) {
        $db->query(
            'INSERT INTO products (title, description, price) VALUES (:title, :description, :price)',
            [
                'title' => $title,
                'description' => $description,
                'price' => (float) $price,
            ]
        );

        $message = 'Product added successfully.';
        $messageType = 'success';
    } else {
        $message = 'Please correct the fields below.';
        $messageType = 'danger';
    }
}

$products = $db->query('SELECT * FROM products ORDER BY id DESC')->fetchAll(PDO::FETCH_ASSOC);

require 'views/admin/products.view.php';
