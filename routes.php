<?php

/** @var mixed $router */
$router->get('/', 'controllers/home.php');
$router->get('/listings', 'controllers/listings/index.php');
$router->get('/listings/create', 'controllers/listings/create.php');
$router->get('/listing', 'controllers/listings/show.php');
$router->get('/login', 'controllers/auth/login.php');
$router->get('/register', 'controllers/auth/register.php');
