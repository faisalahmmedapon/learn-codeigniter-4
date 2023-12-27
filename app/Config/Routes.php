<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/contact', 'Home::contact');
$routes->get('/service', 'Home::service');
$routes->get('/schedule', 'Home::schedule');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');


$routes->group('admin', static function ($routes) {

    $routes->group('', [], static function ($routes) {
        $routes->view('dashboard','dashboard');
    });
    
    $routes->group('', [], static function ($routes) {
        $routes->view('register','register');
        $routes->view('login','login');
    });
});