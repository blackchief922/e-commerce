<?php
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($email === 'admin@example.com' && $password === '12345678') {
        $_SESSION['admin'] = true;
        header('Location: /admin/dashboard');
        exit;
    }

    $error = 'Invalid admin credentials.';
}

$title = 'Admin Login';
require 'views/admin/login.view.php';
