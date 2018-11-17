<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['login'] = 'login';
$route['page'] = 'page';

$route['user_home'] = 'user_home';

$route['kategori/update_kategori/(:any)'] = 'kategori/update_kategori/$1';
$route['kategori/add_kategori'] = 'kategori/add_kategori';
$route['kategori'] = 'kategori';

$route['user_profil/update_user_profil/(:any)'] = 'user_profil/update_user_profil/$1';
$route['user_profil'] = 'user_profil';

$route['user_kontak/update_user_kontak/(:any)'] = 'user_kontak/update_user_kontak/$1';
$route['user_kontak'] = 'user_kontak';

$route['view'] = 'gambar/form';
$route['gambar/update_gambar/(:any)'] = 'gambar/update_gambar/$1';

$route['default_controller'] = 'home/index';
//$route['(:any)'] = 'home/home/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
