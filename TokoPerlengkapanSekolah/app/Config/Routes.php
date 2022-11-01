<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Home::index');
$routes->get('/shopGrid', 'Home::shopGrid');
$routes->get('/contact', 'Home::contact');
$routes->get('/checkout', 'Home::checkout');
$routes->get('/blog', 'Home::blog');
$routes->get('/blogDetails', 'Home::blogDetails');
$routes->get('/shopingCart', 'Home::shopingCart');
$routes->get('/shopDetails', 'Home::shopDetails');
$routes->get('/loginRegister', 'Home::loginRegister');
$routes->get('/register', 'Home::register');
$routes->get('/admin', 'Home::admin');
$routes->get('/categoriesSection', 'Home::categoriesSection');
$routes->get('/latestProductSection', 'latestproductController::latestProductSection');
$routes->get('/data_categories/(:num)', 'Home::data_categories/$1');
$routes->get('/edit_categories/(:num)', 'Home::edit_categories/$1');
$routes->get('/edit_latestProduct/(:num)', 'latestproductController::edit_latestProduct/$1');
$routes->get('/delete_categories/(:num)', 'Home::delete_categories/$1');
$routes->get('/delete_latestProduct/(:num)', 'latestproductController::delete_latestProduct/$1');
$routes->post('/update_categories', 'Home::update_categories');
$routes->post('/update_latestProduct', 'latestproductController::update_latestProduct');
$routes->get('/add_categories', 'Home::add_categories');
$routes->get('/add_latestProduct', 'latestproductController::add_latestProduct');
$routes->post('/categories_update_proses', 'Home::categories_update_proses');
$routes->post('/latestProduct_update_proses', 'latestproductController::latestProduct_update_proses');
$routes->post('/categories_proses', 'Home::categories_proses');
$routes->post('/latestProduct_proses', 'latestproductController::latestProduct_proses');
$routes->get('/dashboard', 'adminController::dashboard');

$routes->get('/Found', 'productsfoundController::Found');
$routes->get('/delete_Product/(:num)', 'productsfoundController::delete_Product/$1');
$routes->get('/edit_product/(:num)', 'productsfoundController::edit_product/$1');
$routes->get('/add_product', 'productsfoundController::add_product');
$routes->post('/update', 'productsfoundController::update');
$routes->post('/store', 'productsfoundController::store');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}