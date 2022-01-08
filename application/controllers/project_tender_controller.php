<?php
class project_tender_controller extends CI_Controller
{
    public function view_add_project_tender($slug = 'add_project_tender')
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
                $this->load->model('project_tender_model');
                $main_head_values = $this->project_tender_model->get_head_info();
                $banks_list = $this->project_tender_model->get_bank_names();

                $data['main_head_values'] = $main_head_values;
                $data['banks_info'] = $banks_list;
                $data['userid'] = $login_status_check;
                $this->load->view('templates/header');
                $this->load->view('/pages/dashboard');
                $this->load->view('/pages/add_project_tender', $data);
                $this->load->view('templates/footer');
            }
        }
    }
    public function add_project_tender()
    {
        // Applications File Upload function Start
        $data = array();
        $application = json_encode(str_replace(" ", "", $_FILES['applications']['name']));
        $filesCount = count($_FILES['applications']['name']);

        $pid = $this->input->post('pid');
        $foldername = mkdir('./uploads/project/applications/' . $pid, 0755, TRUE);




        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['applications']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['applications']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['applications']['tmp_name'][$i];
            $_FILES['userFile']['size'] = $_FILES['applications']['size'][$i];


            $uploadPath = 'uploads/project/applications/' . $pid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option


        // Applications File Upload function Start
        $data = array();
        $approval_paper = json_encode(str_replace(" ", "", $_FILES['approval_paper']['name']));
        $filesCount = count($_FILES['approval_paper']['name']);

        $pid = $this->input->post('pid');
        $foldername = mkdir('./uploads/project/Approval/' . $pid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['approval_paper']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['approval_paper']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['approval_paper']['tmp_name'][$i];


            $uploadPath = 'uploads/project/Approval/' . $pid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option


        // images File Upload function Start
        $data = array();
        $images = json_encode(str_replace(" ", "", $_FILES['images']['name']));
        $filesCount = count($_FILES['images']['name']);

        $pid = $this->input->post('pid');
        $foldername = mkdir('./uploads/project/images/' . $pid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['images']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['images']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['images']['tmp_name'][$i];


            $uploadPath = 'uploads/project/images/' . $pid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option


        // National ID File Upload function Start
        $data = array();
        $nid = json_encode(str_replace(" ", "", $_FILES['nid']['name']));
        $filesCount = count($_FILES['nid']['name']);

        $pid = $this->input->post('pid');
        $foldername = mkdir('./uploads/project/NID/' . $pid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['nid']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['nid']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['nid']['tmp_name'][$i];


            $uploadPath = 'uploads/project/NID/' . $pid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option

        // Agrement Paper File Upload function Start
        $data = array();
        $agrementPaper = json_encode(str_replace(" ", "", $_FILES['agrementPaper']['name']));
        $filesCount = count($_FILES['agrementPaper']['name']);

        $pid = $this->input->post('pid');
        $foldername = mkdir('./uploads/project/AGREEMENT/' . $pid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['agrementPaper']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['agrementPaper']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['agrementPaper']['tmp_name'][$i];


            $uploadPath = 'uploads/project/AGREEMENT/' . $pid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option

        // document Paper File Upload function Start
        $data = array();
        $document = json_encode(str_replace(" ", "", $_FILES['document']['name']));
        $filesCount = count($_FILES['document']['name']);

        $pid = $this->input->post('pid');
        $foldername = mkdir('./uploads/project/DOCUMENT/' . $pid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['document']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['document']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['document']['tmp_name'][$i];


            $uploadPath = 'uploads/project/DOCUMENT/' . $pid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option

        // approvalNote File Upload function Start
        $data = array();
        $approvalNote = json_encode(str_replace(" ", "", $_FILES['approvalNote']['name']));
        $filesCount = count($_FILES['approvalNote']['name']);

        $pid = $this->input->post('pid');
        $foldername = mkdir('./uploads/project/Approval_file/' . $pid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['approvalNote']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['approvalNote']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['approvalNote']['tmp_name'][$i];


            $uploadPath = 'uploads/project/Approval_file/' . $pid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option

        $dataA = array(
            'projectid'         => $this->input->post('pid'),
            'type'              => $this->input->post('title'),
            'others'            => $this->input->post('others'),
            'session'           => $this->input->post('session'),
            'budget_type'       => $this->input->post('budget_type'),
            'budget_others'     => $this->input->post('budget_type_others'),
            'implemention'      => $this->input->post('implemet'),
            'imple_others'      => $this->input->post('implement_others'),
            'thana'             => $this->input->post('thana'),
            'project_id'        => $this->input->post('project_id'),
            'project_name'      => $this->input->post('project_name'),
            'estimiting_cost'   => $this->input->post('estimated_cost'),
            'contract_bill'     => $this->input->post('contract_bill'),
            'first_bill'        => $this->input->post('first_bill'),
            'secend_bill'       => $this->input->post('secend_bill'),
            'start_year'        => $this->input->post('startyear'),
            'applications'      => $application,
            'approval'          => $approval_paper,
            'contractor_name'   => $this->input->post('contractor_name'),
            'contact_number'    => $this->input->post('contactNumber'),
            'person_img'        => $images,
            'nid'               => $nid,
            'workAgreement'     => $agrementPaper,
            'document'          => $document,
            'approvalNote'      => $approvalNote,
            'finishedyear'      => $this->input->post('finishedYear'),
            'status'            => 'Pending',
            'add_date'          => $this->input->post('date'),
            'add_person'        => $this->input->post('uid')
        );

         //print_r($dataA);
        $this->load->model('project_tender_model');
        $this->project_tender_model->insertNewproject_tender($dataA);
    }


    public function view_project_tender()
    {
        if (!file_exists(APPPATH . '/views/pages/view_project_tender.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('project_tender_model');
                $data['list_of_pending_record'] = $this->project_tender_model->show_project_tender_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/view_project_tender', $data);
                $this->load->view('templates/footer');
            }
        }
    }
    public function view_tender()
    {
        if (!file_exists(APPPATH . '/views/pages/view_project_tender.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('project_tender_model');
                $data['list_of_pending_record'] = $this->project_tender_model->show_project_tender_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/view_tender', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function details_project_tender()
    {
        if (!file_exists(APPPATH . '/views/pages/project_tender_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('project_tender_model');
                $data['project_tender_complete_info'] = $this->project_tender_model->get_project_tender_details($id);
                //print_r($data['project_tender_complete_info']);
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/project_tender_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }


    //---delete update controller : edit project_tender details controller

    public function delete_single_project_tender()
    {

        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {
            $id  = $this->uri->segment(2);
            $this->load->model('project_tender_model');
            $result = $this->project_tender_model->delete_project_tender($id);
            if ($result == true) {
                $this->session->set_userdata('status', 'Delete Successfully');
                redirect('record-project-tender');
            }
        }
    }


    //---/delete update controller : edit project_tender details controller

    //---edit update controller : edit project_tender details controller

    public function edit_project_tender_details()
    {
        if (!file_exists(APPPATH . '/views/pages/edit_project_tender_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('project_tender_model');

                $data['single_post_data'] = $this->project_tender_model->get_single_post_details($id);
                //print_r($data['single_post_data']);

                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/edit_project_tender_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function update_project_tender()
    {
        // //error_reporting(0);
        $uid = $this->input->post('id');
        // Applications File Upload function Start
        $data = array();
        $application = json_encode(str_replace(" ", "", $_FILES['applications']['name']));
        $filesCount = count($_FILES['applications']['name']);

        $pid = $this->input->post('pid');


        if ($application == '[""]') {
            $application = $this->input->post('applications2');
        }

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['applications']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['applications']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['applications']['tmp_name'][$i];


            $uploadPath = 'uploads/project/applications/' . $pid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }

        // End file upload Option


        // Applications File Upload function Start
        $data = array();
        $approval_paper = json_encode(str_replace(" ", "", $_FILES['approval_paper']['name']));
        $filesCount = count($_FILES['approval_paper']['name']);

        $pid = $this->input->post('pid');
        if ($approval_paper == '[""]') {
            $approval_paper = $this->input->post('approval_paper2');
        }
        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['approval_paper']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['approval_paper']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['approval_paper']['tmp_name'][$i];


            $uploadPath = 'uploads/project/Approval/' . $pid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option


        // images File Upload function Start
        $data = array();
        $images = json_encode(str_replace(" ", "", $_FILES['images']['name']));
        $filesCount = count($_FILES['images']['name']);

        $pid = $this->input->post('pid');
        if ($images == '[""]') {
            $images = $this->input->post('images2');
        }
        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['images']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['images']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['images']['tmp_name'][$i];


            $uploadPath = 'uploads/project/images/' . $pid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option


        // National ID File Upload function Start
        $data = array();
        $nid = json_encode(str_replace(" ", "", $_FILES['nid']['name']));
        $filesCount = count($_FILES['nid']['name']);

        $pid = $this->input->post('pid');

        if ($nid == '[""]') {
            $nid = $this->input->post('nid2');
        }
        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['nid']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['nid']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['nid']['tmp_name'][$i];


            $uploadPath = 'uploads/project/NID/' . $pid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option

        // Agrement Paper File Upload function Start
        $data = array();
        $agrementPaper = json_encode(str_replace(" ", "", $_FILES['agrementPaper']['name']));
        $filesCount = count($_FILES['agrementPaper']['name']);

        $pid = $this->input->post('pid');
        if ($agrementPaper == '[""]') {
            $agrementPaper = $this->input->post('agrementPaper2');
        }
        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['agrementPaper']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['agrementPaper']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['agrementPaper']['tmp_name'][$i];


            $uploadPath = 'uploads/project/AGREEMENT/' . $pid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option


        // document Paper File Upload function Start
        $data = array();

        $filearray = $_FILES['document']['name'];
        $filearray2 = (null !== $this->input->post('document')) ? $this->input->post('document') : array();
        $filestotal = array_merge($filearray, $filearray2);
        if (count(array_filter($filestotal)) > 0) {
            $document = json_encode(str_replace(" ", "", array_values(array_filter($filestotal))));
        } else {
            $document = "";
        }

        $filesCount = count($_FILES['document']['name']);

        $pid = $this->input->post('pid');

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['document']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['document']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['document']['tmp_name'][$i];


            $uploadPath = 'uploads/project/DOCUMENT/' . $pid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option

        // approvalNote File Upload function Start
        $data = array();
        $approvalNote = json_encode(str_replace(" ", "", $_FILES['approvalNote']['name']));
        $filesCount = count($_FILES['approvalNote']['name']);

        $pid = $this->input->post('pid');
        if ($approvalNote == '[""]') {
            $approvalNote = $this->input->post('approvalNote2');
        }
        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['approvalNote']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['approvalNote']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['approvalNote']['tmp_name'][$i];


            $uploadPath = 'uploads/project/Approval_file/' . $pid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option




        $dataA = array(
            'projectid'         => $this->input->post('pid'),
            'type'              => $this->input->post('title'),
            'others'            => $this->input->post('others'),
            'session'           => $this->input->post('session'),
            'budget_type'       => $this->input->post('budget_type'),
            'budget_others'     => $this->input->post('budget_type_others'),
            'implemention'      => $this->input->post('implemet'),
            'imple_others'      => $this->input->post('implement_others'),
            'thana'             => $this->input->post('thana'),
            'project_id'        => $this->input->post('project_id'),
            'project_name'      => $this->input->post('project_name'),
            'estimiting_cost'   => $this->input->post('estimated_cost'),
            'contract_bill'     => $this->input->post('contract_bill'),
            'first_bill'        => $this->input->post('first_bill'),
            'secend_bill'       => $this->input->post('secend_bill'),
            'start_year'        => $this->input->post('startyear'),
            'applications'      => $application,
            'approval'          => $approval_paper,
            'contractor_name'   => $this->input->post('contractor_name'),
            'contact_number'    => $this->input->post('contactNumber'),
            'person_img'        => $images,
            'nid'               => $nid,
            'workAgreement'     => $agrementPaper,
            'document'          => $document,
            'approvalNote'      => $approvalNote,
            'finishedyear'      => $this->input->post('finishedYear'),
            'status'            => 'completed',
            'add_date'          => $this->input->post('date'),
            'add_person'        => $this->input->post('uid')
        );

        //  print_r($dataA);

        $this->load->model('project_tender_model');
        $this->project_tender_model->UpdateExistingproject_tender($dataA, $uid);
    }

    //---/edit update controller : edit project_tender details controller

    public function project_tender_list()
    {
        if (!file_exists(APPPATH . '/views/pages/project_tender_list.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('project_tender_model');
                $data['list_of_project_tender_record'] = $this->project_tender_model->show_all_project_tender_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/project_tender_list', $data);
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
