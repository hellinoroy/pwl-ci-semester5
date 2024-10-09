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

// filter hanya ngecek login pada session tidak ada authorization, dll
$routes->get('/edit/(:num)', 'dashboard::edit/$1', ["filter" => "isLoggedIn"]);
$routes->post('/edit/(:num)', 'dashboard::update/$1', ["filter" => "isLoggedIn"]);
$routes->get("/dashboard", "dashboard::dashboard_get", ["filter" => "isLoggedIn"]);
$routes->get("/profile", "dashboard::profile_get", ["filter" => "isLoggedIn"]);
$routes->get('/delete/(:num)', 'dashboard::delete/$1', ["filter" => "isLoggedIn"]);