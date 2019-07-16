<?php  

$route['user/dashboard'] = 'UserController/index';
$route['user/konfirmasi-pembayaran'] = 'UserController/pagePembayaran';
$route['user/konfirmasi-pembayaran/submit'] = 'UserController/submitPembayaran';
$route['user/proposal/submit'] = 'UserController/submitProposal';
$route['user/unggah-proposal'] = 'UserController/unggahProposal';
$route['user/unggah-video'] = 'UserController/unggahVideo';
$route['user/link/submit'] = 'UserController/submitVideo';
$route['user/hubungi-panitia'] = 'UserController/hubungiPanitia';