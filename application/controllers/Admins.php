<?php 
    class Admins extends CI_Controller{
        public function login()
        {
            $user_type = $this->input->post('user_type');
			$loginName = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('Admin_model');
            $result = $this->Admin_model->user_login_info($user_type,$loginName,$password);
            if ($result) {
                $this->session->set_userdata('id', $result->id);
				$this->session->set_userdata('user_type', $result->user_type);
                $this->session->set_userdata('user_id', $result->user_id);
                $this->session->set_userdata('password', $result->password);

                redirect('dashboard');
            }
            else{ 
                $data['status']='login failed';
                $this->load->view('pages/login',$data);
            }
        }
    }