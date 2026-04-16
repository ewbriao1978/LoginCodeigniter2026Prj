<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/register', 'Home::registrarUsuarioForm');
$routes->post('/register', 'Home::registrarUsuario');
$routes->post('/login', 'Home::loginUser');
$routes->get('/myhome', 'Home::myHome');
