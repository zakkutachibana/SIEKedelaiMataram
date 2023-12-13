<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/analisis', 'Analisis::index');
$routes->get('/drilldown', 'Drilldown::index');
$routes->get('/detail/(:num)', 'Home::detail/$1');
