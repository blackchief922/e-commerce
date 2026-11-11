<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#07111f">
    <title><?php echo $title ?? 'MyShop'; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css?v=<?php echo time(); ?>">
    <?php if (strpos($_SERVER['REQUEST_URI'] ?? '', '/admin') === 0): ?>
        <link rel="stylesheet" href="/views/admin/assets/admin.css?v=<?php echo time(); ?>">
    <?php endif; ?>
</head>
<body>
