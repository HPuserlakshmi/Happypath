<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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
$routes->get('/', 'Home::index');
$routes->get('index', 'Index::index');
$routes->get('list-of-contacts', 'ListOfContacts::index');
$routes->get('match-and-manage', 'MatchAndManage::index');
$routes->get('settings', 'Settings::index');
$routes->get('add-and-change', 'AddAndChange::index');
$routes->get('login', 'Login::index');
$routes->get('loginprocess', 'LoginProcess::index');
$routes->get('register', 'Register::index');
$routes->get('lprocess', 'Lprocess::index');
$routes->get('homepage', 'HomePage::index');
$routes->get('logout', 'Logout::index');
$routes->get('dataprocess', 'Dataprocess::index');
$routes->get('registerprocess', 'Registerprocess::index');
$routes->get('edit', 'Edit::index');
$routes->get('update', 'Update::index');
$routes->get('deleted', 'Deleted::index');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
