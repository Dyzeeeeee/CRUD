<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/main', 'MainController::mainPage');
// $routes->post('/save', 'MainController::save');
$routes->get('edit/(:any)', 'MainController::edit/$1');
// $routes->get('/delete/(:any)', 'MainController::delete/$1');
// $routes->get('/update/(:any)', 'MainController::update/$1');


