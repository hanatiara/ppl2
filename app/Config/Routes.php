<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'c_login::index');
// $routes->get('/c_mahasiswa', 'c_mahasiswa::display');
// $routes->get('/c_kota', 'c_kota::index');
$routes->get('login', 'c_login::index');
$routes->group('kota',['filter' => 'auth'], function ($routes){
    $routes->add('/', 'Home::index');
    $routes->add('berita', 'Home::berita');
    $routes->add('view', 'c_kota::index');
    $routes->add('create', 'c_kota::create');
    $routes->add('detail', 'Home::berita');
    $routes->add('delete/(:any)','c_kota::deleteKota/$1');
    $routes->add('detail/(:any)','c_kota::viewDetailKota/$1');
    $routes->add('edit/(:any)','c_kota::editViewKota/$1');
});


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
