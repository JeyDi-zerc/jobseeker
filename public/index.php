<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require '../helpers.php';
require basePath('Router.php');
require basePath('database.php');
// $config = require basePath('config/db.php');

// $db = new Database($config);

$router = new Router();

$routes = require basePath('routes.php');

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

// $routes = [
//     '/' => 'controllers/home.php',
//     '/listings' => 'controllers/listings/index.php',
//     '/listings/create' => 'controllers/listings/create.php',
//     '404' => 'controllers/error/404.php',
// ];

// $uri = $_SERVER['REQUEST_URI'];
// if (array_key_exists($uri, $routes)) {
//     require(basePath($routes[$uri]));
// } else {
//     require basePath($routes['404']);
// }
