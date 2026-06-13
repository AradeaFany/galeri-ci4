<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Galeri::index');
$routes->get('/galeri', 'Galeri::index');
$routes->get('/galeri/create', 'Galeri::create');
$routes->post('/galeri/store', 'Galeri::store');
