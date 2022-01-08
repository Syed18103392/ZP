<?php
class fdr_info_controller extends CI_Controller
{
    public function view_add_fdr_info($slug = 'add_fdr_info')
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
                $this->load->model('fdr_info_model');
                $data['bank_info']=$this->fdr_info_model->get_bank_names();
                $data['userid'] = $login_status_check;
                $this->load->view('templates/header');
                $this->load->view('/pages/dashboard');
                $this->load->view('/pages/add_fdr_info', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function add_fdr_info()
    {


        //error_reporting(0);
        // File Upload function Start
        $data = array();
        $doc = json_encode(str_replace(" ", "", $_FILES['fdrfile']['name']));
        $filesCount = count($_FILES['fdrfile']['name']);

        $fdrid = $this->input->post('fdrid');
        $foldername = mkdir('./uploads/files/FDR/' . $fdrid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['fdrfile']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['fdrfile']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['fdrfile']['tmp_name'][$i];


            $uploadPath = 'uploads/files/FDR/' . $fdrid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|jpeg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option


        $dataA = array(
            'fdr_id'      => $fdrid,
            'bank'        => $this->input->post('bank'),
            'branch'      => $this->input->post('branch'),
            'fdr_number'  => $this->input->post('fdrnumber'),
            'start_fdr'   => $this->input->post('start_fdr'),
            'start_date'  => $this->input->post('start_date'),
            'present_fdr' => $this->input->post('present_fdr'),
            'present_date' => $this->input->post('present_date'),
            'duration'    => $this->input->post('duration'),
            'interst'     => $this->input->post('interst'),
            'fdr_file'    => $doc,
            'status'      => 'Pending',
            'add_date'    => $this->input->post('date'),
            'add_person'  => $this->input->post('uid')
        );

        print_r($dataA);

        $this->load->model('fdr_info_model');
        $this->fdr_info_model->insertNewfdr_info($dataA);
    }


    public function view_fdr_info()
    {
        if (!file_exists(APPPATH . '/views/pages/view_fdr_info.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('fdr_info_model');
                $data['list_of_pending_record'] = $this->fdr_info_model->show_fdr_info_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/view_fdr_info', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function details_fdr_info()
    {
        if (!file_exists(APPPATH . '/views/pages/fdr_info_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('fdr_info_model');
                $data['fdr_info_complete_info'] = $this->fdr_info_model->get_fdr_info_details($id);
                //print_r($data['fdr_info_complete_info']);
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/fdr_info_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }


    //---delete update controller : edit fdr_info details controller

    public function delete_single_fdr_info()
    {

        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {
            $id  = $this->uri->segment(2);
            $this->load->model('fdr_info_model');
            $result = $this->fdr_info_model->delete_fdr_info($id);
            if ($result == true) {
                $this->session->set_userdata('status', 'Delete Successfully');
                redirect('record-fdr-info');
            }
        }
    }


    //---/delete update controller : edit fdr_info details controller

    //---edit update controller : edit fdr_info details controller

    public function edit_fdr_info_details()
    {
        if (!file_exists(APPPATH . '/views/pages/edit_fdr_info_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('fdr_info_model');

                $data['single_post_data'] = $this->fdr_info_model->get_single_post_details($id);
                $data['bank_info'] = $this->fdr_info_model->get_bank_names();
                //print_r($data['single_post_data']);

                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/edit_fdr_info_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function update_fdr_info()
    {
        //error_reporting(0);
        $fdid = $this->input->post('fdid');

        // File Upload function Start
        $data = array();

        $filearray = $_FILES['fdrfile']['name'];
        $filearray2 = (null !== $this->input->post('fdrfile')) ? $this->input->post('fdrfile') : array();
        $filestotal = array_merge($filearray, $filearray2);
        if (count(array_filter($filestotal)) > 0) {
            $doc = json_encode(str_replace(" ", "", array_values(array_filter($filestotal))));
        } else {
            $doc = "";
        }


        $filesCount = count($_FILES['fdrfile']['name']);

        $fdrid = $this->input->post('fdrid');
        $foldername = mkdir('./uploads/files/FDR/' . $fdrid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['fdrfile']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['fdrfile']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['fdrfile']['tmp_name'][$i];


            $uploadPath = 'uploads/files/FDR/' . $fdrid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option

        $data = array(
            'bank'        => $this->input->post('bank'),
            'branch'      => $this->input->post('branch'),
            'fdr_number'  => $this->input->post('fdrnumber'),
            'start_fdr'   => $this->input->post('start_fdr'),
            'start_date'  => $this->input->post('start_date'),
            'present_fdr' => $this->input->post('present_fdr'),
            'present_date' => $this->input->post('present_date'),
            'duration'    => $this->input->post('duration'),
            'interst'     => $this->input->post('interst'),
            'status'      => 'Pending',
            'fdr_file'    => $doc,
            'add_date'    => $this->input->post('date'),
            'add_person'  => $this->input->post('uid')
        );

        $this->load->model('fdr_info_model');
        $this->fdr_info_model->UpdateExistingfdr_info($data, $fdid);
    }

    //---/edit update controller : edit fdr_info details controller

    public function fdr_info_list()
    {
        if (!file_exists(APPPATH . '/views/pages/fdr_info_list.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('fdr_info_model');
                $data['list_of_fdr_info_record'] = $this->fdr_info_model->show_all_fdr_info_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/fdr_info_list', $data);
                $this->load->view('templates/footer');
            }
        }
    }
}
