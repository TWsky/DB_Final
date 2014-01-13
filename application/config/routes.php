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
|	example.com/class/method/id/
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
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/


$route['default_controller'] = 'main/index';
$route['404_override'] = '';
$route['user/index'] = 'user/index';
//$route['(:any)/index'] = '$1/index';
$route['(:any)/new'] = '$1/new';
$route['(:any)/create'] = '$1/create';
$route['(:any)/(:num)/edit'] = '$1/edit/$2';
$route['(:any)/(:num)/update'] = '$1/update/$2';
$route['(:any)/(:num)'] = '$1/show/$2';
$route['(:any)/(:num)/destroy'] = '$1/destroy/$2';

$route['(:any)/ajax/(:any)/(:num)'] = 'main/action_index';//'$1/ajax_$2';

$route['main/calendar'] = 'main/calendar';


//$route['(:any)/action_(:any)'] = 'main/action_index';


/* End of file routes.php */
/* Location: ./application/config/routes.php */