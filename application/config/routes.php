<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'pages/view_login';
$route['dashboard'] = 'pages/view_dashboard';
$route['logout'] = 'pages/admin_logout';

$route['view_income'] = 'income_controller/view_income';
$route['details_income/(:any)'] = 'income_controller/details_income/$1';
$route['income_status/(:any)'] = 'income_controller/income_status/$1';
$route['edit-income/(:any)'] = 'income_controller/edit_income_details/$1';
$route['delete-income/(:any)'] = 'income_controller/delete_single_income/$1';
$route['income_list'] = 'income_controller/income_list';
$route['add_income'] = 'income_controller/view_add_income';

$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view_login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
