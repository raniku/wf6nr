<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/resume', 'Home::resume');
$routes->get('/projects', 'Home::projects');
$routes->get('/contact', 'Home::contact');

$routes->get('/sample', 'BelajarWeb::coba');
$routes->get('/cv', 'Latihan::cv');