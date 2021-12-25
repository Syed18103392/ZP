<?php 
    class Pages extends CI_Controller{
        public function view($slug = 'home')
        {
            if(!file_exists(APPPATH.'/views/pages/'.$slug.'.php'))
            {
                // show_404();
            }
            else{
                $data['title'] = $slug;
                $this->load->view('templates/header');
                $this->load->view('/pages/'.$slug,$data);
                $this->load->view('templates/footer');
            }
        }
        public function view_dashboard($slug = 'dashboard')
        {
            if(!file_exists(APPPATH.'/views/pages/'.$slug.'.php'))
            {
                show_404();
            }
            else{
                $login_status_check=$this->session->userdata('user_type');
                print_r($login_status_check);
                if ($login_status_check == null) {
                    $this->session->set_userdata('status','Please Login First');
                    $this->load->view('/pages/login');
                }
                else {
                    $data['title'] = $slug;
                    $this->load->view('templates/header');
                    $this->load->view('/pages/dashboard');
                    $this->load->view('templates/dashboard_template');
                    $this->load->view('templates/footer');
                }
                
            }
        }

        public function view_login($slug = 'login')
        {
            if(!file_exists(APPPATH.'/views/pages/'.$slug.'.php'))
            {
                show_404();
            }
            else{
                $login_status_check=$this->session->userdata('user_type');
                print_r($login_status_check);
                if ($login_status_check == null) {
                    $this->load->view('/pages/'.$slug);
                }
                else {
                    $data['title'] = $slug;
                    $this->load->view('templates/header');
                    $this->load->view('/pages/dashboard');
                    $this->load->view('templates/dashboard_template');
                    $this->load->view('templates/footer');
                }
                
            }
        }

        public function view_add_income($slug = 'add_income')
        {
            if(!file_exists(APPPATH.'/views/pages/'.$slug.'.php'))
            {
                 show_404();
            }
            else{
                $login_status_check=$this->session->userdata('user_type');
                print_r($login_status_check);
                if ($login_status_check == null) {
                    $this->session->set_userdata('status','Please Login First');
                    $this->load->view('/pages/login');
                }
                else {
                    $this->load->model('add_income_model');
                    $main_head_values = $this->add_income_model->get_head_info();
                    $banks_list = $this->add_income_model->get_bank_names();
                   
                     $data['main_head_values'] =$main_head_values  ;
                     $data['banks_info']=$banks_list;
                     $data['userid'] = $login_status_check;
                    $this->load->view('templates/header');
                    $this->load->view('/pages/dashboard');
                    $this->load->view('/pages/add_income',$data);
                    $this->load->view('templates/footer');
                }
                
            }
        }
        
    }