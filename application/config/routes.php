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
$route['default_controller'] = 'welcome';

// setting route for admin
$route['admin'] = 'admin/auth';

$route['admin/dashboard2'] = 'admin/dashboard/index2';

$route['adminlte'] = 'admin/auth';
$route['adminlte/(:any)'] = 'admin/adminlte/$1';

$route['customer/list'] = 'customer/customers/customer_list';
$route['login/process'] = 'customer/login/process';
$route['customer/manage'] = 'customer/customers/customer_manage';
$route['customer/search'] = 'customer/customers/customer_search';
$route['customer/status'] = 'customer/customers/status_report';
$route['customer/summary'] = 'customer/customers/summary_report';
$route['customer/add'] = 'customer/customers/customer_add';
$route['customer/shipment'] = 'customer/customers/shipment';

$route['customer/address_book'] = 'customer/customers/address_book';
$route['customer/address_book_add'] = 'customer/customers/address_book_add';
$route['customer/address_book_import'] = 'customer/customers/address_book_import';
$route['customer/address_book_export'] = 'customer/customers/address_book_export';
$route['customer/history'] = 'customer/customers/history';
$route['customer/settings'] = 'customer/customers/setting';

$route['admin/booking'] = 'admin/customers/booking';
$route['admin/help'] = 'admin/customers/help';

$route['admin/order_supply'] = 'admin/customers/order_supply';
$route['admin/quote'] = 'admin/customers/quote';

$route['admin/user'] = 'admin/users/user_manage';
$route['customer/login'] = 'customer/login';

$route['admin/surcharge_list'] = 'admin/rates/surcharge_list';
$route['admin/rate'] = 'admin/rates/rate_sheet';
$route['admin/import'] = 'admin/rates/import_rate';
$route['admin/manage_sheet'] = 'admin/rates/manage_cover';
$route['admin/set_cost'] = 'admin/rates/set_cost';

$route['admin/carrier_list'] = 'admin/carriers/carrier_list';

$route['admin/country_list'] = 'admin/carriers/country_list';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
