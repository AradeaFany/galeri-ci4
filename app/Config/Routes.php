<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Galeri::index');
$routes->get('/galeri', 'Galeri::index');
