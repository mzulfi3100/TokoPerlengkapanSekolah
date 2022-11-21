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
$routes->get('/pegawai/dashboard', 'KatalogController::index');
$routes->get('/list_katalog', 'KatalogController::list_katalog');
$routes->get('/create_katalog', 'KatalogController::create_katalog');
$routes->post('/store_katalog', 'KatalogController::store_katalog');
$routes->get('/edit_katalog/(:num)', 'KatalogController::edit_katalog/$1');
$routes->post('/update_katalog/(:num)', 'KatalogController::update_katalog/$1');
$routes->get('/delete_katalog/(:num)', 'KatalogController::delete_katalog/$1');
$routes->get('/dashboard', 'PelangganController::index');
$routes->get('/dashboard_cari', 'PelangganController::cari');
$routes->post('/dashboard_search', 'PelangganController::search');
// $routes->get('/register', 'Register::index');
// $routes->get('/login', 'Login::index');
$routes->post('/register/process', 'Register::process');
$routes->post('/login/process', 'Login::process');
$routes->get('/shopGrid', 'Home::shopGrid');
$routes->get('/shopingCart', 'ShopingCartController::index');
$routes->get('/profile', 'Home::profile');
$routes->get('/contact', 'Home::contact');
$routes->get('/checkout', 'Home::checkout');
$routes->get('/blog', 'Home::blog');
$routes->get('/blogDetails', 'Home::blogDetails');
$routes->get('/shopDetails', 'Home::shopDetails');
$routes->get('/dashboard_kategori', 'PelangganController::kategori');
$routes->get('/admin', 'Home::admin', ['filter' => 'role:admin']); 
$routes->get('/categoriesSection', 'Home::categoriesSection', ['filter' => 'role:admin']);
$routes->get('/data_categories/(:num)', 'Home::data_categories/$1', ['filter' => 'role:admin']);
$routes->get('/edit_categories/(:num)', 'Home::edit_categories/$1', ['filter' => 'role:admin']);

$routes->get('/delete_categories/(:num)', 'Home::delete_categories/$1', ['filter' => 'role:admin']);
$routes->post('/update_categories', 'Home::update_categories', ['filter' => 'role:admin']);
$routes->get('/add_categories', 'Home::add_categories', ['filter' => 'role:admin'] );
$routes->post('/categories_update_proses', 'Home::categories_update_proses', ['filter' => 'role:admin']);
$routes->post('/categories_proses', 'Home::categories_proses', ['filter' => 'role:admin']);
$routes->get('/dashboard', 'adminController::dashboard');

$routes->get('/Found', 'productsfoundController::Found', ['filter' => 'role:admin']);
$routes->get('/delete_Product/(:num)', 'productsfoundController::delete_Product/$1', ['filter' => 'role:admin']);
$routes->get('/edit_product/(:num)', 'productsfoundController::edit_product/$1', ['filter' => 'role:admin']);
$routes->get('/add_product', 'productsfoundController::add_product', ['filter' => 'role:admin']);
$routes->post('/update', 'productsfoundController::update', ['filter' => 'role:admin']);
$routes->post('/store', 'productsfoundController::store', ['filter' => 'role:admin']);

$routes->get('/getcity', 'Home::getCity');
$routes->get('/getcost', 'Home::getCost');

$routes->get('home', 'Home::index');
$routes->post('home', 'Home::index');
$routes->get('home/cek', 'Home::cek');
$routes->post('home/cek', 'Home::cek');
$routes->get('home/add', 'Home::add');
$routes->post('home/add', 'Home::add');
$routes->get('home/update', 'Home::update');
$routes->post('home/update', 'Home::update');
$routes->get('home/delete/(:any)', 'Home::delete/$1');
$routes->get('home/clear', 'Home::clear');
$routes->post('home/clear', 'Home::clear');
$routes->get('/cek', 'Home::cek');
$routes->post('/cek', 'Home::cek');
$routes->get('/add', 'Home::add');
$routes->post('/add', 'Home::add');
$routes->post('/add_wishlist', 'Home::add_wishlist');
$routes->get('/view_wishlist', 'Home::view_wishlist');
$routes->get('/delete_wishlist/(:num)', 'Home::delete_wishlist/$1');
$routes->post('/store_checkout', 'Home::add_checkout');

//form routes

$routes->get('/login', 'form::login');
$routes->get('/register', 'form::register');

$routes->get('/user_list', 'home::list_user');
$routes->get('/view_order', 'home::view_order');
$routes->get('/delete_order/(:num)', 'Home::delete_order/$1');
$routes->get('/detail_order/(:num)', 'Home::detail_order/$1');
$routes->get('/invoice_print/(:num)', 'Home::invoice_print/$1');
$routes->get('/bukti_bayar/(:num)', 'Home::bukti_bayar/$1');
$routes->post('/upload_bukti_bayar/(:num)', 'Home::upload_bukti_bayar/$1');
$routes->get('/update_bukti_bayar/(:num)', 'Home::update_bukti_bayar/$1');
$routes->get('/finish_order/(:num)', 'Home::finish_order/$1');
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
