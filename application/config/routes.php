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
$route['record-tender'] = 'project_tender_controller/view_tender';
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

$route['record-audit-info'] = 'audit_info_controller/view_audit_info';
//$route['contractor-bill-list'] = 'audit_info_controller/audit_info_list';
$route['add-new-audit-info'] = 'audit_info_controller/view_add_audit_info';
$route['view-audit-info/(:any)'] = 'audit_info_controller/details_audit_info/$1';
//$route['approve-contractor-bill/(:any)'] = 'audit_info_controller/audit_info_status/$1';
$route['delete-audit-info/(:any)'] = 'audit_info_controller/delete_single_audit_info/$1';
$route['edit-audit-info/(:any)'] = 'audit_info_controller/edit_audit_info_details/$1';

$route['record-case-info'] = 'case_info_controller/view_case_info';
//$route['contractor-bill-list'] = 'case_info_controller/case_info_list';
$route['add-new-case-info'] = 'case_info_controller/view_add_case_info';
$route['view-case-info/(:any)'] = 'case_info_controller/details_case_info/$1';
//$route['approve-contractor-bill/(:any)'] = 'case_info_controller/case_info_status/$1';
$route['delete-case-info/(:any)'] = 'case_info_controller/delete_single_case_info/$1';
$route['edit-case-info/(:any)'] = 'case_info_controller/edit_case_info_details/$1';

$route['record-fdr-info'] = 'fdr_info_controller/view_fdr_info';
//$route['contractor-bill-list'] = 'fdr_info_controller/fdr_info_list';
$route['add-new-fdr-info'] = 'fdr_info_controller/view_add_fdr_info';
$route['view-fdr-info/(:any)'] = 'fdr_info_controller/details_fdr_info/$1';
//$route['approve-contractor-bill/(:any)'] = 'fdr_info_controller/fdr_info_status/$1';
$route['delete-fdr-info/(:any)'] = 'fdr_info_controller/delete_single_fdr_info/$1';
$route['edit-fdr-info/(:any)'] = 'fdr_info_controller/edit_fdr_info_details/$1';

$route['record-land-lease'] = 'land_lease_info_controller/view_land_lease_info';
//$route['contractor-bill-list'] = 'land_lease_info_controller/land_lease_info_list';
$route['add-new-land-lease-info'] = 'land_lease_info_controller/view_add_land_lease_info';
$route['view-land-lease-info/(:any)'] = 'land_lease_info_controller/details_land_lease_info/$1';
//$route['approve-contractor-bill/(:any)'] = 'land_lease_info_controller/land_lease_info_status/$1';
$route['delete-land-lease-info/(:any)'] = 'land_lease_info_controller/delete_single_land_lease_info/$1';
$route['edit-land-lease-info/(:any)'] = 'land_lease_info_controller/edit_land_lease_info_details/$1';

$route['record-land-recoad'] = 'land_recoad_controller/view_land_recoad';
//$route['contractor-bill-list'] = 'land_recoad_controller/land_recoad_list';
$route['add-new-land-recoad'] = 'land_recoad_controller/view_add_land_recoad';
$route['view-land-recoad/(:any)'] = 'land_recoad_controller/details_land_recoad/$1';
//$route['approve-contractor-bill/(:any)'] = 'land_recoad_controller/land_recoad_status/$1';
$route['delete-land-recoad/(:any)'] = 'land_recoad_controller/delete_single_land_recoad/$1';
$route['edit-land-recoad/(:any)'] = 'land_recoad_controller/edit_land_recoad_details/$1';

$route['record-land-record_info'] = 'person_land_info_controller/view_person_land_info';
//$route['contractor-bill-list'] = 'land_recoad_controller/land_recoad_list';
$route['add-new-person-land-info'] = 'person_land_info_controller/view_add_person_land_info';
$route['view-person-land-info/(:any)'] = 'person_land_info_controller/details_person_land_info/$1';
//$route['approve-contractor-bill/(:any)'] = 'person_land_info_controller/person_land_info_status/$1';
$route['delete-person-land-info/(:any)'] = 'person_land_info_controller/delete_single_person_land_info/$1';
$route['edit-person-land-info/(:any)'] = 'person_land_info_controller/edit_person_land_info_details/$1';

