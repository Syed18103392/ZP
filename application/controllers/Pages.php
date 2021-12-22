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
                // show_404();
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
                    $this->load->view('/pages/'.$slug.'.php');
                    $this->load->view('templates/footer');
                }
                
            }
        }
        
    }