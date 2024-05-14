<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->SetAutoRoute(true);

$routes->get('/login', 'Login::index');