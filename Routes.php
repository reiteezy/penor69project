<?php
namespace Config;
use CodeIgniter\Router\RouteCollection;


$routes->get('/', 'Home::index');
//crud routes
$routes->get('users-list', 'UserController::index');
$routes->get('user-form', 'UserController::create');
$routes->post('submit-form', 'UserController::store');
$routes->get('edit-view/(:num)', 'UserController::singleUser/$1');
$routes->post('update', 'UserController::update');
$routes->get('delete/(:num)', 'UserController::delete/$1');



