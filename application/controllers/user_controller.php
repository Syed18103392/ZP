<?php
class user_controller extends CI_Controller
{
    public function view_add_user($slug = 'add_user')
    {
        if (!file_exists(APPPATH . '/views/pages/' . $slug . '.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('user_model');

                $data['userid'] = $login_status_check;
                $this->load->view('templates/header');
                $this->load->view('/pages/dashboard');
                $this->load->view('/pages/add_user', $data);
                $this->load->view('templates/footer');
            }
        }
    }
    public function add_user()
    {
        //error_reporting(0);

        $data = array(
            'user_type' => $this->input->post('type'),
            'name'      => $this->input->post('user'),
            'user_id'   => $this->input->post('userid'),
            'password'  => $this->input->post('password'),
            'status'    => 'Panding',
            'add_date'  => $this->input->post('date')
        );


        $this->load->model('user_model');
        $this->user_model->insertNewuser($data);
    }


    public function view_user()
    {
        if (!file_exists(APPPATH . '/views/pages/view_user.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('user_model');
                $data['list_of_pending_record'] = $this->user_model->show_user_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/view_user', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function approve_user(){
        //error_reporting(0); 
        $id = $this->uri->segment(3);
        $data = array(
            'status' => 'approved'
        );
        $this->load->model('user_model');
        $this->user_model->approve_user($id,$data);
    }

    public function decline_user(){
        $id = $this->uri->segment(3);
        $data = array(
            'status' => 'Panding'
        );
        $this->load->model('user_model');
        $this->user_model->decline_user($id, $data);
    }


    //---delete update controller : edit user details controller

    public function delete_single_user()
    {

        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {
            $id  = $this->uri->segment(3);
            $this->load->model('user_model');
            $this->user_model->delete_user($id);
        }
    }


    //---/delete update controller : edit user details controller

    //---edit update controller : edit user details controller

    public function edit_user_details()
    {
        if (!file_exists(APPPATH . '/views/pages/edit_user_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(3);
                $this->load->model('user_model');

                $data['single_post_data'] = $this->user_model->get_user_details($id);
                //print_r($data['single_post_data']);

                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/edit_user_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function update_user()
    {
        //error_reporting(0);
        $uid = $this->input->post('uid');
        $data = array(
            'user_type' => $this->input->post('type'),
            'name'      => $this->input->post('user'),
            'user_id'   => $this->input->post('userid'),
            'password'  => $this->input->post('password'),
            'status'    => 'Panding',
            'add_date'  => $this->input->post('date')
        );

        // print_r($data);	

        $this->load->model('user_model');
        $this->user_model->update_user($uid,$data);
    }

    //---/edit update controller : edit user details controller

}
