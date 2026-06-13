<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Galeri::index');
$routes->get('/galeri', 'Galeri::index');
$routes->get('/galeri/create', 'Galeri::create');
$routes->post('/galeri/store', 'Galeri::store');
$routes->get('/galeri/edit/(:num)', 'Galeri::edit/$1');
$routes->post('/galeri/update/(:num)', 'Galeri::update/$1');
$routes->get('/galeri/delete/(:num)', 'Galeri::delete/$1');