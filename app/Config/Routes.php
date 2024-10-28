<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'HomeController::index');  // Homepage route
 $routes->get('about', 'AboutController::index');  // About page route
 