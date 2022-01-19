<?php
class management_controller extends CI_Controller
{
    public function view_add_management($slug = 'add_management')
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
                $this->load->model('management_model');
                $main_head_values = $this->management_model->get_head_info();
                $banks_list = $this->management_model->get_bank_names();

                $data['main_head_values'] = $main_head_values;
                $data['banks_info'] = $banks_list;
                $data['userid'] = $login_status_check;
                $this->load->view('templates/header');
                $this->load->view('/pages/dashboard');
                $this->load->view('/pages/add_management', $data);
                $this->load->view('templates/footer');
            }
        }
    }
    public function add_management()
    {
        // Images Upload function Start
        $data = array();
        $doc_picture = json_encode(str_replace(" ", "", $_FILES['picture']['name']));
        $filesCount = count($_FILES['picture']['name']);

        $manaid = $this->input->post('manaid');
        mkdir('./uploads/management/images/' . $manaid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['picture']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['picture']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['picture']['tmp_name'][$i];

            $uploadPath = 'uploads/management/images/' . $manaid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option

        $today = $this->input->post('today');
        $data = array(
            'member_id'     => $this->input->post('manaid'),
            'name'          => $this->input->post('name'),
            'father'        => $this->input->post('father'),
            'mother'        => $this->input->post('mother'),
            'spouse'        => $this->input->post('spouse'),
            'blood'         => $this->input->post('blood'),
            'childen'       => $this->input->post('childen'),
            'address'       => $this->input->post('address'),
            'nid'           => $this->input->post('nid_number'),
            'dob'           => $this->input->post('dob'),
            'distict'       => $this->input->post('dist'),
            'thana'         => $this->input->post('thana'),
            'word_no'       => $this->input->post('word'),
            'union_porishod' => $this->input->post('union'),
            'join_date'     => $this->input->post('join_date'),
            'first_meeting' => $this->input->post('first_meeting'),
            'duration'      => $this->input->post('duration'),
            'mobile'        => $this->input->post('mobile'),
            'email'         => $this->input->post('email'),
            'education'     => $this->input->post('eduction'),
            'images'        => $doc_picture,
            // 'attach_files'  => $doc_file,
            'add_date'      => $today,
            'status'        => 'Pending',
            'add_user'      => $this->input->post('uid')
        );

        // print_r($data);

        $this->db->insert('management', $data);


        $this->db->select_max('id');
        $query = $this->db->get('management');
        $sql = $query->row();
        $id = $sql->id;
        $from_date = $this->input->post('from_date');
        $count = count($from_date);

        for ($x = 0; $x < $count; $x++) {
            $data2 = array(
                'management_id' => $id,
                'from_date'     => $this->input->post('from_date')[$x],
                'to_date'       => $this->input->post('to_date')[$x],
                'country'       => $this->input->post('country')[$x],
                'purose'        => $this->input->post('purpose')[$x],
                'description'   => $this->input->post('details')[$x]
            );
            $this->db->insert('management_country_tour', $data2);
        }
        //if($this->db->affected_rows() > 0){
        $this->session->set_userdata('status', 'information Added Sucessfully');
        redirect('view-managements');
		//}
    }


    public function view_management()
    {
        if (!file_exists(APPPATH . '/views/pages/view_management.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('management_model');
                $data['list_of_pending_record'] = $this->management_model->show_management_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/view_management', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function details_management()
    {
        if (!file_exists(APPPATH . '/views/pages/management_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('management_model');
                $data['management_complete_info'] = $this->management_model->get_management_details($id);
                //print_r($data['management_complete_info']);
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/management_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }


    //---delete update controller : edit management details controller

    public function delete_single_management()
    {

        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {

            $id  = $this->uri->segment(2);
            $this->load->model('management_model');
            $result = $this->management_model->delete_management($id);
            if ($result == true) {
                $this->session->set_userdata('status', 'Delete Successfully');
                redirect('view-managements');
            }
        }
    }


    //---/delete update controller : edit management details controller

    //---edit update controller : edit management details controller

    public function edit_management_details()
    {
        if (!file_exists(APPPATH . '/views/pages/edit_management_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('management_model');

                $data['single_post_data'] = $this->management_model->get_single_post_details($id);
                //print_r($data['single_post_data']);

                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/edit_management_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function update_management()
    {
        //error_reporting(0);
        $mid = $this->input->post('mid');

        // Images Upload function Start
        $data = array();
        $doc_picture = json_encode(str_replace(" ", "", $_FILES['picture']['name']));
        $filesCount = count($_FILES['picture']['name']);

        if ($doc_picture == '[""]') {
            $doc_picture = $this->input->post('picture2');
            // echo $doc_picture;
        }
        // exit();
        $manaid = $this->input->post('manaid');
        mkdir('./uploads/management/images/' . $manaid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['picture']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['picture']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['picture']['tmp_name'][$i];

            $uploadPath = 'uploads/management/images/' . $manaid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // End file upload Option

        $today = date('d-m-Y');
        $data = array(
            'member_id'     => $this->input->post('manaid'),
            'name'          => $this->input->post('name'),
            'father'        => $this->input->post('father'),
            'mother'        => $this->input->post('mother'),
            'spouse'        => $this->input->post('spouse'),
            'blood'         => $this->input->post('blood'),
            'childen'       => $this->input->post('childen'),
            'address'       => $this->input->post('address'),
            'nid'           => $this->input->post('nid_number'),
            'dob'           => $this->input->post('dob'),
            'distict'       => $this->input->post('dist'),
            'thana'         => $this->input->post('thana'),
            'word_no'       => $this->input->post('word'),
            'union_porishod' => $this->input->post('union'),
            'join_date'     => $this->input->post('join_date'),
            'first_meeting' => $this->input->post('first_meeting'),
            'duration'      => $this->input->post('duration'),
            'mobile'        => $this->input->post('mobile'),
            'email'         => $this->input->post('email'),
            'education'     => $this->input->post('eduction'),
            'images'        => $doc_picture,
            'add_date'      => $today,
            'status'        => 'Pending',
            'add_user'      => $this->input->post('uid')
        );

        // print_r($data);


        $this->db->where('id', $mid);
        $this->db->update('management', $data);


        //cal
        $numrows = $this->input->post('numrows');

        $from_date = $this->input->post('from_date');
        $count = count($from_date);
        //  echo $count;
        // exit();
        for ($x = 0; $x < $count; $x++) {
            $dataA2 = array(
                'management_id' => $mid,
                'from_date'     => $this->input->post('from_date')[$x],
                'to_date'       => $this->input->post('to_date')[$x],
                'country'       => $this->input->post('country')[$x],
                'purose'        => $this->input->post('purpose')[$x],
                'description'   => $this->input->post('details')[$x]
            );

            // print_r($dataA2);
            $this->db->where('id', $this->input->post('id2')[$x]);
            $this->db->update('management_country_tour', $dataA2);

            if ($x + 1 > $numrows) {
                $dataA22 = array(
                    'management_id' => $mid,
                    'from_date'     => $this->input->post('from_date')[$x],
                    'to_date'       => $this->input->post('to_date')[$x],
                    'country'       => $this->input->post('country')[$x],
                    'purose'        => $this->input->post('purpose')[$x],
                    'description'   => $this->input->post('details')[$x]
                );
                //  print_r($dataA22);  exit();
                $this->db->insert('management_country_tour', $dataA22);
            }
        }

        //if($this->db->affected_rows() > 0){

        $this->session->set_userdata('status', 'information Update Sucessfully Completed');
        redirect('view-managements');
		//}
      
 
    }

    //---/edit update controller : edit management details controller

    public function management_list()
    {
        if (!file_exists(APPPATH . '/views/pages/management_list.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('management_model');
                $data['list_of_management_record'] = $this->management_model->show_all_management_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/management_list', $data);
                $this->load->view('templates/footer');
            }
        }
    }

}