$route['record-others-record'] = 'others_record_controller/view_others_record';
//$route['contractor-bill-list'] = 'land_recoad_controller/land_recoad_list';
$route['add-new-others-record'] = 'others_record_controller/view_add_others_record';
$route['view-others-record/(:any)'] = 'others_record_controller/details_others_record/$1';
//$route['approve-contractor-bill/(:any)'] = 'others_record_controller/others_record_status/$1';
$route['delete-others-record/(:any)'] = 'others_record_controller/delete_single_others_record/$1';
$route['edit-others-record/(:any)'] = 'others_record_controller/edit_others_record_details/$1';

$route['view-managements'] = 'management_controller/view_management';
//$route['contractor-bill-list'] = 'land_recoad_controller/land_recoad_list';
$route['add-new-management'] = 'management_controller/view_add_management';
$route['view-management/(:any)'] = 'management_controller/details_management/$1';
//$route['approve-contractor-bill/(:any)'] = 'management_controller/management_status/$1';
$route['delete-management/(:any)'] = 'management_controller/delete_single_management/$1';
$route['edit-management/(:any)'] = 'management_controller/edit_management_details/$1';

$route['view-all-registers'] = 'all_register_controller/view_all_register';
//$route['contractor-bill-list'] = 'land_recoad_controller/land_recoad_list';
$route['add-new-all-register'] = 'all_register_controller/view_add_all_register';
$route['view-all-register/(:any)'] = 'all_register_controller/details_all_register/$1';
//$route['approve-contractor-bill/(:any)'] = 'all_register_controller/all_register_status/$1';
$route['delete-all-register/(:any)'] = 'all_register_controller/delete_single_all_register/$1';
$route['edit-all-register/(:any)'] = 'all_register_controller/edit_all_register_details/$1';

$route['view-employees'] = 'employee_controller/view_employee';
//$route['contractor-bill-list'] = 'land_recoad_controller/land_recoad_list';
$route['add-new-employee'] = 'employee_controller/view_add_employee';
$route['view-employee/(:any)'] = 'employee_controller/details_employee/$1';
//$route['approve-contractor-bill/(:any)'] = 'employee_controller/employee_status/$1';
$route['delete-employee/(:any)'] = 'employee_controller/delete_single_employee/$1';
$route['edit-employee/(:any)'] = 'employee_controller/edit_employee_details/$1';

$route['view-users'] = 'user_controller/view_user';
//$route['contractor-bill-list'] = 'land_recoad_controller/land_recoad_list';
$route['add-new-user'] = 'user_controller/view_add_user';
$route['view-user/(:any)'] = 'user_controller/details_user/$1';
//$route['approve-contractor-bill/(:any)'] = 'user_controller/user_status/$1';
$route['delete-user/(:any)'] = 'user_controller/delete_single_user/$1';
$route['edit-user/(:any)'] = 'user_controller/edit_user_details/$1';

$route['view-budgets'] = 'budget_controller/view_budget';
//$route['contractor-bill-list'] = 'land_recoad_controller/land_recoad_list';
$route['new_budget_summary'] = 'budget_controller/new_budget_summary';
$route['new_budget'] = 'budget_controller/new_budget';
$route['new_budget_ex'] = 'budget_controller/new_budget_ex';
$route['view-budget/(:any)'] = 'budget_controller/details_budget/$1';
//$route['approve-contractor-bill/(:any)'] = 'budget_controller/budget_status/$1';
$route['delete-budget/(:any)'] = 'budget_controller/delete_single_budget/$1';
$route['edit-budget/(:any)'] = 'budget_controller/edit_budget_details/$1';

// reporting routing 
$route['Report/income_report'] = 'report_controller/income_report';
$route['Report/expenses_report'] = 'report_controller/expenses_report';
$route['Report/Balance_sheet'] = 'report_controller/Balance_sheet';
$route['Report/bank_report'] = 'report_controller/bank_report';
$route['Report/bank_balance_sheet'] = 'report_controller/bank_balance_sheet';
$route['Report/land_recoad_report'] = 'report_controller/land_recoad_report';
$route['budget_allocation'] = 'report_controller/budget_allocation_report';
$route['Report/project_report'] = 'report_controller/project_report';
$route['Report/fdr_report'] = 'report_controller/fdr_report';
// reporting routing 


$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view_login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
