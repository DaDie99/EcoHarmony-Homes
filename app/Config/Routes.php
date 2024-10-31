<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'HomeController::index');
 $routes->get('homepage', 'HomeController::index');

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

$routes->post('register/create', 'RegisterController::create');
$routes->get('password/reset', 'PasswordController::reset');
$routes->post('password/sendResetLink', 'PasswordController::sendResetLink');

$routes->get('password/reset', 'AuthController::resetPassword');
$routes->post('password/reset/attempt', 'AuthController::attemptResetPassword');

$routes->post('service/register', 'ServiceController::register');


$routes->get('login', 'AuthController::login');
$routes->post('login/attempt', 'AuthController::attemptLogin');
$routes->get('logout', 'AuthController::logout');

$routes->get('home/dashboard', 'HomeController::dashboard');
$routes->get('register', 'AuthController::register');
$routes->post('register/attempt', 'AuthController::attemptRegister');


$routes->post('service/create', 'ServiceController::create');
$routes->get('services', 'ServicesController::index');
$routes->post('service/create', 'ServicesController::create');
$routes->get('property', 'ServicesController::property');
$routes->get('property/(:num)', 'ServicesController::showProperty/$1');
$routes->get('material', 'ServicesController::material');



$routes->get('service', 'ServicesController::index');
$routes->post('service/create', 'ServicesController::create');




$routes->match(['get', 'post'], 'service/create', 'ServicesController::create');

$routes->get('construction', 'ConstructionController::index');