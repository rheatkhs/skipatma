<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Siswa::index');
$routes->get('/pendaftaran_online', 'Siswa::pendaftaran_online');
$routes->post('/sendMessage', 'Siswa::sendMessage');
$routes->get('/grup_whatsapp', 'Siswa::grup_whatsapp');
$routes->post('/storePendaftaran', 'Siswa::storePendaftaran');
$routes->get('/admin/dashboard', 'Admin::index');
$routes->get('/admin/data_siswa', 'Admin::data_siswa');
$routes->get('/admin/export_siswa', 'Admin::export_siswa');
$routes->get('/admin/data_siswa/detail_siswa/(:segment)', 'Admin::detail_siswa/$1');
$routes->get('/admin/hapus_siswa/(:segment)', 'Admin::hapus_siswa/$1');
$routes->post('/admin/saveSiswa/(:segment)', 'Admin::saveSiswa/$1');
$routes->post('/storePendaftaranAdmin', 'Admin::storePendaftaranAdmin');
$routes->get('/admin/daftar_ulang', 'Admin::daftar_ulang');
$routes->get('/admin/daftar_ulang/siswa/(:segment)', 'Admin::daftar_ulang_siswa/$1');
$routes->get('/admin/riwayat', 'Admin::riwayat');
$routes->get('/admin/kuitansi/(:segment)', 'Admin::kuitansi/$1');
$routes->get('/admin/batal/(:segment)', 'Admin::batal/$1');
$routes->get('/admin/sign_in', 'Admin::sign_in');
$routes->post('/admin/storeAuth', 'Admin::storeAuth');
$routes->get('/admin/sign_up', 'Admin::sign_up');
$routes->post('/admin/storeAdmin', 'Admin::storeAdmin');
$routes->get('/admin/sign_out', 'Admin::sign_out');
