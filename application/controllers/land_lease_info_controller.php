<?php
class land_lease_info_controller extends CI_Controller
{
    public function view_add_land_lease_info($slug = 'add_land_lease_info')
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
                $this->load->model('land_lease_info_model');
                $main_head_values = $this->land_lease_info_model->get_head_info();
                $banks_list = $this->land_lease_info_model->get_bank_names();

                $data['main_head_values'] = $main_head_values;
                $data['banks_info'] = $banks_list;
                $data['userid'] = $login_status_check;
                $this->load->view('templates/header');
                $this->load->view('/pages/dashboard');
                $this->load->view('/pages/add_land_lease_info', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function add_land_lease_info()
    {

        $data = array();
        $nidfile = json_encode(str_replace(" ", "", $_FILES['nidfile']['name']));
        $filesCount = count($_FILES['nidfile']['name']);

        $leseid = $this->input->post('leseid');
        $foldername = mkdir('./uploads/Land_lease/NID/' . $leseid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['nidfile']['name'][$i]);

            $_FILES['userFile']['type'] = $_FILES['nidfile']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['nidfile']['tmp_name'][$i];


            $uploadPath = 'uploads/Land_lease/NID/' . $leseid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option

        // PIC File Upload function Start
        $data = array();
        $picfile = json_encode(str_replace(" ", "", $_FILES['picfile']['name']));
        $filesCount = count($_FILES['picfile']['name']);

        $leseid = $this->input->post('leseid');
        $foldername = mkdir('./uploads/Land_lease/NID/'. $leseid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['picfile']['name'][$i]);

            $_FILES['userFile']['type'] = $_FILES['picfile']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['picfile']['tmp_name'][$i];
            //str_replace(' ', '', $_FILES['userFile']['name']);


            $uploadPath = 'uploads/Land_lease/NID/' . $leseid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option


        // Rent receit File Upload function Start
        $data = array();
        $rent_receit = json_encode(str_replace(" ", "", $_FILES['rent_receit']['name']));
        $filesCount = count($_FILES['rent_receit']['name']);

        $leseid = $this->input->post('leseid');
        $foldername = mkdir('./uploads/Land_lease/rent_receit/' . $leseid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['rent_receit']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['rent_receit']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['rent_receit']['tmp_name'][$i];


            $uploadPath = 'uploads/Land_lease/rent_receit/' . $leseid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option


        // serveyor receit File Upload function Start
        $data = array();
        $serveyor = json_encode(str_replace(" ", "", $_FILES['serveyor']['name']));
        $filesCount = count($_FILES['serveyor']['name']);

        $leseid = $this->input->post('leseid');
        $foldername = mkdir('./uploads/Land_lease/serveyor/' . $leseid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['serveyor']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['serveyor']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['serveyor']['tmp_name'][$i];


            $uploadPath = 'uploads/Land_lease/serveyor/' . $leseid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option


        // sketch_map receit File Upload function Start
        $data = array();
        $sketch_map = json_encode(str_replace(" ", "", $_FILES['sketch_map']['name']));
        $filesCount = count($_FILES['sketch_map']['name']);

        $leseid = $this->input->post('leseid');
        $foldername = mkdir('./uploads/Land_lease/sketch_map/' . $leseid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['sketch_map']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['sketch_map']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['sketch_map']['tmp_name'][$i];


            $uploadPath = 'uploads/Land_lease/sketch_map/' . $leseid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option

        // approval_file receit File Upload function Start
        $data = array();
        $approval_file = json_encode(str_replace(" ", "", $_FILES['approval_file']['name']));
        $filesCount = count($_FILES['approval_file']['name']);

        $leseid = $this->input->post('leseid');
        $foldername = mkdir('./uploads/Land_lease/approval_file/' . $leseid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['approval_file']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['approval_file']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['approval_file']['tmp_name'][$i];


            $uploadPath = 'uploads/Land_lease/approval_file/' . $leseid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option





        // approval_file receit File Upload function Start
        $data = array();
        $agreement_file = json_encode(str_replace(" ", "", $_FILES['agreement_file']['name']));
        $filesCount = count($_FILES['agreement_file']['name']);

        $leseid = $this->input->post('leseid');
        $foldername = mkdir('./uploads/Land_lease/agreement_file/' . $leseid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['agreement_file']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['agreement_file']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['agreement_file']['tmp_name'][$i];


            $uploadPath = 'uploads/Land_lease/agreement_file/' . $leseid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option

        // last_rant_clif receit File Upload function Start
        $data = array();
        $last_rant_clif = json_encode(str_replace(" ", "", $_FILES['last_rant_clif']['name']));
        $filesCount = count($_FILES['last_rant_clif']['name']);

        $leseid = $this->input->post('leseid');
        $foldername = mkdir('./uploads/Land_lease/LAST_RANT/' . $leseid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['last_rant_clif']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['last_rant_clif']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['last_rant_clif']['tmp_name'][$i];


            $uploadPath = 'uploads/Land_lease/LAST_RANT/' . $leseid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }

        // End file upload Option


        //land totall coast 
        $id = $leseid;
        $land_areaR = $this->input->post('land_areaR');
        $count = count($land_areaR);
        $grandTotall = 0;

        for ($x = 0; $x < $count; $x++) {
            $dataA2 = array(
                'land_lease_info'   => $id,
                'land_areaR'        => $this->input->post('land_areaR')[$x],
                'rent_per'          => $this->input->post('rent_per')[$x],
                'year'              => $this->input->post('year')[$x],
                'total_amount'      => $this->input->post('total_amount')[$x],
                'fine_comesion'     => $this->input->post('fine_comesion')[$x],
                'fine_comesion_yr'  => $this->input->post('fine_comesion_yr')[$x],
                'vat_tax_comesion'  => $this->input->post('vat_tax_comesion')[$x],
                'grand_total'       => $this->input->post('grand_total')[$x]
            );

            // print_r( $dataA2);
           // $data_all['A2_data'] = $dataA2;
            $this->db->insert('landlease_rent_cal', $dataA2);
            $grandTotall = $grandTotall + $this->input->post('grand_total')[$x];
        }


        //----land totall coast 

        $dataA = array(
            'main_head'   => 'Income',
            'sub_head'    => 'Land_income',
            'lease_type'  => $this->input->post('title'),
            'type_others' => $this->input->post('title_other'),
            'lease_id'    => $this->input->post('leseid'),
            'idnumber'    => $this->input->post('applicationid'),
            'memo_no'     => $this->input->post('memono'),
            'to_date'     => $this->input->post('add_date'),
            'name'        => $this->input->post('name'),
            'father'      => $this->input->post('father'),
            'address'     => $this->input->post('address'),
            'occupation'  => $this->input->post('occu'),
            'phone'       => $this->input->post('phone'),
            'email'       => $this->input->post('email'),
            'nid'         => $this->input->post('nid_number'),
            'nid_file'    => $nidfile,
            'picfile'    => $picfile,
            'location'    => $this->input->post('thana_name'),
            'moja_number' => $this->input->post('jlno'),
            'road_name'   => $this->input->post('roadname'),
            'road_number' => $this->input->post('road_number'),
            'cs_kotian'   => $this->input->post('cs_kotian'),
            'cs_dag'      => $this->input->post('cs_dag'),
            'rs_kotian'   => $this->input->post('rs_kotian'),
            'rs_dag'      => $this->input->post('rs_dag'),
            'bs_kotian'   => $this->input->post('bs_kotian'),
            'bs_dag'      => $this->input->post('bs_dag'),
            'land_area'   => $this->input->post('land_area'),
            'land_type'   => $this->input->post('land_type'),
            'east'        => implode(",", $this->input->post('east')),
            'west'        => implode(",", $this->input->post('west')),
            'south'       => implode(",", $this->input->post('south')),
            'north'       => implode(",", $this->input->post('north')),
            'land_structure'    => $this->input->post('structure_land'),
            'land_st_details'   => $this->input->post('details'),
            'occupancy'         => $this->input->post('occupancy'),
            'occupancy_details' => $this->input->post('occupancy_details'),
            'purpose_lease'     => $this->input->post('purpose_lease'),
            'rent_receit'       => $rent_receit,
            'serveyor'          => $serveyor,
            'sketch_map'        => $sketch_map,
            'approval_file'     => $approval_file,
            'agreement_file'    => $agreement_file,
            'from_date'         => $this->input->post('from_date'),
            'to_dateR'          => $this->input->post('to_date'),
            'last_rant_clif'    => $last_rant_clif,
            'grand_total'       =>$grandTotall,
            'status'            => 'Pending',
            'add_person'        => $this->input->post('uid'),

        );

        $data_all['A_data']=$dataA;

        // print_r($dataA);
        // exit();

        //$this->db->insert('land_lease_info', $dataA);
        
       
        //exit();
        // if($this->db->affected_rows() > 0){

        /////$this->session->set_flashdata('msg', 'information Add Sucessfully');
        //redirect('Recoad/land_lease');
		//}

      

        $this->load->model('land_lease_info_model');
        $this->land_lease_info_model->insertNewland_lease_info($data_all);

}


    public function view_land_lease_info()
    {
        if (!file_exists(APPPATH . '/views/pages/view_land_lease_info.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('land_lease_info_model');
                $data['list_of_pending_record'] = $this->land_lease_info_model->show_land_lease_info_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/view_land_lease_info', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function details_land_lease_info()
    {
        if (!file_exists(APPPATH . '/views/pages/land_lease_info_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('land_lease_info_model');
                $data['land_lease_info_complete_info'] = $this->land_lease_info_model->get_land_lease_info_details($id);
                //print_r($data['land_lease_info_complete_info']);
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/land_lease_info_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }


    //---delete update controller : edit land_lease_info details controller

    public function delete_single_land_lease_info()
    {

        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {
            $id  = $this->uri->segment(2);
            $this->load->model('land_lease_info_model');
            $result = $this->land_lease_info_model->delete_land_lease_info($id);
            if ($result == true) {
                $this->session->set_userdata('status', 'Delete Successfully');
                redirect('record-land-lease');
            }
        }
    }


    //---/delete update controller : edit land_lease_info details controller

    //---edit update controller : edit land_lease_info details controller

    public function edit_land_lease_info_details()
    {
        if (!file_exists(APPPATH . '/views/pages/edit_land_lease_info_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('land_lease_info_model');

                $data['single_post_data'] = $this->land_lease_info_model->get_single_post_details($id);
                //print_r($data['single_post_data']);

                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/edit_land_lease_info_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function update_land_lease_info()
    {
        $lid = $this->input->post('lid');
        // NID File Upload function Start
        $data = array();
        $nidfile = json_encode(str_replace(" ", "", $_FILES['nidfile']['name']));
        $filesCount = count($_FILES['nidfile']['name']);

        $leseid = $this->input->post('leseid');

        if ($nidfile == '[""]') {
            $nidfile = $this->input->post('nidfile2');
        }


        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['nidfile']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['nidfile']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['nidfile']['tmp_name'][$i];


            $uploadPath = 'uploads/Land_lease/NID/' . $leseid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option
        // PIC File Upload function Start
        $data = array();
        $picfile = json_encode(str_replace(" ", "", $_FILES['picfile']['name']));
        $filesCount = count($_FILES['picfile']['name']);

        $leseid = $this->input->post('leseid');

        if ($picfile == '[""]') {
            $picfile = $this->input->post('picfile2');
        }

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['picfile']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['picfile']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['picfile']['tmp_name'][$i];


            $uploadPath = 'uploads/Land_lease/NID/' . $leseid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option


        // Rent receit File Upload function Start
        $data = array();
        $rent_receit = json_encode(str_replace(" ", "", $_FILES['rent_receit']['name']));
        $filesCount = count($_FILES['rent_receit']['name']);

        $leseid = $this->input->post('leseid');

        if ($rent_receit == '[""]') {
            $rent_receit = $this->input->post('rent_receit2');
        }

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['rent_receit']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['rent_receit']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['rent_receit']['tmp_name'][$i];


            $uploadPath = 'uploads/Land_lease/rent_receit/' . $leseid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option


        // serveyor receit File Upload function Start
        $data = array();

        $filearray = $_FILES['serveyor']['name'];
        $filearray2 = (null !== $this->input->post('serveyor')) ? $this->input->post('serveyor') : array();
        $filestotal = array_merge($filearray, $filearray2);
        if (count(array_filter($filestotal)) > 0) {
            $serveyor = json_encode(str_replace(" ", "", array_values(array_filter($filestotal))));
        } else {
            $serveyor = "";
        }


        $filesCount = count($_FILES['serveyor']['name']);

        $leseid = $this->input->post('leseid');


        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['serveyor']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['serveyor']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['serveyor']['tmp_name'][$i];


            $uploadPath = 'uploads/Land_lease/serveyor/' . $leseid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option


        // sketch_map receit File Upload function Start
        $data = array();

        $filearrayb = $_FILES['sketch_map']['name'];
        $filearray2b = (null !== $this->input->post('sketch_map')) ? $this->input->post('sketch_map') : array();
        $filestotalb = array_merge($filearrayb, $filearray2b);
        if (count(array_filter($filestotalb)) > 0) {
            $sketch_map = json_encode(str_replace(" ", "", array_values(array_filter($filestotalb))));
        } else {
            $sketch_map = "";
        }


        $filesCount = count($_FILES['sketch_map']['name']);

        $leseid = $this->input->post('leseid');


        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['sketch_map']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['sketch_map']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['sketch_map']['tmp_name'][$i];


            $uploadPath = 'uploads/Land_lease/sketch_map/' . $leseid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option


        // approval_file receit File Upload function Start
        $data = array();
        $approval_file = json_encode(str_replace(" ", "", $_FILES['approval_file']['name']));
        $filesCount = count($_FILES['approval_file']['name']);

        $leseid = $this->input->post('leseid');

        if ($approval_file == '[""]') {
            $approval_file = $this->input->post('approval_file2');
        }

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['approval_file']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['approval_file']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['approval_file']['tmp_name'][$i];


            $uploadPath = 'uploads/Land_lease/approval_file/' . $leseid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option

        // approval_file receit File Upload function Start
        $data = array();
        $agreement_file = json_encode(str_replace(" ", "", $_FILES['agreement_file']['name']));
        $filesCount = count($_FILES['agreement_file']['name']);

        $leseid = $this->input->post('leseid');

        if ($agreement_file == '[""]') {
            $agreement_file = $this->input->post('agreement_file2');
        }

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "",  $_FILES['agreement_file']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['agreement_file']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['agreement_file']['tmp_name'][$i];


            $uploadPath = 'uploads/Land_lease/agreement_file/' . $leseid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option


        // last_rant_clif receit File Upload function Start
        $data = array();
        $last_rant_clif = json_encode(str_replace(" ", "", $_FILES['last_rant_clif']['name']));
        $filesCount = count($_FILES['last_rant_clif']['name']);

        $leseid = $this->input->post('leseid');

        if ($last_rant_clif == '[""]') {
            $last_rant_clif = $this->input->post('last_rant_clif2');
        }

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['last_rant_clif']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['last_rant_clif']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['last_rant_clif']['tmp_name'][$i];


            $uploadPath = 'uploads/Land_lease/LAST_RANT/' . $leseid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option

        

        //cal
        $numrows = $this->input->post('numrows');

        $land_areaR = $this->input->post('land_areaR');
        $count = count($land_areaR);

        //exit();
        $grandTotall = 0;
        for ($x = 0; $x < $count; $x++) {
            $dataA2 = array(
                'land_lease_info'   => $lid,
                'land_areaR'        => $this->input->post('land_areaR')[$x],
                'rent_per'          => $this->input->post('rent_per')[$x],
                'year'              => $this->input->post('year')[$x],
                'total_amount'      => $this->input->post('total_amount')[$x],
                'fine_comesion'     => $this->input->post('fine_comesion')[$x],
                'fine_comesion_yr'  => $this->input->post('fine_comesion_yr')[$x],
                'vat_tax_comesion'  => $this->input->post('vat_tax_comesion')[$x],
                'grand_total'       => $this->input->post('grand_total')[$x]
            );
            print_r('dataa2=' );print_r( $dataA2);
            $this->db->where('id', $this->input->post('id2')[$x]);
            $this->db->update('landlease_rent_cal', $dataA2);


            if ($x + 1 > $numrows) {
                $dataA22 = array(
                    'land_lease_info'   => $lid,
                    'land_areaR'        => $this->input->post('land_areaR')[$x],
                    'rent_per'          => $this->input->post('rent_per')[$x],
                    'year'              => $this->input->post('year')[$x],
                    'total_amount'      => $this->input->post('total_amount')[$x],
                    'fine_comesion'     => $this->input->post('fine_comesion')[$x],
                    'fine_comesion_yr'  => $this->input->post('fine_comesion_yr')[$x],
                    'vat_tax_comesion'  => $this->input->post('vat_tax_comesion')[$x],
                    'grand_total'       => $this->input->post('grand_total')[$x]
                );
               print_r('dataa2=');
               print_r( $dataA22);
                $this->db->insert('landlease_rent_cal', $dataA22);
            }
            $grandTotall = $grandTotall + $this->input->post('grand_total')[$x];
          
        }


        $dataA = array(
            'main_head'   => 'Income',
            'sub_head'    => 'Land_income',
            'lease_type'  => $this->input->post('title'),
            'type_others' => $this->input->post('title_other'),
            'lease_id'    => $this->input->post('leseid'),
            'idnumber'    => $this->input->post('applicationid'),
            'memo_no'     => $this->input->post('memono'),
            'to_date'     => $this->input->post('add_date'),
            'name'        => $this->input->post('name'),
            'father'      => $this->input->post('father'),
            'address'     => $this->input->post('address'),
            'occupation'  => $this->input->post('occu'),
            'phone'       => $this->input->post('phone'),
            'email'       => $this->input->post('email'),
            'nid'         => $this->input->post('nid_number'),
            'nid_file'    => $nidfile,
            'picfile'    => $picfile,
            'location'    => $this->input->post('thana_name'),
            'moja_number' => $this->input->post('jlno'),
            'road_name'   => $this->input->post('roadname'),
            'road_number' => $this->input->post('road_number'),
            'cs_kotian'   => $this->input->post('cs_kotian'),
            'cs_dag'      => $this->input->post('cs_dag'),
            'rs_kotian'   => $this->input->post('rs_kotian'),
            'rs_dag'      => $this->input->post('rs_dag'),
            'bs_kotian'   => $this->input->post('bs_kotian'),
            'bs_dag'      => $this->input->post('bs_dag'),
            'land_area'   => $this->input->post('land_area'),
            'land_type'   => $this->input->post('land_type'),
            'east'        => implode(",", $this->input->post('east')),
            'west'        => implode(",", $this->input->post('west')),
            'south'       => implode(",", $this->input->post('south')),
            'north'       => implode(",", $this->input->post('north')),
            'land_structure'    => $this->input->post('structure_land'),
            'land_st_details'   => $this->input->post('details'),
            'occupancy'         => $this->input->post('occupancy'),
            'occupancy_details' => $this->input->post('occupancy_details'),
            'purpose_lease'     => $this->input->post('purpose_lease'),
            'rent_receit'       => $rent_receit,
            'serveyor'          => $serveyor,
            'sketch_map'        => $sketch_map,
            'approval_file'     => $approval_file,
            'agreement_file'    => $agreement_file,
            'from_date'         => $this->input->post('from_date'),
            'to_dateR'          => $this->input->post('to_date'),
            'last_rant_clif'    => $last_rant_clif,
            'grand_total'       => $grandTotall,
            'status'            => 'Pending',
            'add_person'        => $this->input->post('uid')
        );
        print_r('dataaA=');
        print_r($dataA);
        $this->db->where('lease_id', $lid);
        $this->db->update('land_lease_info', $dataA);

        $this->session->set_userdata('status', 'information Update Sucessfully');
        redirect('record-land-lease');
    }

    //---/edit update controller : edit land_lease_info details controller

    public function land_lease_info_list()
    {
        if (!file_exists(APPPATH . '/views/pages/land_lease_info_list.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('land_lease_info_model');
                $data['list_of_land_lease_info_record'] = $this->land_lease_info_model->show_all_land_lease_info_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/land_lease_info_list', $data);
                $this->load->view('templates/footer');
            }
        }
    }
}
