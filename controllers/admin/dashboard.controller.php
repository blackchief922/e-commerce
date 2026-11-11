<?php
requireAdmin();

$title = 'Admin Dashboard';
$totalProducts = $db->query('SELECT COUNT(*) AS total FROM products')->fetch(PDO::FETCH_ASSOC)['total'];
$latestProducts = $db->query('SELECT * FROM products ORDER BY id DESC LIMIT 5')->fetchAll(PDO::FETCH_ASSOC);

require 'views/admin/dashboard.view.php';
