<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Projekt::index');

$routes->post('/click', 'Projekt::click');

$routes->get('/login', 'Projekt::login');
$routes->post('/login', 'Projekt::loginProcess');

$routes->get('/logout', 'Projekt::logout');