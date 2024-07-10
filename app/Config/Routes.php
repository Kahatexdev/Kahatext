<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::index');
$routes->post('/verify', 'AuthController::loginSubmit');
$routes->get('/logout', 'AuthController::logout');

$routes->group('', ['filter' => 'auth:user'], function($routes) {
    $routes->get('/chat', 'ChatController::index');
    $routes->post('send-message', 'ChatController::sendMessage');
    $routes->get('get-messages/(:num)/(:num)', 'ChatController::getMessages/$1/$2');
});

$routes->group('', ['filter' => 'auth:admin'], function($routes) {
    $routes->get('/admin', 'AdminController::index');
    // Tambahkan rute admin lainnya di sini
});