<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'User::login_get');
$routes->post('/login', 'User::login_post');
$routes->get('/register', 'User::register_get');
$routes->post("/register", "User::register_post");
$routes->get("/logout", "User::logout");


$routes->get('/edit/(:num)', 'dashboard::edit/$1');

$routes->get("/dashboard", "dashboard::dashboard_get");
$routes->get("/profile", "dashboard::profile_get");

