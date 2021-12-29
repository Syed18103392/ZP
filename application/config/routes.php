<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'pages/view_login';
$route['logout'] = 'pages/admin_logout';
$route['view_income'] = 'pages/view_income';
$route['details_income/(:any)'] = 'pages/details_income/$1';
$route['income_status/(:any)'] = 'pages/income_status/$1';
$route['edit-income/(:any)'] = 'pages/edit_income_details/$1';
$route['dashboard'] = 'pages/view_dashboard';
$route['income_list'] = 'pages/income_list';
$route['add_income'] = 'pages/view_add_income';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view_login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
