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

        public function admin_logout($slug = 'logout')
        {
            
                $login_status_check=$this->session->userdata('user_type');
                
                if ($login_status_check == null) {
                    $this->load->view('/pages/'.$slug);
                    
                }
                else {
                    $this->session->unset_userdata('id');
				    $this->session->unset_userdata('user_type');
                    $this->session->unset_userdata('user_id');
                    $this->session->unset_userdata('password');
                    redirect(base_url());
                   
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
        public function view_income(){
            if(!file_exists(APPPATH.'/views/pages/view_income.php'))
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
                    $this->load->model('view_income_model');
                    $data['list_of_income_record']= $this->view_income_model->show_income_list();
                    $data['userid']=$this->session->userdata('user_type');
                    $this->load->view('templates/header');
                    $this->load->view('pages/dashboard');
                    $this->load->view('/pages/view_income',$data);
                    $this->load->view('templates/footer');
                }
                
            }
        }
        public function income_list(){
            if(!file_exists(APPPATH.'/views/pages/income_list.php'))
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
                    $this->load->model('view_income_model');
                    $data['list_of_income_record']= $this->view_income_model->show_all_income_list();
                    $data['userid']=$this->session->userdata('user_type');
                    $this->load->view('templates/header');
                    $this->load->view('pages/dashboard');
                    $this->load->view('/pages/income_list',$data);
                    $this->load->view('templates/footer');
                }
                
            }
        }

        public function details_income(){
            if(!file_exists(APPPATH.'/views/pages/income_details.php'))
            {
                show_404();
            }
            else{
                $login_status_check=$this->session->userdata('user_type');
                if ($login_status_check == null) {
                    $this->session->set_userdata('status','Please Login First');
                    $this->load->view('/pages/login');
                }
                else {
                    $data['userid']=$this->session->userdata('user_type');
                    $id = $this->uri->segment(2);
                    $this->load->model('income_details_model');
                    $data['income_complete_info']=$this->income_details_model->get_income_details($id);
                    print_r($data['income_complete_info']);
                    $this->load->view('templates/header');
                    $this->load->view('pages/dashboard');
                    $this->load->view('pages/income_details',$data);
                    $this->load->view('templates/footer');
                }
                
            }
        }


        // status controller : controll the approve and refuse add money proposal
        public function income_status()
        {
            $id = $this->uri->segment(2);
            $data = array(
                'status' => 'approved'
             );
             $this->load->model('view_income_model');
             $result = $this->view_income_model->approveIncome($data,$id);
             print_r($result);
             if($result==true){
                 $this->session->set_userdata('status','Approved');
                 redirect('income_list');
             }
        }

        // status controller : controll the approve and refuse add money proposal

        //---edit update controller : edit income details controller
        public function edit_income_details(){
            if(!file_exists(APPPATH.'/views/pages/edit_income_details.php'))
            {
                show_404();
            }
            else{
                $login_status_check=$this->session->userdata('user_type');
                if ($login_status_check == null) {
                    $this->session->set_userdata('status','Please Login First');
                    $this->load->view('/pages/login');
                }
                else {
                    $data['userid']=$this->session->userdata('user_type');
                    $id= $this->uri->segment(2);
                    $this->load->model('income_details_model');
                    
                    $data['single_post_data']= $this->income_details_model->get_single_post_details($id);
                    print_r($data['single_post_data']);
                    $this->load->view('templates/header');
                    $this->load->view('pages/dashboard');
                    $this->load->view('pages/edit_income_details',$data);
                    $this->load->view('templates/footer');
                }
            }
        }

        //---/edit update controller : edit income details controller
        
    }