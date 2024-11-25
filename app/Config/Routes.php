<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Account::index');
$routes->get('/dashboard', 'Home::index');
$routes->post('/login', 'Account::auth');
$routes->get('/logout', 'Account::logout');
