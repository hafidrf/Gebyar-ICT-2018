<?php 
$route['admin/dashboard'] = 'AdminController/index';
$route['admin/data-pembayaran'] = 'AdminController/dataPembayaran';
$route['admin/data-proposal'] = 'AdminController/dataProposal';
$route['admin/data-video'] = 'AdminController/dataVideo';
$route['admin/konfirmasi-pembayaran/(:num)'] = 'AdminController/konfirmasiPembayaran/$1';
$route['admin/batal-konfirmasi-pembayaran/(:num)'] = 'AdminController/batalKonfirmasiPembayaran/$1';