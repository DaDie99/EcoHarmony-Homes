<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'HomeController::index');  // Homepage route
 $routes->get('about', 'AboutController::index');  // About page route
 $routes->get('projects', 'ProjectsController::index'); 
 $routes->get('services', 'ServicesController::index'); 
 $routes->get('property', 'ServicesController::property');
 $routes->get('material', 'ServicesController::material');
 $routes->get('register', 'RegisterController::index');
 $routes->post('register', 'RegisterController::create');
 

 $routes->get('success', 'RegisterController::success');


