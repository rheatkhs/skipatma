<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Siswa::index');
$routes->get('/pendaftaran_online', 'Siswa::pendaftaran_online');
$routes->post('/sendMessage', 'Siswa::sendMessage');
$routes->post('/storePendaftaran', 'Siswa::storePendaftaran');
$routes->get('/admin/dashboard', 'Admin::index');
$routes->get('/admin/data_siswa', 'Admin::data_siswa');
$routes->get('/admin/daftar_ulang', 'Admin::daftar_ulang');
$routes->get('/admin/sign_in', 'Admin::sign_in');
$routes->post('/admin/storeAuth', 'Admin::storeAuth');
$routes->get('/admin/sign_up', 'Admin::sign_up');
$routes->get('/admin/sign_out', 'Admin::sign_out');
