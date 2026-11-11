<?php
function dd($value): void
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function uriIs(string $value): bool
{
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) === $value;
}

function isAdminLoggedIn(): bool
{
    return !empty($_SESSION['admin']) && $_SESSION['admin'] === true;
}

function requireAdmin(): void
{
    if (!isAdminLoggedIn()) {
        header('Location: /admin/login');
        exit;
    }
}

function routeToController(string $uri, array $routes): void
{
    global $db;

    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
    }
}

function abort(int $code = 404): void
{
    http_response_code($code);
    if (file_exists("views/{$code}.view.php")) {
        require "views/{$code}.view.php";
    } else {
        echo "<h1>Error {$code} - Page Not Found</h1>";
    }
    
    die();
}