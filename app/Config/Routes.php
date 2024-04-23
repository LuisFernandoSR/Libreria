<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/inicio', 'Home::inicio');
$routes->get('/inicio', 'Home::inicio');
$routes->post('/book', 'Home::book');
$routes->get('/book', 'Home::book');
$routes->get('/salir', 'Home::salir');



