<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['login'] = 'pages/view_login';
$route['dashboard'] = 'pages/view_dashboard';
$route['logout'] = 'pages/admin_logout';

$route['view_income'] = 'income_controller/view_income';
$route['details_income/(:any)'] = 'income_controller/details_income/$1';
$route['income_status/(:any)'] = 'income_controller/income_status/$1';
$route['edit-income/(:any)'] = 'income_controller/edit_income_details/$1';
$route['approve-opening-income/(:any)'] = 'income_controller/approve_opening_income/$1';
$route['delete-opening-income/(:any)'] = 'income_controller/delete_opening_income/$1';
$route['delete-income/(:any)'] = 'income_controller/delete_single_income/$1';
$route['income_list'] = 'income_controller/income_list';
$route['add_income'] = 'income_controller/view_add_income';
$route['opening_income'] = 'income_controller/view_opening_income';
$route['new_opening_amount'] = 'income_controller/view_add_new_opening_amount';

$route['add_expenses'] = 'expenses_controller/view_add_expences';
$route['view_expenses'] = 'expenses_controller/view_expenses';
$route['expenses_details/(:any)'] = 'expenses_controller/details_expenses/$1';
$route['approve-expenses/(:any)'] = 'expenses_controller/expenses_status/$1';
$route['delete-expenses/(:any)'] = 'expenses_controller/delete_single_expenses/$1';
$route['edit-expenses/(:any)'] = 'expenses_controller/edit_expenses_details/$1';
$route['expenditure_list'] = 'expenses_controller/expenses_list';

$route['contractor_bill'] = 'contractor_bill_controller/view_contractor_bill';
$route['contractor-bill-list'] = 'contractor_bill_controller/contractor_bill_list';
$route['new_contractor_bill'] = 'contractor_bill_controller/view_add_contractor_bill';
$route['contractor_bill_details/(:any)'] = 'contractor_bill_controller/details_contractor_bill/$1';
$route['approve-contractor-bill/(:any)'] = 'contractor_bill_controller/contractor_bill_status/$1';
$route['delete-contractor-bill/(:any)'] = 'contractor_bill_controller/delete_single_contractor_bill/$1';
$route['edit-contractor-bill/(:any)'] = 'contractor_bill_controller/edit_contractor_bill_details/$1';

$route['record-project-tender'] = 'project_tender_controller/view_project_tender';
//$route['contractor-bill-list'] = 'project_tender_controller/project_tender_list';
$route['add-new-project'] = 'project_tender_controller/view_add_project_tender';
$route['view-project/(:any)'] = 'project_tender_controller/details_project_tender/$1';
//$route['approve-contractor-bill/(:any)'] = 'project_tender_controller/project_tender_status/$1';
$route['delete-project/(:any)'] = 'project_tender_controller/delete_single_project_tender/$1';
$route['edit-project/(:any)'] = 'project_tender_controller/edit_project_tender_details/$1';

$route['record-tranning-info'] = 'tranning_info_controller/view_tranning_info';
//$route['contractor-bill-list'] = 'tranning_info_controller/tranning_info_list';
$route['add-new-tranning-info'] = 'tranning_info_controller/view_add_tranning_info';
$route['view-tranning-info/(:any)'] = 'tranning_info_controller/details_tranning_info/$1';
//$route['approve-contractor-bill/(:any)'] = 'tranning_info_controller/tranning_info_status/$1';
$route['delete-tranning-info/(:any)'] = 'tranning_info_controller/delete_single_tranning_info/$1';
$route['edit-tranning-info/(:any)'] = 'tranning_info_controller/edit_tranning_info_details/$1';

$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view_login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
