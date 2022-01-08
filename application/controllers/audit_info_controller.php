<?php
class audit_info_controller extends CI_Controller
{
    public function view_add_audit_info($slug = 'add_audit_info')
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
                $this->load->model('audit_info_model');
                $main_head_values = $this->audit_info_model->get_head_info();
                $banks_list = $this->audit_info_model->get_bank_names();

                $data['main_head_values'] = $main_head_values;
                $data['banks_info'] = $banks_list;
                $data['userid'] = $login_status_check;
                $this->load->view('templates/header');
                $this->load->view('/pages/dashboard');
                $this->load->view('/pages/add_audit_info', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function add_audit_info()
    {

        //error_reporting(0);

        // BSR File  Upload function Start
        $data = array();
        $bsrFile = json_encode(str_replace(" ", "", $_FILES['bsr_file']['name']));
        $filesCount = count($_FILES['bsr_file']['name']);

        $auditid = $this->input->post('auditid');

        $foldername = mkdir('./uploads/Audit/bsr_file/' . $auditid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['bsr_file']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['bsr_file']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['bsr_file']['tmp_name'][$i];


            $uploadPath = 'uploads/Audit/bsr_file/' . $auditid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option


        // Advance Para File  Upload function Start
        $data = array();
        $advaPara = json_encode(str_replace(" ", "", $_FILES['adv_para_file']['name']));
        $filesCount = count($_FILES['adv_para_file']['name']);

        $auditid = $this->input->post('auditid');

        $foldername = mkdir('./uploads/Audit/advaPara/' . $auditid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['adv_para_file']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['adv_para_file']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['adv_para_file']['tmp_name'][$i];


            $uploadPath = 'uploads/Audit/advaPara/' . $auditid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option



        // Attach File Upload function Start
        $data = array();
        $attachFile = json_encode(str_replace(" ", "", $_FILES['img']['name']));
        $filesCount = count($_FILES['img']['name']);
        $auditid = $this->input->post('auditid');

        $foldername = mkdir('./uploads/Audit/Attach/' . $auditid, 0755, TRUE);
        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['img']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['img']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['img']['tmp_name'][$i];


            $uploadPath = 'uploads/Audit/Attach/' . $auditid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option


        $dataA = array(
            'audit_id'         => $this->input->post('auditid'),
            'session'          => $this->input->post('session'),
            'from_date'        => $this->input->post('fromdate'),
            'todate'           => $this->input->post('todate'),
            'total_para'       => $this->input->post('total_para'),
            'advance_para'     => $this->input->post('advances_para'),
            'general_para'     => $this->input->post('general_para'),
            'bsr_reply'        => $this->input->post('bsr_reply'),
            'bsr_date'         => $this->input->post('bsr_date'),
            'bsr_file'         => $bsrFile,
            'ad_para_reply'    => $this->input->post('advance_para_reply'),
            'ad_para_date'     => $this->input->post('adv_para_date'),
            'ad_para_file'     => $advaPara,
            'adit_filnished'   => $this->input->post('audit_finished'),
            'audit_fini_amount' => $this->input->post('audit_fin_amount'),
            'audit_pending'    => $this->input->post('audit_pending'),
            'audit_pending_am' => $this->input->post('aud_pae_amount'),
            'attach_file'      => $attachFile,
            'add_date'         => $this->input->post('date'),
            'userid'       => $this->input->post('uid'),
            'total_para_money' => $this->input->post('total_para_money'),
            'advances_para_money' => $this->input->post('advances_para_money'),
            'general_para_money' => $this->input->post('general_para_money'),
            'audit_finished_money' => $this->input->post('audit_finished_money'),
            'audit_fin_amount_money' => $this->input->post('audit_fin_amount_money'),
            'audit_pending_money' => $this->input->post('audit_pending_money'),
            'aud_pae_amount_money' => $this->input->post('aud_pae_amount_money'),
            'total_pae_amount' => $this->input->post('total_pae_amount')
        );

        print_r($dataA);

        $this->load->model('audit_info_model');
        $this->audit_info_model->insertNewaudit_info($dataA);
    }


    public function view_audit_info()
    {
        if (!file_exists(APPPATH . '/views/pages/view_audit_info.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('audit_info_model');
                $data['list_of_pending_record'] = $this->audit_info_model->show_audit_info_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/view_audit_info', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function details_audit_info()
    {
        if (!file_exists(APPPATH . '/views/pages/audit_info_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('audit_info_model');
                $data['audit_info_complete_info'] = $this->audit_info_model->get_audit_info_details($id);
                //print_r($data['audit_info_complete_info']);
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/audit_info_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }


    //---delete update controller : edit audit_info details controller

    public function delete_single_audit_info()
    {

        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {
            $id  = $this->uri->segment(2);
            $this->load->model('audit_info_model');
            $result = $this->audit_info_model->delete_audit_info($id);
            if ($result == true) {
                $this->session->set_userdata('status', 'Delete Successfully');
                redirect('record-audit-info');
            }
        }
    }


    //---/delete update controller : edit audit_info details controller

    //---edit update controller : edit audit_info details controller

    public function edit_audit_info_details()
    {
        if (!file_exists(APPPATH . '/views/pages/edit_audit_info_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('audit_info_model');

                $data['single_post_data'] = $this->audit_info_model->get_single_post_details($id);
                //print_r($data['single_post_data']);

                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/edit_audit_info_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function update_audit_info()
    {
        //error_reporting(0);
        $auid = $this->input->post('auid');
        // BSR File  Upload function Start
        $data = array();
        $bsrFile = json_encode(str_replace(" ", "", $_FILES['bsr_file']['name']));
        $filesCount = count($_FILES['bsr_file']['name']);

        $auditid = $this->input->post('auditid');

        if ($bsrFile == '[""]') {
            $bsrFile = $this->input->post('bsr_file2');
        }

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['bsr_file']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['bsr_file']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['bsr_file']['tmp_name'][$i];


            $uploadPath = 'uploads/Audit/bsr_file/' . $auditid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option


        // Advance Para File  Upload function Start
        $data = array();
        $advaPara = json_encode(str_replace(" ", "", $_FILES['adv_para_file']['name']));
        $filesCount = count($_FILES['adv_para_file']['name']);

        $auditid = $this->input->post('auditid');

        if ($advaPara == '[""]') {
            $advaPara = $this->input->post('adv_para_file2');
        }

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['adv_para_file']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['adv_para_file']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['adv_para_file']['tmp_name'][$i];


            $uploadPath = 'uploads/Audit/advaPara/' . $auditid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option



        // Attach File Upload function Start
        $data = array();

        $filearray = $_FILES['img']['name'];
        $filearray2 = (null !== $this->input->post('img')) ? $this->input->post('img') : array();
        $filestotal = array_merge($filearray, $filearray2);
        if (count(array_filter($filestotal)) > 0) {
            $attachFile = json_encode(str_replace(" ", "", array_values(array_filter($filestotal))));
        } else {
            $attachFile = "";
        }


        $filesCount = count($_FILES['img']['name']);
        $auditid = $this->input->post('auditid');

        // if($attachFile == '[""]' ){ 
        // 	$attachFile= $this->input->post('img2');
        // }

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['img']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['img']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['img']['tmp_name'][$i];


            $uploadPath = 'uploads/Audit/Attach/' . $auditid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option

        $dataA = array(
            'audit_id'         => $this->input->post('auditid'),
            'session'          => $this->input->post('session'),
            'from_date'        => $this->input->post('fromdate'),
            'todate'           => $this->input->post('todate'),
            'total_para'       => $this->input->post('total_para'),
            'advance_para'     => $this->input->post('advances_para'),
            'general_para'     => $this->input->post('general_para'),
            'bsr_reply'        => $this->input->post('bsr_reply'),
            'bsr_date'         => $this->input->post('bsr_date'),
            'bsr_file'         => $bsrFile,
            'ad_para_reply'    => $this->input->post('advance_para_reply'),
            'ad_para_date'     => $this->input->post('adv_para_date'),
            'ad_para_file'     => $advaPara,
            'adit_filnished'   => $this->input->post('audit_finished'),
            'audit_fini_amount' => $this->input->post('audit_fin_amount'),
            'audit_pending'    => $this->input->post('audit_pending'),
            'audit_pending_am' => $this->input->post('aud_pae_amount'),
            'attach_file'      => $attachFile,
            'add_date'         => $this->input->post('date'),
            'userid'       => $this->input->post('uid'),
            'total_para_money' => $this->input->post('total_para_money'),
            'advances_para_money' => $this->input->post('advances_para_money'),
            'general_para_money' => $this->input->post('general_para_money'),
            'audit_finished_money' => $this->input->post('audit_finished_money'),
            'audit_fin_amount_money' => $this->input->post('audit_fin_amount_money'),
            'audit_pending_money' => $this->input->post('audit_pending_money'),
            'aud_pae_amount_money' => $this->input->post('aud_pae_amount_money'),
            'total_pae_amount' => $this->input->post('total_pae_amount')
        );



        
        print_r($dataA);

        $this->load->model('audit_info_model');
        $this->audit_info_model->UpdateExistingaudit_info($dataA, $auid);
    }

    //---/edit update controller : edit audit_info details controller

    public function audit_info_list()
    {
        if (!file_exists(APPPATH . '/views/pages/audit_info_list.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('audit_info_model');
                $data['list_of_audit_info_record'] = $this->audit_info_model->show_all_audit_info_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/audit_info_list', $data);
                $this->load->view('templates/footer');
            }
        }
    }
}