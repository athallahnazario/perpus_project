<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
<<<<<<< HEAD
$routes->SetAutoRoute(true);
=======
$routes->setAutoRoute(true);

>>>>>>> 11d3bed647e71b3a1814520b4412d3b0c4a70018

$routes->get('/login', 'Login::index');