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
