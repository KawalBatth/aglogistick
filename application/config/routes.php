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

$route['admin/list'] = 'admin/customers/customer_list';
$route['admin/customer_manage'] = 'admin/customers/customer_manage';
$route['admin/manage'] = 'admin/customers/customer_manage';
$route['admin/add_user'] = 'admin/customers/add_user';
$route['admin/search'] = 'admin/customers/customer_search';
$route['admin/status'] = 'admin/customers/status_report';
$route['admin/summary'] = 'admin/customers/summary_report';
$route['admin/add'] = 'admin/customers/customer_add';
$route['get_fix_rates'] = 'admin/customers/get_fix_rates';
$route['admin/get_rates'] = 'admin/customers/get_rates';
$route['admin/user'] = 'admin/users/user_manage';
$route['admin/surcharge_list'] = 'admin/rates/surcharge_list';
$route['admin/rate'] = 'admin/rates/rate_sheet';
$route['admin/import'] = 'admin/rates/import_rate';
$route['admin/manage_sheet'] = 'admin/rates/manage_cover';
$route['admin/add_surcharge'] = 'admin/carriers/add_surcharge';
$route['admin/update_surcharge'] = 'admin/carriers/update_surcharge';

$route['admin/add_carrier'] = 'admin/carriers/add_carrier';

$route['admin/update_user'] = 'admin/customers/update_user';
$route['admin/get_c_user_by_id'] = 'admin/customers/get_c_user_by_id';

$route['admin/add_margin'] = 'admin/customers/add_margin';

$route['customer/change_password'] = 'customer/customers/change_password';

//$route['admin/shipment'] = 'admin/customers/shipment';

//$route['admin/address_book'] = 'admin/customers/address_book';
//$route['admin/address_book_add'] = 'admin/customers/address_book_add';
//$route['admin/address_book_import'] = 'admin/customers/address_book_import';
//$route['customer/address_book_export'] = 'customer/customers/address_book_export';
//$route['admin/history'] = 'admin/customers/history';
//$route['admin/settings'] = 'admin/customers/setting';



$route['customer/shipment'] = 'customer/customers/shipment';
$route['login/process'] = 'customer/login/process';
$route['customer/address_book'] = 'customer/customers/address_book';
$route['customer/address_book_add'] = 'customer/customers/address_book_add';
$route['customer/import_excel'] = 'customer/customers/import_excel';
$route['customer/password_setting'] = 'customer/customers/password_setting';
$route['customer/history'] = 'customer/customers/history';
$route['customer/settings'] = 'customer/customers/setting';
$route['customer/login'] = 'customer/login';
$route['customer/booking'] = 'customer/customers/booking';
$route['customer/get_postcode'] = 'customer/customers/get_postcode';
$route['customer/get_receiver'] = 'customer/customers/get_receiver';
$route['customer/get_contact_name'] = 'customer/customers/get_contact_name';
$route['customer/help'] = 'customer/customers/help';
$route['customer/get_calculate'] = 'customer/customers/get_calculate';
$route['customer/continue_booking'] = 'customer/customers/continuewbooking';
$route['customer/continue_bookingnew'] = 'customer/customers/continue_booking_new';
$route['customer/save_quote'] = 'customer/customers/save_quote';

//$route['customer/add_address_book'] = 'customer/customers/add_address_book';

$route['customer/update_address_book'] = 'customer/customers/update_address_book';


$route['user/login'] = 'user';
$route['user/logout'] = 'user/logout';
$route['user/login/process'] = 'user/process';

$route['admin/add_notes'] = 'admin/customers/add_notes';

//$route['admin/order_supply'] = 'admin/customers/order_supply';
$route['customer/quote'] = 'customer/customers/quote';


//$route['admin/set_cost'] = 'admin/rates/set_cost';

//$route['admin/carrier_list'] = 'admin/carriers/carrier_list';

//$route['admin/country_list'] = 'admin/carriers/country_list';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
