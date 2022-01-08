<?php
class case_info_controller extends CI_Controller
{
    public function view_add_case_info($slug = 'add_case_info')
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
                $this->load->model('case_info_model');

                $data['userid'] = $login_status_check;
                $this->load->view('templates/header');
                $this->load->view('/pages/dashboard');
                $this->load->view('/pages/add_case_info', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function add_case_info()
    {

        //error_reporting(0);

        // File Upload function Start

        $data = array();
        $doc = json_encode(str_replace(" ", "", $_FILES['case_file']['name']));
        $filesCount = count($_FILES['case_file']['name']);

        $caseid = $this->input->post('caseid');
        $foldername = mkdir('./uploads/files/case/' . $caseid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['case_file']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['case_file']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['case_file']['tmp_name'][$i];


            $uploadPath = 'uploads/files/case/' . $caseid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option


        $data = array(
            'case_id'      => $caseid,
            'category'     => $this->input->post('category'),
            'type'         => $this->input->post('type'),
            'number'       => $this->input->post('number'),
            'filling_year' => $this->input->post('fillingY'),
            'dis_year'     => $this->input->post('disposalY'),
            'petitioners'  => $this->input->post('petitioners'),
            'respondant'   => $this->input->post('respondents'),
            'details'      => $this->input->post('details'),
            'status'       => $this->input->post('status'),
            'document'     => $doc,
            'state'        => 'Pending',
            'add_person'   => $this->input->post('uid'),
            'add_date'     => $this->input->post('date')
        );

       

        print_r($data);

        $this->load->model('case_info_model');
        $this->case_info_model->insertNewcase_info($data);
    }


    public function view_case_info()
    {
        if (!file_exists(APPPATH . '/views/pages/view_case_info.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('case_info_model');
                $data['list_of_pending_record'] = $this->case_info_model->show_case_info_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/view_case_info', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function details_case_info()
    {
        if (!file_exists(APPPATH . '/views/pages/case_info_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('case_info_model');
                $data['case_info_complete_info'] = $this->case_info_model->get_case_info_details($id);
                //print_r($data['case_info_complete_info']);
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/case_info_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }


    //---delete update controller : edit case_info details controller

    public function delete_single_case_info()
    {

        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {
            $id  = $this->uri->segment(2);
            $this->load->model('case_info_model');
            $result = $this->case_info_model->delete_case_info($id);
            if ($result == true) {
                $this->session->set_userdata('status', 'Delete Successfully');
                redirect('record-case-info');
            }
        }
    }


    //---/delete update controller : edit case_info details controller

    //---edit update controller : edit case_info details controller

    public function edit_case_info_details()
    {
        if (!file_exists(APPPATH . '/views/pages/edit_case_info_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('case_info_model');

                $data['single_post_data'] = $this->case_info_model->get_single_post_details($id);
                //print_r($data['single_post_data']);

                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/edit_case_info_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function update_case_info()
    { //error_reporting(0);

        $cid = $this->input->post('caid');

        // File Upload function Start

        $data = array();

        $filearray = $_FILES['case_file']['name'];
        $filearray2 = (null !== $this->input->post('case_file')) ? $this->input->post('case_file') : array();
        $filestotal = array_merge($filearray, $filearray2);
        if (count(array_filter($filestotal)) > 0) {
            $doc = json_encode(str_replace(" ", "", array_values(array_filter($filestotal))));
        } else {
            $doc = "";
        }


        $filesCount = count($_FILES['case_file']['name']);

        $caseid = $this->input->post('caseid');
        $foldername = mkdir('./uploads/files/case/' . $caseid, 0755, TRUE);



        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['case_file']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['case_file']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['case_file']['tmp_name'][$i];


            $uploadPath = 'uploads/files/case/' . $caseid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option

        $data = array(
            'case_id'      => $this->input->post('caseid'),
            'category'     => $this->input->post('category'),
            'type'         => $this->input->post('type'),
            'number'       => $this->input->post('number'),
            'filling_year' => $this->input->post('fillingY'),
            'dis_year'     => $this->input->post('disposalY'),
            'petitioners'  => $this->input->post('petitioners'),
            'respondant'   => $this->input->post('respondents'),
            'details'      => $this->input->post('details'),
            'status'       => $this->input->post('status'),
            'document'     => $doc,
            'state'        => 'Pending',
            'add_person'   => $this->input->post('uid'),
            'add_date'     => $this->input->post('date')
        );
        //print_r($data);

        $this->db->where('id', $cid);

        $this->load->model('case_info_model');
        $this->case_info_model->UpdateExistingcase_info($data, $cid);
    }

    //---/edit update controller : edit case_info details controller

    public function case_info_list()
    {
        if (!file_exists(APPPATH . '/views/pages/case_info_list.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('case_info_model');
                $data['list_of_case_info_record'] = $this->case_info_model->show_all_case_info_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/case_info_list', $data);
                $this->load->view('templates/footer');
            }
        }
    }
}
