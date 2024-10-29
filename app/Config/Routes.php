<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'HomeController::index');
 $routes->get('login/authenticate', 'LoginController::authenticate');
 $routes->get('about', 'AboutController::index');  // About page route
 $routes->get('projects', 'ProjectsController::index'); 
 $routes->get('services', 'ServicesController::index'); 
 $routes->get('property', 'ServicesController::property');
 $routes->get('material', 'ServicesController::material');
 $routes->get('register', 'RegisterController::index');
 $routes->post('register', 'RegisterController::create');
 

 $routes->get('success', 'RegisterController::success');

 $routes->get('login', 'LoginController::index');
$routes->post('login/authenticate', 'LoginController::authenticate');
$routes->get('register', 'RegisterController::index');
$routes->post('register/create', 'RegisterController::create');
$routes->get('password/reset', 'PasswordController::reset');
$routes->post('password/sendResetLink', 'PasswordController::sendResetLink');

$routes->get('login', 'LoginController::index');
$routes->post('login/authenticate', 'LoginController::authenticate');
$routes->get('register', 'RegisterController::index');
$routes->post('register/create', 'RegisterController::create');
$routes->get('password/reset', 'PasswordController::reset');
$routes->post('password/sendResetLink', 'PasswordController::sendResetLink');



