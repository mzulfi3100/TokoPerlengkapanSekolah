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
$routes->get('/list_katalog', 'KatalogController::list_katalog');
$routes->get('/create_katalog', 'KatalogController::create_katalog');
$routes->post('/store_katalog', 'KatalogController::store_katalog');
$routes->get('/edit_katalog/(:num)', 'KatalogController::edit_katalog/$1');
$routes->post('/update_katalog/(:num)', 'KatalogController::update_katalog/$1');
$routes->delete('/delete_katalog/(:num)', 'KatalogController::delete_katalog/$1');
$routes->get('/dashboard', 'PelangganController::index');
$routes->get('/dashboard_cari', 'PelangganController::cari');
$routes->post('/dashboard_search', 'PelangganController::search');
$routes->get('/register', 'Register::index');
$routes->get('/login', 'Login::index');
$routes->post('/register/process', 'Register::process');
$routes->post('/login/process', 'Login::process');
$routes->get('/shopGrid', 'Home::shopGrid');
$routes->get('/contact', 'Home::contact');
$routes->get('/checkout', 'Home::checkout');
$routes->get('/blog', 'Home::blog');
$routes->get('/blogDetails', 'Home::blogDetails');
$routes->get('/shopingCart', 'Home::shopingCart');
$routes->get('/shopDetails', 'Home::shopDetails');
$routes->get('/dashboard_kategori', 'PelangganController::kategori');
$routes->get('/admin', 'Home::admin');
$routes->get('/categoriesSection', 'Home::categoriesSection');
$routes->get('/data_categories/(:num)', 'Home::data_categories/$1');
$routes->get('/edit_categories/(:num)', 'Home::edit_categories/$1');
$routes->get('/delete_categories/(:num)', 'Home::delete_categories/$1');
$routes->post('/update_categories', 'Home::update_categories');
$routes->get('/add_categories', 'Home::add_categories');
$routes->post('/categories_proses', 'Home::categories_proses');
$routes->post('/categories_update_proses', 'Home::categories_update_proses');
$routes->get('/getcity', 'Home::getCity');
$routes->get('/getcost', 'Home::getCost');
//Crud Shopping Cart
$routes->get('home', 'Home::index');
$routes->post('home', 'Home::index');
$routes->get('home/cek', 'Home::cek');
$routes->post('home/cek', 'Home::cek');
$routes->get('home/add', 'Home::add');
$routes->post('home/add', 'Home::add');
$routes->get('home/clear', 'Home::clear');
$routes->post('home/clear', 'Home::clear');
$routes->get('/cek', 'Home::cek');
$routes->post('/cek', 'Home::cek');
$routes->get('/add', 'Home::add');
$routes->post('/add', 'Home::add');


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
