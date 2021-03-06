<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//pengumuman
$route['admin/pengumuman'] = 'pengumuman/index';
$route['admin/pengumuman/create'] = 'pengumuman/create';
$route['admin/pengumuman/store'] = 'pengumuman/store';
$route['admin/pengumuman/update'] = 'pengumuman/update';
$route['admin/pengumuman/edit/(:any)'] = 'pengumuman/edit/$1';
$route['admin/pengumuman/delete/(:any)'] = 'pengumuman/delete/$1';
$route['admin/pengumuman/(:any)'] = 'pengumuman/show/$1';

//jabatan bupati
$route['admin/jabatan-bupati'] = 'jabatanbupati/index';
$route['admin/jabatan-bupati/create'] = 'jabatanbupati/create';
$route['admin/jabatan-bupati/store'] = 'jabatanbupati/store';
$route['admin/jabatan-bupati/update'] = 'jabatanbupati/update';
$route['admin/jabatan-bupati/edit/(:any)'] = 'jabatanbupati/edit/$1';
$route['admin/jabatan-bupati/delete/(:any)'] = 'jabatanbupati/delete/$1';
$route['admin/jabatan-bupati/(:any)'] = 'jabatanbupati/show/$1';

//alamat instansi
$route['admin/alamat-instansi'] = 'alamat_instansi/index';
$route['admin/alamat-instansi/create'] = 'alamat_instansi/create';
$route['admin/alamat-instansi/store'] = 'alamat_instansi/store';
$route['admin/alamat-instansi/update'] = 'alamat_instansi/update';
$route['admin/alamat-instansi/edit/(:any)'] = 'alamat_instansi/edit/$1';
$route['admin/alamat-instansi/delete/(:any)'] = 'alamat_instansi/delete/$1';
$route['admin/alamat-instansi/(:any)'] = 'alamat_instansi/show/$1';

//sub domain
$route['admin/subdomain'] = 'subdomain/index';
$route['admin/subdomain/create'] = 'subdomain/create';
$route['admin/subdomain/store'] = 'subdomain/store';
$route['admin/subdomain/update'] = 'subdomain/update';
$route['admin/subdomain/edit/(:any)'] = 'subdomain/edit/$1';
$route['admin/subdomain/delete/(:any)'] = 'subdomain/delete/$1';

//kontak person
$route['admin/hubungi-kami'] = 'kontak/index';
$route['hubungi-kami'] = 'kontak/create';
$route['hubungi-kami/store'] = 'kontak/store';
$route['admin/hubungi-kami/delete/(:any)'] = 'kontak/delete/$1';
$route['admin/hubungi-kami/(:any)'] = 'kontak/show/$1';