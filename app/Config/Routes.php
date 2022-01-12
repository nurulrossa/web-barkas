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
$routes->get('/', 'User::index');
$routes->get('/daftarbarkas', 'User::daftarbarkas');

$routes->get('/login', 'Home::login');
$routes->get('/logout', 'Home::logout');

$routes->get('/admin', 'Admin::index', ['filter' => 'level']);
$routes->get('/profil-admin', 'Admin::profil', ['filter' => 'level']);
$routes->get('/password-admin', 'Admin::password', ['filter' => 'level']);
$routes->get('/barkas-pending', 'Admin::barkas_pending', ['filter' => 'level']);
$routes->get('/barkas-ada', 'Admin::barkas_ada', ['filter' => 'level']);
$routes->get('/barkas-sold', 'Admin::barkas_sold', ['filter' => 'level']);
$routes->get('/agenda-data', 'AgendaController::agenda', ['filter' => 'level']);
$routes->get('/aspirasi-data/(:any)', 'AspirasiController::aspirasi/$1', ['filter' => 'level']);
$routes->get('/berita-data', 'BeritaController::berita', ['filter' => 'level']);
$routes->get('/fraksi-data', 'FraksiController::fraksi', ['filter' => 'level']);
$routes->get('/galeri-data', 'GaleriController::galeri', ['filter' => 'level']);
$routes->get('/komisi-data', 'KomisiController::komisi', ['filter' => 'level']);
$routes->get('/partai-data', 'PartaiController::partai', ['filter' => 'level']);
$routes->get('/anggota-data/(:any)', 'AnggotaController::anggota/$1', ['filter' => 'level']);
$routes->get('/komentar-data', 'KomentarController::komentar', ['filter' => 'level']);


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
