<?php
defined('BASEPATH') or exit('No direct script access allowed');

class report_controller extends CI_Controller
{

    public function income_report()
    {
        $login_status_check = $this->session->userdata('user_type'); 
        if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            }  else {
                $this->load->model('report_model');
                $data['info']= $this->report_model->income_report();

            $this->load->view('templates/header');
            $this->load->view('/pages/dashboard');
            $this->load->view('/pages/income_report',$data);
            $this->load->view('templates/footer');
        }
    }

    public function expenses_report()
    {
        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {
            $this->load->model('report_model');
            $data['info'] = $this->report_model->expenses_report();

            $this->load->view('templates/header');
            $this->load->view('/pages/dashboard');
            $this->load->view('/pages/expenses_report', $data);
            $this->load->view('templates/footer');
        }
    }
    public function Balance_sheet()
    {
        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {
            $this->load->model('report_model');
            $data['info'] = $this->report_model->expenses_report();

            $this->load->view('templates/header');
            $this->load->view('/pages/dashboard');
            $this->load->view('/pages/balance_sheet', $data);
            $this->load->view('templates/footer');
        }
    }
    public function bank_report()
    {
        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {
            $this->load->model('report_model');
            $data['info'] = $this->report_model->bank_report();

            $this->load->view('templates/header');
            $this->load->view('/pages/dashboard');
            $this->load->view('/pages/bank_report', $data);
            $this->load->view('templates/footer');
        }
    }
    public function bank_balance_sheet()
    {
        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {
            $this->load->model('report_model');
            $data['info'] = $this->report_model->bank_report();

            $this->load->view('templates/header');
            $this->load->view('/pages/dashboard');
            $this->load->view('/pages/bank_balance_sheet', $data);
            $this->load->view('templates/footer');
        }
    }
    public function land_recoad_report()
    {
        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {
            $this->load->model('report_model');
            $data['info'] = $this->report_model->land_recoad_report();

            $this->load->view('templates/header');
            $this->load->view('/pages/dashboard');
            $this->load->view('/pages/land_recoad_report', $data);
            $this->load->view('templates/footer');
        }
    }
    public function budget_allocation_report()
    {
        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {
           // $this->load->model('report_model');
           // $data['info'] = $this->report_model->budget_allocation_report();

            $this->load->view('templates/header');
            $this->load->view('/pages/dashboard');
            $this->load->view('/pages/budget_allocation_report');
            $this->load->view('templates/footer');
        }
    }
    public function project_report()
    {
        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {
            // $this->load->model('report_model');
            // $data['info'] = $this->report_model->project_report();

            $this->load->view('templates/header');
            $this->load->view('/pages/dashboard');
            $this->load->view('/pages/project_report');
            $this->load->view('templates/footer');
        }
    }
    public function fdr_report()
    {
        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {
            $this->load->model('report_model');
            $data['info'] = $this->report_model->fdr_report();

            $this->load->view('templates/header');
            $this->load->view('/pages/dashboard');
            $this->load->view('/pages/fdr_report',$data);
            $this->load->view('templates/footer');
        }
    }

    public function main_head_report()
    {
        $login_status_check = $this->session->userdata('user_type'); 
        if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            }  else {
            $this->load->view('main_head_report');
        }
    }

    public function sub_head_report()
    {
        $login_status_check = $this->session->userdata('user_type'); 
        if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            }  else {
            $this->load->view('sub_head_report');
        }
    }




    public function Balance_sheetA()
    {
        $login_status_check = $this->session->userdata('user_type'); 
        if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            }  else {
            $this->load->view('balance_sheetA');
        }
    }




    public function budget_report()
    {
        $login_status_check = $this->session->userdata('user_type'); 
        if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            }  else {
            $this->load->view('budget_report');
        }
    }

    public function income_budget_report()
    {
        $login_status_check = $this->session->userdata('user_type'); 
        if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            }  else {
            $this->load->view('income_budget_report');
        }
    }


    public function expenses_budget_report()
    {
        $login_status_check = $this->session->userdata('user_type'); 
        if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            }  else {
            $this->load->view('expenses_budget_report');
        }
    }

    public function complete_project()
    {
        $login_status_check = $this->session->userdata('user_type'); 
        if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            }  else {
            $this->load->view('complete_project');
        }
    }

    public function running_project()
    {
        $login_status_check = $this->session->userdata('user_type'); 
        if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            }  else {
            $this->load->view('running_project');
        }
    }
}
