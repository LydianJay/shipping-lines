<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/booking', 'Booking::index');
$routes->get('/', 'Account::index');
$routes->get('/dashboard', 'Home::index');
$routes->post('/login', 'Account::auth');
$routes->get('/logout', 'Account::logout');


// =================================================
$routes->get('/port', 'Port::index');
$routes->get('/addport', 'Port::add');
$routes->post('/addport/post', 'Port::addport');
// =================================================



// ============== Vessels =========================
$routes->get('/vessel', 'Vessel::index');
$routes->get('/addvessel', 'Vessel::add');
$routes->post('/addvessel/post', 'Vessel::addvessel');
// ================================================



// ============== Vessels =========================
$routes->get('/course', 'Course::index');
$routes->get('/addcourse', 'Course::add');
$routes->post('/addcourse/post', 'Course::addcourse');
// ================================================