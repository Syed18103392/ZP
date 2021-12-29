<?php
class income_controller extends CI_Controller
{

    public function Add_income()
    {
        // File Upload function Start
        $income_id = $this->input->post('incomeid');
        $data = array();
        $error = '';
        $sdata = array();
        $fileUploadPath = '';
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';
        $this->load->library('upload', $config);

        //print_r($this->upload->do_upload('userFiles'));

        if (!$this->upload->do_upload('userFiles')) {
            $error = $this->upload->display_errors();
        } else {
            $sdata = $this->upload->data();
            print_r($config['upload_path']);
            $fileUploadPath = $config['upload_path'] . $sdata['file_name'];
        }
        //print_r($this->upload->display_errors());

        $year = date('Y');
        $data = array(
            'incomeid'    => $income_id,
            'main_head'   => $this->input->post('mainhead'),
            'sub_head'    => $this->input->post('subhead'),
            'location'    => $this->input->post('location'),
            'location_other' => $this->input->post('locations_others'),
            'bank'        => $this->input->post('bank'),
            'branch'      => $this->input->post('bank_branch'),
            'account_no'  => $this->input->post('accountno'),
            'payment_mode' => $this->input->post('paymentmode'),
            'method_others' => $this->input->post('other_pay_method'),
            'check_no'    => $this->input->post('check_number'),
            'challan'     => $this->input->post('challen'),
            'date'        => $this->input->post('date'),
            'sources'     => $this->input->post('soruces'),
            'amount'      => $this->input->post('amount'),
            'details'     => $this->input->post('details'),
            'file_info'   => $fileUploadPath,
            'status'      => 'Panding',
            'year'        => $year,
            'add_person'  => $this->input->post('uid'),

        );
        print_r($data);

        $this->load->model('income_model');
        $this->income_model->insertNewIncome($data);
    }


    public function view_add_income($slug = 'add_income')
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
                $this->load->model('income_model');
                $main_head_values = $this->income_model->get_head_info();
                $banks_list = $this->income_model->get_bank_names();

                $data['main_head_values'] = $main_head_values;
                $data['banks_info'] = $banks_list;
                $data['userid'] = $login_status_check;
                $this->load->view('templates/header');
                $this->load->view('/pages/dashboard');
                $this->load->view('/pages/add_income', $data);
                $this->load->view('templates/footer');
            }
        }
    }
    public function view_income()
    {
        if (!file_exists(APPPATH . '/views/pages/view_income.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('income_model');
                $data['list_of_income_record'] = $this->income_model->show_income_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/view_income', $data);
                $this->load->view('templates/footer');
            }
        }
    }
    public function income_list()
    {
        if (!file_exists(APPPATH . '/views/pages/income_list.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('income_model');
                $data['list_of_income_record'] = $this->income_model->show_all_income_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/income_list', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function details_income()
    {
        if (!file_exists(APPPATH . '/views/pages/income_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('income_model');
                $data['income_complete_info'] = $this->income_model->get_income_details($id);
                //print_r($data['income_complete_info']);
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/income_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }


    // status controller : controll the approve and refuse add money proposal
    public function income_status()
    {
        $id = $this->uri->segment(2);
        $data = array(
            'status' => 'approved'
        );
        $this->load->model('income_model');
        $result = $this->income_model->approveIncome($data, $id);
        print_r($result);
        if ($result == true) {
            $this->session->set_userdata('status', 'Approved');
            redirect('income_list');
        }
    }

    // status controller : controll the approve and refuse add money proposal

    //---edit update controller : edit income details controller

    public function edit_income_details()
    {
        if (!file_exists(APPPATH . '/views/pages/edit_income_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('income_model');

                $data['single_post_data'] = $this->income_model->get_single_post_details($id);
                if(isset($data['single_post_data']['info']->file_info)){
                $this->session->set_userdata('editable_file_path',$data['single_post_data']['info']->file_info);
                }
                print_r($data['single_post_data']);

                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/edit_income_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function update_income()
    {
        // File Upload function Start
        $income_id = $this->input->post('incomeid');
        $data = array();
        $error = '';
        $sdata = array();
        $fileUploadPath = '';

        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';
        print_r(null !== $this->input->post('userFiles'));
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('userFiles')) {
            $error = $this->upload->display_errors();
        } else {
            $sdata = $this->upload->data();
            print_r($config['upload_path']);
            $fileUploadPath = $config['upload_path'] . $sdata['file_name'];
        }



        $year = date('Y');
        $data = array(
            'incomeid'    => $income_id,
            'main_head'   => $this->input->post('mainhead'),
            'sub_head'    => $this->input->post('subhead'),
            'location'    => $this->input->post('location'),
            'location_other' => $this->input->post('locations_others'),
            'bank'        => $this->input->post('bank'),
            'branch'      => $this->input->post('bank_branch'),
            'account_no'  => $this->input->post('accountno'),
            'payment_mode' => $this->input->post('paymentmode'),
            'method_others' => $this->input->post('other_pay_method'),
            'check_no'    => $this->input->post('check_number'),
            'challan'     => $this->input->post('challen'),
            'date'        => $this->input->post('date'),
            'sources'     => $this->input->post('soruces'),
            'amount'      => $this->input->post('amount'),
            'details'     => $this->input->post('details'),
            'status'      => 'Panding',
            'year'        => $year,
            'add_person'  => $this->input->post('uid'),

        );
        if ($fileUploadPath != null) {
            $data = ['file_info' => $fileUploadPath];
        }
        //print_r($data);

        $this->load->model('income_model');
        $this->income_model->UpdateExistingIncome($data, $income_id);
    }

    //---/edit update controller : edit income details controller

    //---delete update controller : edit income details controller

    public function delete_single_income()
    {
        if (!file_exists(APPPATH . '/views/pages/edit_income_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $id  = $this->uri->segment(2);
                $this->load->model('income_model');
                $result = $this->income_model->delete_income($id);
                if ($result == true) {
                    $this->session->set_userdata('status', 'Delete Successfully');
                    redirect('view_income');
                }
            }
        }
    }


    //---/delete update controller : edit income details controller


}
