<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->resource('pengguna');
$routes->resource('kandang');
$routes->resource('karyawan');
$routes->resource('penjualan');
$routes->resource('produksitelur');
$routes->resource('stok');
$routes->resource('ternak');