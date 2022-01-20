<?php
class employee_controller extends CI_Controller
{
    public function view_add_employee($slug = 'add_employee')
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
                $this->load->model('employee_model');
                $main_head_values = $this->employee_model->get_head_info();
                $banks_list = $this->employee_model->get_bank_names();

                $data['main_head_values'] = $main_head_values;
                $data['banks_info'] = $banks_list;
                $data['userid'] = $login_status_check;
                $this->load->view('templates/header');
                $this->load->view('/pages/dashboard');
                $this->load->view('/pages/add_employee', $data);
                $this->load->view('templates/footer');
            }
        }
    }
    public function add_employee()
    {

        //error_reporting(0);	
        // Education Informaion Add
        $data = array();
        $temp = count($this->input->post('exam_name_ee'));
        for ($i = 0; $i < $temp; $i++) {
            $personal_id   = $this->input->post('personal_id');
            $exam_name_ee  = $this->input->post('exam_name_ee');
            $subject_e     = $this->input->post('subject_e');
            $institute_e   = $this->input->post('institute_e');
            $board_e       = $this->input->post('board_e');
            $pass_year_e   = $this->input->post('pass_year_e');
            $result_e      = $this->input->post('result_e');
            if ($exam_name_ee[$i] != '') {
                $data[] = array(
                    'person_id'  => $personal_id,
                    'exam_name'  => $exam_name_ee[$i],
                    'subject'    => $subject_e[$i],
                    'institute'  => $institute_e[$i],
                    'board'      => $board_e[$i],
                    'pass_year'  => $pass_year_e[$i],
                    'result'     => $result_e[$i],
                    'status'     => 1
                );
            }
        }
        // print_r($data);

        $insert = count($data);
        if ($insert) {
            $this->db->insert_batch('person_edu', $data);
        }

        // End Education Details Add Systems


        // Jobs Informaion Add
        $data = array();
        $temp = count($this->input->post('designation_j'));
        for ($i = 0; $i < $temp; $i++) {
            $personal_id    = $this->input->post('personal_id');
            $designation_j  = $this->input->post('designation_j');
            $confirmation_j = $this->input->post('confirmation_j');
            $join_j         = $this->input->post('join_j');
            $lpr_j          = $this->input->post('lpr_j');
            $address_j      = $this->input->post('address_j');
            $details_j      = $this->input->post('details_j');
            if ($designation_j[$i] != '') {
                $data[] = array(
                    'person_id'   => $personal_id,
                    'job_post'    => $designation_j[$i],
                    'confirm_date' => $confirmation_j[$i],
                    'join_date'   => $join_j[$i],
                    'lpr_date'    => $lpr_j[$i],
                    'address'     => $address_j[$i],
                    'details'     => $details_j[$i],
                    'status'     => 1
                );
            }
        }
        // print_r($data);

        $insert = count($data);
        if ($insert) {
            $this->db->insert_batch('person_job', $data);
        }

        // End job Details Add Systems


        // Tranning Informaion Add
        $data = array();
        $temp = count($this->input->post('course_t'));
        for ($i = 0; $i < $temp; $i++) {
            $personal_id    = $this->input->post('personal_id');
            $course_t       = $this->input->post('course_t');
            $institute_t    = $this->input->post('institute_t');
            $duration_t     = $this->input->post('duration_t');
            $start_t        = $this->input->post('start_t');
            $end_t          = $this->input->post('end_t');
            $address_t      = $this->input->post('address_t');
            $details_t      = $this->input->post('details_t');
            if ($designation_j[$i] != '') {
                $data[] = array(
                    'person_id'   => $personal_id,
                    'course'      => $course_t[$i],
                    'institute'   => $institute_t[$i],
                    'duration'    => $duration_t[$i],
                    'start_date'  => $start_t[$i],
                    'end_date'    => $end_t[$i],
                    'address'     => $address_t[$i],
                    'details'     => $details_t[$i],
                    'status'     => 1
                );
            }
        }
        // print_r($data);
        $insert = count($data);
        if ($insert) {
            $this->db->insert_batch('person_tranning', $data);
        }
        // End Tranning Details Add Systems


        // leave Informaion Add
        $data = array();
        $temp = count($this->input->post('leavetype_l'));
        for ($i = 0; $i < $temp; $i++) {
            $personal_id   = $this->input->post('personal_id');
            $leavetype_l   = $this->input->post('leavetype_l');
            $time_l        = $this->input->post('time_l');
            $startDate_l   = $this->input->post('startDate_l');
            $end_date_l    = $this->input->post('end_date_l');
            $details_l     = $this->input->post('details_l');

            if ($leavetype_l[$i] != '') {
                $data[] = array(
                    'person_id'   => $personal_id,
                    'leave_type'  => $leavetype_l[$i],
                    'leave_time'  => $time_l[$i],
                    'start_date'  => $startDate_l[$i],
                    'end_date'    => $end_date_l[$i],
                    'details'     => $details_l[$i],
                    'status'      => 1
                );
            }
        }
        // print_r($data);
        $insert = count($data);
        if ($insert) {
            $this->db->insert_batch('person_leave', $data);
        }
        // End leave Details Add Systems



        // Promotion Informaion Add
        $data = array();
        $temp = count($this->input->post('rank_p'));
        for ($i = 0; $i < $temp; $i++) {
            $personal_id   = $this->input->post('personal_id');
            $rank_p        = $this->input->post('rank_p');
            $pay_scale_p   = $this->input->post('pay_scale_p');
            $promo_date_p  = $this->input->post('promo_date_p');
            $promo_type_p  = $this->input->post('promo_type_p');
            $go_date_p     = $this->input->post('go_date_p');
            $details_p     = $this->input->post('details_p');

            if ($rank_p[$i] != '') {
                $data[] = array(
                    'perosn_id'       => $personal_id,
                    'post'            => $rank_p[$i],
                    'pay_scal'        => $pay_scale_p[$i],
                    'promotion_date'  => $promo_date_p[$i],
                    'promo_type'      => $promo_type_p[$i],
                    'go_date'         => $go_date_p[$i],
                    'details'         => $details_p[$i],
                    'status'          => 1
                );
            }
        }
        // print_r($data);
        $insert = count($data);
        if ($insert) {
            $this->db->insert_batch('person_pomoson', $data);
        }
        // End Promotion Details Add Systems



        // Chrime Informaion Add
        $data = array();
        $temp = count($this->input->post('type_c'));
        for ($i = 0; $i < $temp; $i++) {
            $personal_id      = $this->input->post('personal_id');
            $type_c           = $this->input->post('type_c');
            $details_c        = $this->input->post('details_c');
            $present_status_c = $this->input->post('present_status_c');
            $judgment_c       = $this->input->post('judgment_c');
            $final_judg_c     = $this->input->post('final_judg_c');
            $comment_c        = $this->input->post('comment_c');

            if ($type_c[$i] != '') {
                $data[] = array(
                    'person_id'     => $personal_id,
                    'crime_type'    => $type_c[$i],
                    'details'       => $details_c[$i],
                    'present'       => $present_status_c[$i],
                    'judment'       => $judgment_c[$i],
                    'final_judment' => $final_judg_c[$i],
                    'comment'       => $comment_c[$i],
                    'status'        => 1
                );
            }
        }
        // print_r($data);
        $insert = count($data);
        if ($insert) {
            $this->db->insert_batch('person_crime', $data);
        }
        // End Chrime Details Add Systems


        // posting Recoard Informaion Add
        $data = array();
        $temp = count($this->input->post('post_po'));
        for ($i = 0; $i < $temp; $i++) {
            $personal_id        = $this->input->post('personal_id');
            $post_po            = $this->input->post('post_po');
            $organization_po    = $this->input->post('organization_po');
            $post_type_po       = $this->input->post('post_type_po');
            $address_po         = $this->input->post('address_po');
            $start_date_po      = $this->input->post('start_date_po');
            $end_date_po        = $this->input->post('end_date_po');
            $pay_scal_po        = $this->input->post('pay_scal_po');

            if ($post_po[$i] != '') {
                $data[] = array(
                    'person_id'      => $personal_id,
                    'post'           => $post_po[$i],
                    'organization'   => $organization_po[$i],
                    'post_type'      => $post_type_po[$i],
                    'address'        => $address_po[$i],
                    'start_date'     => $start_date_po[$i],
                    'end_date'       => $end_date_po[$i],
                    'pay_scal'       => $pay_scal_po[$i],
                    'status'         => 1
                );
            }
        }
        // print_r($data);
        $insert = count($data);
        if ($insert) {
            $this->db->insert_batch('person_posting', $data);
        }
        // End posting Details Add Systems




        // File Upload function Start
        $data = array();
        $doc = json_encode(str_replace(" ", "", $_FILES['attach_file']['name']));
        $filesCount = count($_FILES['attach_file']['name']);

        $personid = $this->input->post('personal_id');

        $foldername = mkdir('./uploads/Person/' . $personid, 0755, TRUE);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['attach_file']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['attach_file']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['attach_file']['tmp_name'][$i];

            $uploadPath = 'uploads/Person/' . $personid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // File Upload function End 

        $dataA = array(
            'person_id'         => $personid,
            'add_date'          => $this->input->post('to_date'),
            'name'              => $this->input->post('name'),
            'father'            => $this->input->post('father'),
            'mother'            => $this->input->post('mother'),
            'potni'             => $this->input->post('potni'),
            'nid'               => $this->input->post('nid'),
            'district'          => $this->input->post('won_dist'),
            'dob'               => $this->input->post('dob'),
            'marital_status'    => $this->input->post('marital'),
            'childen'           => $this->input->post('childen'),
            'present_address'   => $this->input->post('persent_address'),
            'permanent_address' => $this->input->post('permanent_address'),
            'mobile'            => $this->input->post('mobile_number'),
            'email'             => $this->input->post('email'),
            'images'            => $doc,
            'add_person'        => $this->input->post('uid'),
            'status'            => 'Pending'
        );

        // print_r($dataA);

        $this->db->insert('personal_information', $dataA);
        if ($this->db->affected_rows() > 0) {

            $this->session->set_userdata('status', 'information Add Sucessfully');
            redirect('view-employees');
        }
    }


    public function view_employee()
    {
        if (!file_exists(APPPATH . '/views/pages/view_employee.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('employee_model');
                $data['list_of_pending_record'] = $this->employee_model->show_employee_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/view_employee', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function details_employee()
    {
        if (!file_exists(APPPATH . '/views/pages/employee_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('employee_model');
                $data['employee_complete_info'] = $this->employee_model->get_employee_details($id);
                //print_r($data['employee_complete_info']);
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/employee_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }


    //---delete update controller : edit employee details controller

    public function delete_single_employee()
    {

        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {

            $id  = $this->uri->segment(2);
            $this->load->model('employee_model');
            $result = $this->employee_model->delete_employee($id);
            if ($result == true) {
                $this->session->set_userdata('status', 'Delete Successfully');
                redirect('view-employees');
            }
        }
    }


    //---/delete update controller : edit employee details controller

    //---edit update controller : edit employee details controller

    public function edit_employee_details()
    {
        if (!file_exists(APPPATH . '/views/pages/edit_employee_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('employee_model');

                $data['single_post_data'] = $this->employee_model->get_single_post_details($id);
                //print_r($data['single_post_data']);

                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/edit_employee_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function update_employee()
    {
        //error_reporting(0);
        // Education Information Start
        $personid = $this->input->post('personal_id');



        $eid           = $this->input->post('eid');
        $exam_name_ee  = $this->input->post('exam_name_ee');
        $subject_e     = $this->input->post('subject_e');
        $institute_e   = $this->input->post('institute_e');
        $board_e       = $this->input->post('board_e');
        $pass_year_e   = $this->input->post('pass_year_e');
        $result_e      = $this->input->post('result_e');

        $updateArray = array();
        $insertArray = array();

        $count = count($this->input->post('exam_name_ee'));
        $numrows = count($this->input->post('eid'));

        for ($x = 0; $x < $count; $x++) {
            if ($x < $numrows) {
                $updateArray   = array(
                    'exam_name'  => $exam_name_ee[$x],
                    'subject'    => $subject_e[$x],
                    'institute'  => $institute_e[$x],
                    'board'      => $board_e[$x],
                    'pass_year'  => $pass_year_e[$x],
                    'result'     => $result_e[$x],
                    'status'     => 'edit'
                );
                $this->db->where('id', $this->input->post('eid')[$x]);
                $this->db->update('person_edu', $updateArray);
            } else {
                $insertArray   = array(
                    'person_id'  => $personid,
                    'exam_name'  => $exam_name_ee[$x],
                    'subject'    => $subject_e[$x],
                    'institute'  => $institute_e[$x],
                    'board'      => $board_e[$x],
                    'pass_year'  => $pass_year_e[$x],
                    'result'     => $result_e[$x],
                    'status'     => 'insert'
                );
                $this->db->insert('person_edu', $insertArray);
            }
        }






        // Job Information Start
        $jid              = $this->input->post('jid');
        $designation_j    = $this->input->post('designation_j');
        $confirmation_j   = $this->input->post('confirmation_j');
        $join_j           = $this->input->post('join_j');
        $lpr_j            = $this->input->post('lpr_j');
        $address_j        = $this->input->post('address_j');
        $details_j        = $this->input->post('details_j');

        $updateArray2 = array();
        $insertArray2 = array();
        $count2 = count($this->input->post('designation_j'));
        $numrows2 = count($this->input->post('jid'));

        for ($x = 0; $x < $count2; $x++) {
            if ($x < $numrows2) {
                $updateArray2   = array(
                    'job_post'    => $designation_j[$x],
                    'confirm_date' => $confirmation_j[$x],
                    'join_date'   => $join_j[$x],
                    'lpr_date'    => $lpr_j[$x],
                    'address'     => $address_j[$x],
                    'details'     => $details_j[$x],
                    'status'      => 'edit'
                );
                $this->db->where('id', $this->input->post('jid')[$x]);
                $this->db->update('person_job', $updateArray2);
            } else {
                $insertArray2   = array(
                    'person_id'  => $personid,
                    'job_post'    => $designation_j[$x],
                    'confirm_date' => $confirmation_j[$x],
                    'join_date'   => $join_j[$x],
                    'lpr_date'    => $lpr_j[$x],
                    'address'     => $address_j[$x],
                    'details'     => $details_j[$x],
                    'status'     => 'insert'
                );
                $this->db->insert('person_job', $insertArray2);
            }
        }



        // Tranning Information Start
        $tid              = $this->input->post('tid');
        $course_t         = $this->input->post('course_t');
        $institute_t      = $this->input->post('institute_t');
        $duration_t       = $this->input->post('duration_t');
        $start_t          = $this->input->post('start_t');
        $end_t            = $this->input->post('end_t');
        $address_t        = $this->input->post('address_t');
        $details_t        = $this->input->post('details_t');

        $updateArray3 = array();
        $insertArray3 = array();
        $count3 = count($this->input->post('course_t'));
        $numrows3 = count($this->input->post('tid'));

        for ($x = 0; $x < $count3; $x++) {
            if ($x < $numrows3) {
                $updateArray3   = array(
                    'course'      => $course_t[$x],
                    'institute'   => $institute_t[$x],
                    'duration'    => $duration_t[$x],
                    'start_date'  => $start_t[$x],
                    'end_date'    => $end_t[$x],
                    'address'     => $address_t[$x],
                    'details'     => $details_t[$x],
                    'status'      => 'edit'
                );
                $this->db->where('id', $this->input->post('tid')[$x]);
                $this->db->update('person_tranning', $updateArray3);
            } else {
                $insertArray3   = array(
                    'person_id'  => $personid,
                    'course'      => $course_t[$x],
                    'institute'   => $institute_t[$x],
                    'duration'    => $duration_t[$x],
                    'start_date'  => $start_t[$x],
                    'end_date'    => $end_t[$x],
                    'address'     => $address_t[$x],
                    'details'     => $details_t[$x],
                    'status'     => 'insert'
                );
                $this->db->insert('person_tranning', $insertArray3);
            }
        }

        // Leave Information Start
        $lid           = $this->input->post('lid');
        $leavetype_l   = $this->input->post('leavetype_l');
        $time_l        = $this->input->post('time_l');
        $startDate_l   = $this->input->post('startDate_l');
        $end_date_l    = $this->input->post('end_date_l');
        $details_l     = $this->input->post('details_l');

        $updateArray4 = array();
        $insertArray4 = array();
        $count4 = count($this->input->post('leavetype_l'));
        $numrows4 = count($this->input->post('lid'));

        for ($x = 0; $x < $count4; $x++) {
            if ($x < $numrows4) {
                $updateArray4   = array(
                    'leave_type'  => $leavetype_l[$x],
                    'leave_time'  => $time_l[$x],
                    'start_date'  => $startDate_l[$x],
                    'end_date'    => $end_date_l[$x],
                    'details'     => $details_l[$x],
                    'status'      => 'edit'
                );
                $this->db->where('id', $this->input->post('lid')[$x]);
                $this->db->update('person_leave', $updateArray4);
            } else {
                $insertArray4   = array(
                    'person_id'  => $personid,
                    'leave_type'  => $leavetype_l[$x],
                    'leave_time'  => $time_l[$x],
                    'start_date'  => $startDate_l[$x],
                    'end_date'    => $end_date_l[$x],
                    'details'     => $details_l[$x],
                    'status'     => 'insert'
                );
                $this->db->insert('person_leave', $insertArray4);
            }
        }


        // Promoson Information Start
        $poid            = $this->input->post('poid');
        $rank_p          = $this->input->post('rank_p');
        $pay_scale_p     = $this->input->post('pay_scale_p');
        $promo_date_p    = $this->input->post('promo_date_p');
        $promo_type_p    = $this->input->post('promo_type_p');
        $go_date_p       = $this->input->post('go_date_p');
        $details_p       = $this->input->post('details_p');

        $updateArray5 = array();
        $insertArray5 = array();
        if (null !== ($this->input->post('rank_p'))) {
            $count5 = count($this->input->post('rank_p'));
        } 
        $numrows5 = count($this->input->post('poid'));

        // if (null !== ($this->input->post('poid'))) {
           
        // }

        //echo $count5;
        for ($x = 0; $x < $count5; $x++) {
            if ($x < $numrows5) {
                $updateArray5   = array(
                    'post'            => $rank_p[$x],
                    'pay_scal'        => $pay_scale_p[$x],
                    'promotion_date'  => $promo_date_p[$x],
                    'promo_type'      => $promo_type_p[$x],
                    'go_date'         => $go_date_p[$x],
                    'details'         => $details_p[$x],
                    'status'      => 'edit'
                );
                $this->db->where('id', $this->input->post('poid')[$x]);
                $this->db->update('person_pomoson', $updateArray5);
            } else {
                $insertArray5   = array(
                    'post'            => $rank_p[$x],
                    'pay_scal'        => $pay_scale_p[$x],
                    'promotion_date'  => $promo_date_p[$x],
                    'promo_type'      => $promo_type_p[$x],
                    'go_date'         => $go_date_p[$x],
                    'details'         => $details_p[$x],
                    'person_id'  => $personid,
                    'status'     => 1
                );
                //echo 'test';
                //print_r($insertArray5);
                // $this->db->insert('person_pomoson', $insertArray5);
                $this->db->insert('person_pomoson', $insertArray5);
                // if($this->db->affected_rows() > 0){
                // 	echo "done";
                // }else{
                // 	echo "no";
                // }
            }
        }


        // Crime Information Start
        $cid               = $this->input->post('cid');
        $type_c            = $this->input->post('type_c');
        $details_c         = $this->input->post('details_c');
        $present_status_c  = $this->input->post('present_status_c');
        $judgment_c        = $this->input->post('judgment_c');
        $final_judg_c      = $this->input->post('final_judg_c');
        $comment_c         = $this->input->post('comment_c');

        $updateArray6 = array();
        $insertArray6 = array();
        $count6 = count($this->input->post('designation_j'));
        $numrows6 = count($this->input->post('cid'));

        for ($x = 0; $x < $count6; $x++) {
            if ($x < $numrows6) {
                $updateArray6   = array(
                    'crime_type'    => $type_c[$x],
                    'details'       => $details_c[$x],
                    'present'       => $present_status_c[$x],
                    'judment'       => $judgment_c[$x],
                    'final_judment' => $final_judg_c[$x],
                    'comment'       => $comment_c[$x],
                    'status'      => 'edit'
                );
                $this->db->where('id', $this->input->post('cid')[$x]);
                $this->db->update('person_crime', $updateArray6);
            } else {
                $insertArray6   = array(
                    'person_id'  => $personid,
                    'crime_type'    => $type_c[$x],
                    'details'       => $details_c[$x],
                    'present'       => $present_status_c[$x],
                    'judment'       => $judgment_c[$x],
                    'final_judment' => $final_judg_c[$x],
                    'comment'       => $comment_c[$x],
                    'status'     => 'insert'
                );
                $this->db->insert('person_crime', $insertArray6);
            }
        }



        // Posting Information Start
        $posid               = $this->input->post('posid');
        $post_po             = $this->input->post('post_po');
        $organization_po     = $this->input->post('organization_po');
        $address_po          = $this->input->post('address_po');
        $start_date_po       = $this->input->post('start_date_po');
        $end_date_po         = $this->input->post('end_date_po');
        $pay_scal_po         = $this->input->post('pay_scal_po');

        $updateArray7 = array();
        $insertArray7 = array();
        $count7 = count($this->input->post('post_po'));
        $numrows7 = count($this->input->post('posid'));

        for ($x = 0; $x < $count7; $x++) {
            if ($x < $numrows7) {
                $updateArray7   = array(
                    'post'          => $post_po[$x],
                    'organization'  => $organization_po[$x],
                    'address'       => $address_po[$x],
                    'start_date'    => $start_date_po[$x],
                    'end_date'      => $end_date_po[$x],
                    'pay_scal'      => $pay_scal_po[$x],
                    'status'      => 'edit'
                );
                $this->db->where('id', $this->input->post('posid')[$x]);
                $this->db->update('person_posting', $updateArray7);
            } else {
                $insertArray7   = array(
                    'person_id'  => $personid,
                    'post'          => $post_po[$x],
                    'organization'  => $organization_po[$x],
                    'address'       => $address_po[$x],
                    'start_date'    => $start_date_po[$x],
                    'end_date'      => $end_date_po[$x],
                    'pay_scal'      => $pay_scal_po[$x],
                    'status'     => 'insert'
                );
                $this->db->insert('person_posting', $insertArray7);
            }
        }





        // Basic Information Part
        // File Upload function Start
        $data = array();
        $doc = json_encode(str_replace(" ", "", $_FILES['attach_file']['name']));
        $filesCount = count($_FILES['attach_file']['name']);



        if ($doc == '[""]') {
            $doc = $this->input->post('attach_file2');
        }

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['attach_file']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['attach_file']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['attach_file']['tmp_name'][$i];

            $uploadPath = 'uploads/Person/' . $personid;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // File Upload function End 

        $pid = $this->input->post('pid');
        $dataA = array(
            'person_id'         => $personid,
            'add_date'          => $this->input->post('to_date'),
            'name'              => $this->input->post('name'),
            'father'            => $this->input->post('father'),
            'mother'            => $this->input->post('mother'),
            'potni'             => $this->input->post('potni'),
            'nid'               => $this->input->post('nid'),
            'district'          => $this->input->post('won_dist'),
            'dob'               => $this->input->post('dob'),
            'marital_status'    => $this->input->post('marital'),
            'childen'           => $this->input->post('childen'),
            'present_address'   => $this->input->post('persent_address'),
            'permanent_address' => $this->input->post('permanent_address'),
            'mobile'            => $this->input->post('mobile_number'),
            'email'             => $this->input->post('email'),
            'images'            => $doc,
            'add_person'        => $this->input->post('uid'),
            'status'            => 'Pending'
        );

        // print_r($dataA);

        $this->db->where('id', $pid);
        $this->db->update('personal_information', $dataA);
        // if($this->db->affected_rows() > 0){

        $this->session->set_userdata('status', 'information update Sucessfully');
        redirect('view-employees');
		//}
    }

    //---/edit update controller : edit employee details controller

    public function employee_list()
    {
        if (!file_exists(APPPATH . '/views/pages/employee_list.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('employee_model');
                $data['list_of_employee_record'] = $this->employee_model->show_all_employee_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/employee_list', $data);
                $this->load->view('templates/footer');
            }
        }
    }
}
