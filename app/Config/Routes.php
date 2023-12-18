<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/analisis', 'Analisis::index');
$routes->get('/analisis/data/(:num)', 'Analisis::getDataByYear/$1');
$routes->get('/analisis/hasil/(:num)/(:any)/(:num)', 'Analisis::calculateAnalysis/$1/$2/$3');
$routes->get('/drilldown', 'Drilldown::index');
$routes->get('/detail/(:num)', 'Home::detail/$1');
