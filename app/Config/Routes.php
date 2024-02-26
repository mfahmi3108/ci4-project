<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/contact', 'Home::contact');
$routes->get('/product', 'Product::index');
$routes->get('/pesan', 'Pesan::index');
$routes->get('/product/(:segment)', 'Product::detail/$1');
$routes->get('/order', 'Order::index');
$routes->post('/order/tambahorder', 'Order::create');
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/tambah', 'Admin::tambah');
$routes->post('/admin/prosestambah', 'Admin::insertdata');
$routes->get('/admin/edit/(:segment)', 'Admin::edit/$1');
$routes->post('/admin/update', 'Admin::update');
$routes->get('/admin/hapus/(:any)', 'Admin::hapus/$1');
