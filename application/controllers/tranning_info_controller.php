<?php
class tranning_info_controller extends CI_Controller
{
    public function view_add_tranning_info($slug = 'add_tranning_info')
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
                $this->load->model('tranning_info_model');
                $main_head_values = $this->tranning_info_model->get_head_info();
                $banks_list = $this->tranning_info_model->get_bank_names();

                $data['main_head_values'] = $main_head_values;
                $data['banks_info'] = $banks_list;
                $data['userid'] = $login_status_check;
                $this->load->view('templates/header');
                $this->load->view('/pages/dashboard');
                $this->load->view('/pages/add_tranning_info', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function add_tranning_info()
    {

        $data = array();
        $doc = json_encode(str_replace(" ", "", $_FILES['traifile']['name']));
        $filesCount = count($_FILES['traifile']['name']);

        $tid = $this->input->post('trainingid');

        $foldername = mkdir('./uploads/files/TRANNING/' . $tid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['traifile']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['traifile']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['traifile']['tmp_name'][$i];


            $uploadPath = 'uploads/files/TRANNING/' . $tid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option


        $dataA = array(
            'tranning_id'   => $tid,
            'traning_type'  => $this->input->post('type'),
            'from_date'     => $this->input->post('from_date'),
            'to_date'       => $this->input->post('to_date'),
            'batch_no'      => $this->input->post('batch_no'),
            'type_others'   => $this->input->post('other'),
            'name'          => $this->input->post('name'),
            'parrents'      => $this->input->post('parrents'),
            'address'       => $this->input->post('address'),
            'occupation'    => $this->input->post('occupation'),
            'dob'           => $this->input->post('dob'),
            'age'           => $this->input->post('age'),
            'nid'           => $this->input->post('nid'),
            'mobile'        => $this->input->post('contact'),
            'education'     => $this->input->post('education'),
            'details'       => $this->input->post('details'),
            'add_date'      => $this->input->post('date'),
            'add_file'      => $doc,
            'status'        => 'Pending',
            'add_person'    => $this->input->post('uid')
        );
        print_r($dataA);

        $this->load->model('tranning_info_model');
        $this->tranning_info_model->insertNewtranning_info($dataA);
    }


    public function view_tranning_info()
    {
        if (!file_exists(APPPATH . '/views/pages/view_tranning_info.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('tranning_info_model');
                $data['list_of_pending_record'] = $this->tranning_info_model->show_tranning_info_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/view_tranning_info', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function details_tranning_info()
    {
        if (!file_exists(APPPATH . '/views/pages/tranning_info_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('tranning_info_model');
                $data['tranning_info_complete_info'] = $this->tranning_info_model->get_tranning_info_details($id);
                //print_r($data['tranning_info_complete_info']);
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/tranning_info_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }


    //---delete update controller : edit tranning_info details controller

    public function delete_single_tranning_info()
    {

        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {
            $id  = $this->uri->segment(2);
            $this->load->model('tranning_info_model');
            $result = $this->tranning_info_model->delete_tranning_info($id);
            if ($result == true) {
                $this->session->set_userdata('status', 'Delete Successfully');
                redirect('record-tranning-info');
            }
        }
    }


    //---/delete update controller : edit tranning_info details controller

    //---edit update controller : edit tranning_info details controller

    public function edit_tranning_info_details()
    {
        if (!file_exists(APPPATH . '/views/pages/edit_tranning_info_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('tranning_info_model');

                $data['single_post_data'] = $this->tranning_info_model->get_single_post_details($id);
                //print_r($data['single_post_data']);

                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/edit_tranning_info_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function update_tranning_info()
    {
        //error_reporting(0);
        $tid = $this->input->post('tid');


        // File Upload function Start
        $data = array();
        //print_r('dhuksi');

        $filearray = $_FILES['traifile']['name'];
        $filearray2 = (null !== $this->input->post('traifile')) ? $this->input->post('traifile') : array();
        $filestotal = array_merge($filearray, $filearray2);
        if (count(array_filter($filestotal)) > 0) {
            $doc = json_encode(str_replace(" ", "", array_values(array_filter($filestotal))));
        } else {
            $doc = "";
        }


        $filesCount = count($_FILES['traifile']['name']);

        $tid2 = $this->input->post('trainingid');


        ///$foldername = mkdir('./uploads/files/TRANNING/' . $tid2, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['traifile']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['traifile']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['traifile']['tmp_name'][$i];


            $uploadPath = 'uploads/files/TRANNING/' . $tid2;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option



        $data = array(
            'tranning_id'   => $this->input->post('trainingid'),
            'traning_type'  => $this->input->post('type'),
            'from_date'  => $this->input->post('from_date'),
            'to_date'  => $this->input->post('to_date'),
            'batch_no'  => $this->input->post('batch_no'),
            'type_others'   => $this->input->post('other'),
            'name'          => $this->input->post('name'),
            'parrents'      => $this->input->post('parrents'),
            'address'       => $this->input->post('address'),
            'occupation'    => $this->input->post('occupation'),
            'dob'           => $this->input->post('dob'),
            'age'           => $this->input->post('age'),
            'nid'           => $this->input->post('nid'),
            'mobile'        => $this->input->post('contact'),
            'education'     => $this->input->post('education'),
            'details'       => $this->input->post('details'),
            'add_date'      => $this->input->post('date'),
            'add_file'      => $doc,
            'status'        => 'Pending',
            'add_person'    => $this->input->post('uid')
        );

         print_r($data);

        $this->load->model('tranning_info_model');
        $this->tranning_info_model->UpdateExistingtranning_info($data, $tid);
    }

    //---/edit update controller : edit tranning_info details controller

    public function tranning_info_list()
    {
        if (!file_exists(APPPATH . '/views/pages/tranning_info_list.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('tranning_info_model');
                $data['list_of_tranning_info_record'] = $this->tranning_info_model->show_all_tranning_info_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/tranning_info_list', $data);
                $this->load->view('templates/footer');
            }
        }
    }
    public function view_contractor_bill()
    {
        if (!file_exists(APPPATH . '/views/pages/view_contractor_bill.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('contractor_bill_model');
                $data['list_of_contractor_bill_record'] = $this->contractor_bill_model->show_contractor_bill_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/view_contractor_bill', $data);
                $this->load->view('templates/footer');
            }
        }
    }
}
