<?php
class land_recoad_controller extends CI_Controller
{
    public function view_add_land_recoad($slug = 'add_land_recoad')
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
                $this->load->model('land_recoad_model');
                $main_head_values = $this->land_recoad_model->get_head_info();
                $banks_list = $this->land_recoad_model->get_bank_names();

                $data['main_head_values'] = $main_head_values;
                $data['banks_info'] = $banks_list;
                $data['userid'] = $login_status_check;
                $this->load->view('templates/header');
                $this->load->view('/pages/dashboard');
                $this->load->view('/pages/add_land_recoad', $data);
                $this->load->view('templates/footer');
            }
        }
    }
    public function add_land_recoad()
    {
        //error_reporting(0);
        // Recoard Details informaion Add
        $data = array();
        $temp = count($this->input->post('dag'));
        for ($i = 0; $i < $temp; $i++) {
            $land_rec_id = $this->input->post('land_rec_id');
            $dag         = $this->input->post('dag');
            $land_class  = $this->input->post('land_class');
            $akok        = $this->input->post('akok');
            $shotok      = $this->input->post('shotok');
            $recoad      = $this->input->post('recoad');
            $comments    = $this->input->post('comments');
            if ($dag[$i] != '') {
                $data[] = array(
                    'receoad_id'   => $land_rec_id,
                    'dag_no'       => $dag[$i],
                    'land_type'    => $land_class[$i],
                    'land_akok'    => $akok[$i],
                    'land_shotok'  => $shotok[$i],
                    'land_recoard' => $recoad[$i],
                    'comments'     => $comments[$i],
                    'status' => 1
                );
            }
        }
        // print_r($data);

        $insert = count($data);
         if ($insert) {
           $this->db->insert_batch('land_recoad_details', $data);
         }

        // End Recoard Details Add Systems




        // File Upload function Start
        $data = array();
        $doc = json_encode(str_replace(" ", "", $_FILES['userFiles']['name']));
        $filesCount = count($_FILES['userFiles']['name']);

        $rec_id = $this->input->post('land_rec_id');
        $foldername = mkdir('./uploads/Land_Record/' . $rec_id, 0755, TRUE);

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



        $dataA = array(
            'record_id'   => $this->input->post('land_rec_id'),
            'thana'       => $this->input->post('thana'),
            'land_type'   => $this->input->post('land_type'),
            'type_others' => $this->input->post('land_others'),
            'moja_name'   => $this->input->post('moja_number'),
            'jal_number'   => $this->input->post('jal_number'),
            'kotian'      => $this->input->post('khotian'),
            'add_date'    => $this->input->post('date'),
            'add_file'    => $doc,
            'add_person'  => $this->input->post('uid')
        );

        // print_r($dataA);

         $this->load->model('land_recoad_model');
         $this->land_recoad_model->insertNewland_recoad($dataA);
    }

    public function view_land_recoad()
    {
        if (!file_exists(APPPATH . '/views/pages/view_land_recoad.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('land_recoad_model');
                $data['list_of_pending_record'] = $this->land_recoad_model->show_land_recoad_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/view_land_recoad', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function details_land_recoad()
    {
        if (!file_exists(APPPATH . '/views/pages/land_recoad_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('land_recoad_model');
                $data['land_recoad_complete_info'] = $this->land_recoad_model->get_land_recoad_details($id);
                //print_r($data['land_recoad_complete_info']);
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/land_recoad_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }


    // status controller : controll the approve and refuse add money proposal
    public function land_recoad_status()
    {
        $id = $this->uri->segment(2);
        $data = array(
            'status' => 'approved'
        );
        $this->load->model('land_recoad_model');
        $result = $this->land_recoad_model->approveland_recoad($data, $id);
        //print_r($result);
        if ($result == true) {
            $this->session->set_userdata('status', 'Approved');
            redirect('expenditure_list');
        }
    }


    // status controller : controll the approve and refuse add money proposal

    //---delete update controller : edit land_recoad details controller

    public function delete_single_land_recoad()
    {

        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {
            $id  = $this->uri->segment(2);
            $this->load->model('land_recoad_model');
            $result = $this->land_recoad_model->delete_land_recoad($id);
            if ($result == true) {
                $this->session->set_userdata('status', 'Delete Successfully');
                redirect('record-land-recoad');
            }
        }
    }


    //---/delete update controller : edit land_recoad details controller

    //---edit update controller : edit land_recoad details controller

    public function edit_land_recoad_details()
    {
        if (!file_exists(APPPATH . '/views/pages/edit_land_recoad_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('land_recoad_model');

                $data['single_post_data'] = $this->land_recoad_model->get_single_post_details($id);
               // $data['all_head_list'] = $this->land_recoad_model->get_head_info();
                //$data['all_bank_list'] = $this->land_recoad_model->get_bank_names();
                //print_r($data);
                if (isset($data['single_post_data']['info']->ex_file)) {
                    $this->session->set_userdata('editable_file_path', $data['single_post_data']['info']->ex_file);
                }
                //print_r($data['single_post_data']);

                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/edit_land_recoad_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function update_land_recoad()
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
            $this->db->update_batch('land_recoad_details', $updateArray, 'id');
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
        $this->db->update('land_recoad', $dataA);
        //if($this->db->affected_rows() > 0){

        $this->session->set_userdata('status', 'information Update Sucessfully');
        redirect('record-land-recoad');
		//}
        // print_r($data);
    }

    //---/edit update controller : edit land_recoad details controller

    public function land_recoad_list()
    {
        if (!file_exists(APPPATH . '/views/pages/land_recoad_list.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('land_recoad_model');
                $data['list_of_land_recoad_record'] = $this->land_recoad_model->show_all_land_recoad_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/land_recoad_list', $data);
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
