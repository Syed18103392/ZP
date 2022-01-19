<?php
class all_register_controller extends CI_Controller
{
    public function view_add_all_register($slug = 'add_all_register')
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
                $this->load->model('all_register_model');
                $main_head_values = $this->all_register_model->get_head_info();
                $banks_list = $this->all_register_model->get_bank_names();

                $data['main_head_values'] = $main_head_values;
                $data['banks_info'] = $banks_list;
                $data['userid'] = $login_status_check;
                $this->load->view('templates/header');
                $this->load->view('/pages/dashboard');
                $this->load->view('/pages/add_all_register', $data);
                $this->load->view('templates/footer');
            }
        }
    }
    public function add_all_register()
    {
        error_reporting(0);
        // File Upload function Start
        $data = array();
        $doc = json_encode(str_replace(" ", "", $_FILES['userFiles']['name']));
        $filesCount = count($_FILES['userFiles']['name']);

        $register_id = $this->input->post('register_id');
        $foldername = mkdir('./uploads/Register/' . $register_id, 0755, TRUE);
        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['userFiles']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];


            $uploadPath = 'uploads/Register/' . $register_id;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';


            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // File Upload function End 


        //error_reporting(0);
        $today = date('Y-m-d');
        $data = array(
            'register_id'   => $this->input->post('register_id'),
            'subject'       => $this->input->post('subject'),
            'opening_date'  => $this->input->post('opening_date'),
            'close_date'    => $this->input->post('ending_date'),
            'sector'        => $this->input->post('section'),
            'total_page'    => $this->input->post('total_page'),
            'attend_ceo'    => $this->input->post('ceo_date'),
            'details'       => $this->input->post('details'),
            'file_upload'   => $doc,
            'add_date'      => $today,
            'status'        => 'Pending',
            'add_person'    => $this->input->post('uid')
        );

        $this->load->model('all_register_model');
        $this->all_register_model->insertNewall_register($data);
    }


    public function view_all_register()
    {
        if (!file_exists(APPPATH . '/views/pages/view_all_register.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('all_register_model');
                $data['list_of_pending_record'] = $this->all_register_model->show_all_register_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/view_all_register', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function details_all_register()
    {
        if (!file_exists(APPPATH . '/views/pages/all_register_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('all_register_model');
                $data['all_register_complete_info'] = $this->all_register_model->get_all_register_details($id);
                //print_r($data['all_register_complete_info']);
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/all_register_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }


    //---delete update controller : edit all_register details controller

    public function delete_single_all_register()
    {

        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {

            $id  = $this->uri->segment(2);
            $this->load->model('all_register_model');
            $result = $this->all_register_model->delete_all_register($id);
            if ($result == true) {
                $this->session->set_userdata('status', 'Delete Successfully');
                redirect('view-all-registers');
            }
        }
    }


    //---/delete update controller : edit all_register details controller

    //---edit update controller : edit all_register details controller

    public function edit_all_register_details()
    {
        if (!file_exists(APPPATH . '/views/pages/edit_all_register_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('all_register_model');

                $data['single_post_data'] = $this->all_register_model->get_single_post_details($id);
                //print_r($data['single_post_data']);

                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/edit_all_register_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function update_all_register()
    {
        error_reporting(0);
        $rid = $this->input->post('rid');
        // File Upload function Start
        $data = array();
        $doc = json_encode(str_replace(" ", "", $_FILES['userFiles']['name']));
        $filesCount = count($_FILES['userFiles']['name']);

        $register_id = $this->input->post('register_id');

        if ($doc == '[""]') {
            $doc = $this->input->post('userFiles2');
        }

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['userFiles']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];


            $uploadPath = 'uploads/Register/' . $register_id;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';


            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // File Upload function End 


        //error_reporting(0);
        $today = date('Y-m-d');
        $data = array(
            'register_id'   => $this->input->post('register_id'),
            'subject'       => $this->input->post('subject'),
            'opening_date'  => $this->input->post('opening_date'),
            'close_date'    => $this->input->post('ending_date'),
            'sector'        => $this->input->post('section'),
            'total_page'    => $this->input->post('total_page'),
            'attend_ceo'    => $this->input->post('ceo_date'),
            'details'       => $this->input->post('details'),
            'file_upload'   => $doc,
            'add_date'      => $today,
            'status'        => 'Pending',
            'add_person'    => $this->input->post('uid')
        );

        //print_r($data);
        $this->db->where('id', $rid);
        $this->db->update('register_file', $data);
        // if($this->db->affected_rows() > 0){

        $this->session->set_userdata('status', 'information Add Sucessfully');
        redirect('view-all-registers');


    }

    //---/edit update controller : edit all_register details controller

    public function all_register_list()
    {
        if (!file_exists(APPPATH . '/views/pages/all_register_list.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('all_register_model');
                $data['list_of_all_register_record'] = $this->all_register_model->show_all_all_register_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/all_register_list', $data);
                $this->load->view('templates/footer');
            }
        }
    }
}
