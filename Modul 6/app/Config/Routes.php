<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('web/beranda', 'Web::beranda');
$routes->get('web/profil', 'Web::profil');


