<?php

$title = 'Home';
$products = $db
    ->query('SELECT * FROM products ORDER BY id DESC LIMIT 4')
    ->fetchAll(PDO::FETCH_ASSOC);

require 'views/index.view.php';