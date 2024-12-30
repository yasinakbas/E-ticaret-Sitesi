<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Anasayfa yönlendirmesi
$routes->get('/', 'Login::index');

// İletişim sayfası yönlendirmeleri
$routes->get('/sayfalar/iletisim', 'ContactController::index');  // İletişim sayfası
$routes->post('/sayfalar/iletisim', 'ContactController::submitContact'); // Form verisi gönderme

// Giriş işlemleri
$routes->match(['get', 'post'], 'login', 'AuthController::login');

// Çıkış işlemi
$routes->get('logout', 'AuthController::logout');

// Admin paneli yönlendirmeleri
$routes->get('/', 'AuthController::login');
$routes->match(['get', 'post'], 'login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->get('/sayfalar/admin', 'AdminController::index');
$routes->post('admin/addUser', 'AdminController::addUser');
$routes->get('admin/deleteUser/(:num)', 'AdminController::deleteUser/$1');




