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


$routes->post('services/create', 'ServiceController::create');
$routes->get('services', 'ServicesController::index');
$routes->post('home/dashboard', 'ServicesController::create');
$routes->get('property', 'ServicesController::property');
$routes->get('property/(:num)', 'ServicesController::showProperty/$1');
$routes->get('material', 'ServicesController::material');

$routes->get('home/dashboard', 'DashboardController::index');
$routes->post('user/update', 'DashboardController::updateUser');

$routes->get('/privacy', function () {
    return view('privacy');
});


$routes->get('construction', 'ConstructionController::index');

$routes->post('service/create', 'ServicesController::create');

$routes->post('user/update', 'UserController::update');

$routes->get('service/edit/(:num)', 'ServicesController::edit/$1');
$routes->post('service/update/(:num)', 'ServicesController::update/$1');
$routes->post('service/delete/(:num)', 'ServicesController::delete/$1');

$routes->get('/planning_and_design', 'PlanningAndDesignController::index');
$routes->get('/architecture_design', 'ArchitectureDesignController::index');
$routes->get('/interior_design', 'InteriorDesignController::index');
$routes->get('/fixing_and_support', 'FixingSupportController::index');
$routes->get('/painting', 'PaintingController::index');
$routes->get('/garden_design', 'GardenDesignController::index');
$routes->get('/furniture', 'FurnitureController::index');
$routes->get('/electrics', 'ElectricsController::index');
$routes->get('/dream_homes', 'DreamHomesController::index');
$routes->get('/material_supplier', 'MaterialSupplierController::index');
$routes->get('/construction', 'ConstructionController::index');

$routes->get('properties', 'PropertyController::index');
$routes->get('property/(:num)', 'PropertyController::view/$1');
$routes->get('material-supplier/(:num)', 'MaterialSupplierController::show/$1');

$routes->get('contact', 'ContactController::index');
$routes->post('contact/send', 'ContactController::send');

$routes->get('/projects', 'ProjectsController::index');
$routes->get('/projects/create', 'ProjectsController::create');
$routes->get('/projects/edit/(:num)', 'ProjectsController::edit/$1');
$routes->post('/projects/delete/(:num)', 'ProjectsController::delete/$1');


$routes->post('project/create', 'ProjectsController::create');
$routes->get('/', 'Home::index');
$routes->get('project/details/(:num)', 'ProjectsController::details/$1');


$routes->get('property/showProperty/(:num)', 'PropertyController::showProperty/$1');
$routes->get('materiel_supplier/show/(:num)', 'MaterialSupplierController::show/$1');
$routes->get('service/showSupplier/(:num)', 'MaterialSupplierController::show/$1');
$routes->get('service/(:num)', 'ConstructionController::viewService/$1');

$routes->get('construction/getServiceDetails/(:num)', 'ConstructionController::getServiceDetails/$1');
$routes->get('planning_and_design/getServiceDetails/(:num)', 'PlanningAndDesignController::getServiceDetails/$1');
$routes->get('architecture_design/getServiceDetails/(:num)', 'ArchitectureDesignController::getServiceDetails/$1');
$routes->get('interior_design/getServiceDetails/(:num)', 'InteriorDesignController::getServiceDetails/$1');
$routes->get('fixing_and_support/getServiceDetails/(:num)', 'FixingSupportController::getServiceDetails/$1');
$routes->get('painting/getServiceDetails/(:num)', 'PaintingController::getServiceDetails/$1');
$routes->get('garden_design/getServiceDetails/(:num)', 'GardenDesignController::getServiceDetails/$1');
$routes->get('furniture/getServiceDetails/(:num)', 'FurnitureController::getServiceDetails/$1');
$routes->get('electrics/getServiceDetails/(:num)', 'ElectricsController::getServiceDetails/$1');
$routes->get('dream-homes/getServiceDetails/(:num)', 'DreamHomesController::getServiceDetails/$1');


$routes->get('homepage', 'FeedbackController::display');
$routes->post('feedback/submit', 'FeedbackController::submit');
$routes->get('/', 'FeedbackController::display');   // Route for displaying the homepage
$routes->post('feedback/submit', 'FeedbackController::submit');  // Route for submitting feedback
$routes->get('/', 'HomeController::index');  // Route for displaying the homepage with feedback



$routes->get('/dashboard', 'HomeController::dashboard');  // Dashboard route


$routes->get('admin', 'AdminController::index');
$routes->get('admin/deleteUser/(:num)', 'AdminController::deleteUser/$1');
$routes->get('admin/deleteProject/(:num)', 'AdminController::deleteProject/$1');
$routes->get('admin/deleteService/(:num)', 'AdminController::deleteService/$1');
$routes->get('admin/deleteFeedback/(:num)', 'AdminController::deleteFeedback/$1');




$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('/home/dashboard', 'HomeController::dashboard');
    $routes->get('/admin', 'AdminController::index');
    // Add other protected routes here
});

$routes->get('admin/deleteService/(:num)', 'AdminController::deleteService/$1');
$routes->get('home/booknow', 'BookingController::booknow');
$routes->post('booknow/submit', 'BookingController::submitBooking');








