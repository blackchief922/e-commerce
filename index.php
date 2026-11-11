<?php
require 'function.php';
require 'Database.php';
require 'router.php';

$config = require 'config.php';
$db = new Database($config, "root", "");
session_start();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
routeToController($uri, $routes);
