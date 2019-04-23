<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
| 	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['scaffolding_trigger'] = 'scaffolding';
|
| This route lets you set a "secret" word that will trigger the
| scaffolding feature for added security. Note: Scaffolding must be
| enabled in the controller in which you intend to use it.   The reserved 
| routes must come before any wildcard or regular expression routes.
|
*/

$route['default_controller'] = "pages";
$route['scaffolding_trigger'] = "";



//$route['pages/show_stat/(:any)'] = 'pages/(:any)';




$route['admin/login'] = 'admin/lunit/login';
$route['admin/logout'] = 'admin/lunit/logout';
$route['admin'] = 'admin/lunit/index';

//$route['(:any).html'] = "pages/show/$1";


//$route['pages/show_stat/(:any)'] = "pages/show_stat/$1".'/'.date('Y').'/'.date('m').'/'.'day';



//$route['pages/(:any)'] = "pages/show/$1".'/'.date('Y').'/'.date('m').'/'.'day';




//$route['go/(:any)'] = 'click/go/$1';













$route['about'] = 'pages/show_stat/about';
$route['facilities/(:any)'] = 'pages/facilities/$1';
$route['book_design'] = 'pages/show_stat/book_design';
$route['portfolio'] = 'pages/show_stat/portfolio';
$route['show/(:any)'] = 'pages/show/$1';







/* End of file routes.php */
/* Location: ./system/application/config/routes.php */