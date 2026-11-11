<?php

$title = 'Shop';
$products = $db
    ->query('SELECT * FROM products ORDER BY id DESC')
    ->fetchAll(PDO::FETCH_ASSOC);

require 'views/movie.view.php';