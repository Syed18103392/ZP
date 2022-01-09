<?php
class person_land_info_controller extends CI_Controller
{
    public function view_add_person_land_info($slug = 'add_person_land_info')
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
                $this->load->model('person_land_info_model');
                $main_head_values = $this->person_land_info_model->get_head_info();
                $banks_list = $this->person_land_info_model->get_bank_names();

                $data['main_head_values'] = $main_head_values;
                $data['banks_info'] = $banks_list;
                $data['userid'] = $login_status_check;
                $this->load->view('templates/header');
                $this->load->view('/pages/dashboard');
                $this->load->view('/pages/add_person_land_info', $data);
                $this->load->view('templates/footer');
            }
        }
    }
    public function add_person_land_info()
    {

        //error_reporting(0);	
        // C AS Informaion Add
        $data = array();
        $temp = count($this->input->post('cs_khotian'));
        for ($i = 0; $i < $temp; $i++) {
            $cs_kotian_no  = $this->input->post('cs_kotian');

            $cs_khotian  = $this->input->post('cs_khotian');
            $cs_dag      = $this->input->post('cs_dag');
            $cs_land     = $this->input->post('cs_land');
            $cs_class    = $this->input->post('cs_class');
            $add_date    = date("d-m-Y");
            $status      = 'Pending';
            $add_person  = $this->input->post('uid');

            if ($cs_khotian[$i] != '') {
                $data[] = array(
                    'cs_kotian_no'  => $cs_kotian_no,
                    'kotian_no'     => $cs_khotian[$i],
                    'dag_no'        => $cs_dag[$i],
                    'land_quan'     => $cs_land[$i],
                    'class'         => $cs_class[$i],
                    'add_date'      => $add_date,
                    'status'        => $status,
                    'add_person'    => $add_person
                );
            }
        }
        // print_r($data);

        $insert = count($data);
        if ($insert) {
            $this->db->insert_batch('person_land_cs', $data);
        }

        // End CS Details 


        // S A Informaion Add
        $data = array();
        $temp = count($this->input->post('cs_khotian'));
        for ($i = 0; $i < $temp; $i++) {
            $cs_kotian_no  = $this->input->post('cs_kotian');

            $sa_khotian  = $this->input->post('sa_khotian');
            $sa_dag      = $this->input->post('sa_dag');
            $sa_land     = $this->input->post('sa_land');
            $sa_class    = $this->input->post('sa_class');
            $status      = 'Pending';
            $add_person  = $this->input->post('uid');

            if ($sa_khotian[$i] != '') {
                $data[] = array(
                    'cs_kotian_no'  => $cs_kotian_no,
                    'kotian_no'     => $sa_khotian[$i],
                    'dag_no'        => $sa_dag[$i],
                    'land_quan'     => $sa_land[$i],
                    'class'         => $sa_class[$i],
                    'status'        => $status,
                    'add_person'    => $add_person
                );
            }
        }
        // print_r($data);

        $insert = count($data);
        if ($insert) {
            $this->db->insert_batch('person_land_sa', $data);
        }

        // End S A Details 


        // R S Informaion Add
        $data = array();
        $temp = count($this->input->post('rs_khotian'));
        for ($i = 0; $i < $temp; $i++) {
            $cs_kotian_no  = $this->input->post('cs_kotian');

            $rs_khotian  = $this->input->post('rs_khotian');
            $rs_dag      = $this->input->post('rs_dag');
            $rs_land     = $this->input->post('rs_land');
            $rs_class    = $this->input->post('rs_class');
            $status      = 'Pending';
            $add_person  = $this->input->post('uid');

            if ($rs_khotian[$i] != '') {
                $data[] = array(
                    'cs_kotian_no'  => $cs_kotian_no,
                    'kotian_no'     => $rs_khotian[$i],
                    'dag_no'        => $rs_dag[$i],
                    'land_quan'     => $rs_land[$i],
                    'class'         => $rs_class[$i],
                    'status'        => $status,
                    'add_person'    => $add_person
                );
            }
        }
        // print_r($data);
        $insert = count($data);
        if ($insert) {
            $this->db->insert_batch('person_land_rs', $data);
        }
        //End Tranning Details Add Systems

        //File Upload function Start
        $data = array();
        $doc = json_encode(str_replace(" ", "", $_FILES['userFiles']['name']));
        $filesCount = count($_FILES['userFiles']['name']);

        $cs_kotian = $this->input->post('cs_kotian');

        $foldername = mkdir('./uploads/PersonLand/' . $cs_kotian, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['userFiles']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];

            $uploadPath = 'uploads/PersonLand/' . $cs_kotian;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        //	File Upload function End 

        $dataA = array(
            'thana_name'   => $this->input->post('thana'),
            'moja_name'    => $this->input->post('moja_number'),
            'khotian_no'   => $this->input->post('cs_kotian'),
            'land_id'      => $this->input->post('land_rec_id'),
            'add_date'     => $this->input->post('date'),
            'userFiles'     => $doc,
            'status'       => 'Pending',
            'add_person'   => $this->input->post('uid')
        );
        // print_r($dataA);

        $this->load->model('person_land_info_model');
        $this->person_land_info_model->insertNewperson_land_info($dataA);
    }

    public function view_person_land_info()
    {
        if (!file_exists(APPPATH . '/views/pages/view_person_land_info.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('person_land_info_model');
                $data['list_of_pending_record'] = $this->person_land_info_model->show_person_land_info_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/view_person_land_info', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function details_person_land_info()
    {
        if (!file_exists(APPPATH . '/views/pages/person_land_info_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('person_land_info_model');
                $data['person_land_info_complete_info'] = $this->person_land_info_model->get_person_land_info_details($id);
                //print_r($data['person_land_info_complete_info']);
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/person_land_info_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }


    // status controller : controll the approve and refuse add money proposal
    public function person_land_info_status()
    {
        $id = $this->uri->segment(2);
        $data = array(
            'status' => 'approved'
        );
        $this->load->model('person_land_info_model');
        $result = $this->person_land_info_model->approveperson_land_info($data, $id);
        //print_r($result);
        if ($result == true) {
            $this->session->set_userdata('status', 'Approved');
            redirect('expenditure_list');
        }
    }


    // status controller : controll the approve and refuse add money proposal

    //---delete update controller : edit person_land_info details controller

    public function delete_single_person_land_info()
    {

        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {
            $id  = $this->uri->segment(2);
            $this->load->model('person_land_info_model');
            $result = $this->person_land_info_model->delete_person_land_info($id);
            if ($result == true) {
                $this->session->set_userdata('status', 'Delete Successfully');
                redirect('record-land-recoad');
            }
        }
    }


    //---/delete update controller : edit person_land_info details controller

    //---edit update controller : edit person_land_info details controller

    public function edit_person_land_info_details()
    {
        if (!file_exists(APPPATH . '/views/pages/edit_person_land_info_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('person_land_info_model');

                $data['single_post_data'] = $this->person_land_info_model->get_single_post_details($id);
                // $data['all_head_list'] = $this->person_land_info_model->get_head_info();
                //$data['all_bank_list'] = $this->person_land_info_model->get_bank_names();
                //print_r($data);
                if (isset($data['single_post_data']['info']->ex_file)) {
                    $this->session->set_userdata('editable_file_path', $data['single_post_data']['info']->ex_file);
                }
                //print_r($data['single_post_data']);

                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/edit_person_land_info_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function update_person_land_info()
    {
        //error_reporting(0);
        // Land Recoard Details

        $rid         = $this->input->post('rid');
        $dag         = $this->input->post('dag');
        $land_class  = $this->input->post('land_class');
        $akok        = $this->input->post('akok');
        $shotok      = $this->input->post('shotok');
        $recoad      = $this->input->post('recoad');
        $comments    = $this->input->post('comments');

        $updateArray = array();

        for ($x = 0; $x < sizeof($rid); $x++) {
            $updateArray[]   = array(
                'id'            => $rid[$x],
                'dag_no'        => $dag[$x],
                'land_type'     => $land_class[$x],
                'land_akok'     => $akok[$x],
                'land_shotok'   => $shotok[$x],
                'land_recoard'  => $recoad[$x],
                'comments'      => $comments[$x],
                'status'        => 'edit'
            );
        }
        if ($updateArray) {
            $this->db->update_batch('person_land_info_details', $updateArray, 'id');
        }

        //echo "cc";


        // File Upload function Start
        $data = array();


        $filearray = $_FILES['userFiles']['name'];
        $filearray2 = (null !== $this->input->post('userFiles')) ? $this->input->post('userFiles') : array();

        $filestotal = array_merge($filearray, $filearray2);
        if (count(array_filter($filestotal)) > 0) {
            $doc = json_encode(str_replace(" ", "", array_values(array_filter($filestotal))));
        } else {
            $doc = "";
        }


        $filesCount = count($_FILES['userFiles']['name']);
        $rec_id = $this->input->post('land_rec_id');


        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['userFiles']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];

            $uploadPath = 'uploads/Land_Record/' . $rec_id;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // File Upload function End 
        //	echo $doc; exit();

        $landid = $this->input->post('land_rec_id');
        $dataA = array(
            'record_id'   => $this->input->post('land_rec_id'),
            'thana'       => $this->input->post('thana'),
            'land_type'   => $this->input->post('land_type'),
            'type_others' => $this->input->post('land_others'),
            'moja_name'   => $this->input->post('moja_number'),
            'jal_number'  => $this->input->post('jal_number'),
            'kotian'      => $this->input->post('khotian'),
            'add_date'    => $this->input->post('date'),
            'add_file'    => $doc,
            'add_person'  => $this->input->post('uid')
        );

        //	 print_r($dataA);
        $this->db->where('record_id', $landid);
        $this->db->update('person_land_info', $dataA);
        //if($this->db->affected_rows() > 0){

        $this->session->set_userdata('status', 'information Update Sucessfully');
        redirect('record-land-recoad');
        //}
        // print_r($data);
    }

    //---/edit update controller : edit person_land_info details controller

    public function person_land_info_list()
    {
        if (!file_exists(APPPATH . '/views/pages/person_land_info_list.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('person_land_info_model');
                $data['list_of_person_land_info_record'] = $this->person_land_info_model->show_all_person_land_info_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/person_land_info_list', $data);
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
