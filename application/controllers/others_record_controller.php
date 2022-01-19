<?php
class others_record_controller extends CI_Controller
{
    public function view_add_others_record($slug = 'add_others_record')
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
                $this->load->model('others_record_model');
                $main_head_values = $this->others_record_model->get_head_info();
                $banks_list = $this->others_record_model->get_bank_names();

                $data['main_head_values'] = $main_head_values;
                $data['banks_info'] = $banks_list;
                $data['userid'] = $login_status_check;
                $this->load->view('templates/header');
                $this->load->view('/pages/dashboard');
                $this->load->view('/pages/add_others_record', $data);
                $this->load->view('templates/footer');
            }
        }
    }
    public function add_others_record()
    {

        //error_reporting(0);

        // File Upload function Start
        $data = array();
        $doc = json_encode($_FILES['recoadF']['name']);
        $filesCount = count($_FILES['recoadF']['name']);

        $recordid = $this->input->post('recordid');

        $foldername = mkdir('./uploads/files/other_recoad/' . $recordid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = $_FILES['recoadF']['name'][$i];
            $_FILES['userFile']['type'] = $_FILES['recoadF']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['recoadF']['tmp_name'][$i];


            $uploadPath = 'uploads/files/other_recoad/' . $recordid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option



        $dataA = array(
            'racordid'     => $recordid,
            'session'      => $this->input->post('session'),
            'main_head'    => $this->input->post('mainhead'),
            'sub_head'     => $this->input->post('subhead'),
            'types_work'   => $this->input->post('types_work'),
            'start_year'   => $this->input->post('starting_year'),
            'end_year'     => $this->input->post('comp_year'),
            'work_company' => $this->input->post('implementation'),
            'address'      => $this->input->post('address'),
            'photo_graph'  => $this->input->post('photograph'),
            'mobile'       => $this->input->post('mobile'),
            'email'        => $this->input->post('email'),
            'details'      => $this->input->post('details'),
            'date'         => $this->input->post('date'),
            'all_file'     => $doc,
            'status'       => 'Pending',
            'add_person'   => $this->input->post('uid')
        );
        print_r($dataA);
       // $this->db->insert('others_record', $dataA);
        // if($this->db->affected_rows() > 0){

       // $this->session->set_flashdata('msg', 'information Add Sucessfully');
        //redirect('Recoad/others_recoad');
		//}

        $this->load->model('others_record_model');
        $this->others_record_model->insertNewothers_record($dataA);
    }

    public function view_others_record()
    {
        if (!file_exists(APPPATH . '/views/pages/view_others_record.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('others_record_model');
                $data['list_of_pending_record'] = $this->others_record_model->show_others_record_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/view_others_record', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function details_others_record()
    {
        if (!file_exists(APPPATH . '/views/pages/others_record_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('others_record_model');
                $data['others_record_complete_info'] = $this->others_record_model->get_others_record_details($id);
                //print_r($data['others_record_complete_info']);
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/others_record_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }


    // status controller : controll the approve and refuse add money proposal
    public function others_record_status()
    {
        $id = $this->uri->segment(2);
        $data = array(
            'status' => 'approved'
        );
        $this->load->model('others_record_model');
        $result = $this->others_record_model->approveothers_record($data, $id);
        //print_r($result);
        if ($result == true) {
            $this->session->set_userdata('status', 'Approved');
            redirect('expenditure_list');
        }
    }


    // status controller : controll the approve and refuse add money proposal

    //---delete update controller : edit others_record details controller

    public function delete_single_others_record()
    {

        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {
            $id  = $this->uri->segment(2);
            $this->load->model('others_record_model');
            $result = $this->others_record_model->delete_others_record($id);
            if ($result == true) {
                $this->session->set_userdata('status', 'Delete Successfully');
                redirect('record-others-record');
            }
        }
    }


    //---/delete update controller : edit others_record details controller

    //---edit update controller : edit others_record details controller

    public function edit_others_record_details()
    {
        if (!file_exists(APPPATH . '/views/pages/edit_others_record_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('others_record_model');

                $data['single_post_data'] = $this->others_record_model->get_single_post_details($id);
                // $data['all_head_list'] = $this->others_record_model->get_head_info();
                //$data['all_bank_list'] = $this->others_record_model->get_bank_names();
                //print_r($data);
                if (isset($data['single_post_data']['info']->ex_file)) {
                    $this->session->set_userdata('editable_file_path', $data['single_post_data']['info']->ex_file);
                }
                //print_r($data['single_post_data']);

                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/edit_others_record_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function update_others_record()
    {
        $rec_id = $this->input->post('rec_id');
        $data = array(
            'racordid'     => $this->input->post('recordid'),
            'session'      => $this->input->post('session'),
            'main_head'    => $this->input->post('mainhead'),
            'sub_head'     => $this->input->post('subhead'),
            'types_work'   => $this->input->post('types_work'),
            'start_year'   => $this->input->post('starting_year'),
            'end_year'     => $this->input->post('comp_year'),
            'work_company' => $this->input->post('implementation'),
            'address'      => $this->input->post('address'),
            'photo_graph'  => $this->input->post('photograph'),
            'mobile'       => $this->input->post('mobile'),
            'email'        => $this->input->post('email'),
            'details'      => $this->input->post('details'),
            'date'         => $this->input->post('date'),
            //'all_file'     => $this->input->post('img'),
            'status'       => 'Pending',
            'add_person'   => $this->input->post('uid')
        );
        //print_r($data);

        $this->load->model('others_record_model');
        $this->others_record_model->UpdateExistingothers_record($data,$rec_id);

    }

    //---/edit update controller : edit others_record details controlle
}
