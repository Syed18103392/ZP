<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'pages/view_login';
$route['dashboard'] = 'pages/view_dashboard';
$route['add_income'] = 'pages/view_add_income';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view_login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
