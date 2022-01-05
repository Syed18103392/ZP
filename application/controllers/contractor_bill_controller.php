<?php
class contractor_bill_controller extends CI_Controller
{
    public function view_add_contractor_bill($slug = 'add_contractor_bill')
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
                $this->load->model('contractor_bill_model');
                $main_head_values = $this->contractor_bill_model->get_head_info();
                $banks_list = $this->contractor_bill_model->get_bank_names();

                $data['main_head_values'] = $main_head_values;
                $data['banks_info'] = $banks_list;
                $data['userid'] = $login_status_check;
                $this->load->view('templates/header');
                $this->load->view('/pages/dashboard');
                $this->load->view('/pages/add_contractor_bill', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function add_contractor_bill()
    {
        // File Upload function Start
        $billid = $this->input->post('billid');
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

        //$year = date('Y');
        $data = array(
            'bill_id'       => $billid,
            'contractor_id' => $this->input->post('contractor_name'),
            'bill_type'     => $this->input->post('bill_type'),
            'session'       => $this->input->post('session'),
            'project_id'    => $this->input->post('projectid'),
            'project_name'  => $this->input->post('developmentname'),
            'contract_price' => $this->input->post('contract_price'),
            'advance_price' => $this->input->post('advance_paid'),
            'bill_amount'   => $this->input->post('bill_amount'),
            'perfor_comi'   => $this->input->post('perfor_parc'),
            'perfor_amout'  => $this->input->post('performance'),
            'vat_comi'      => $this->input->post('vat_parc'),
            'vat_amount'    => $this->input->post('vat_amount'),
            'income_comi'   => $this->input->post('income_parc'),
            'income_amount' => $this->input->post('income_tax'),
            'total_amount'  => $this->input->post('amount'),
            'details'       => $this->input->post('details'),
            'file_info'     => $fileUploadPath,
            'add_date'      => $this->input->post('date'),
            'status'        => 'Pending',
            'add_person'    => $this->input->post('uid')

        );
        //print_r($data);

        $this->load->model('contractor_bill_model');
        $this->contractor_bill_model->insertNewcontractor_bill($data);
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
                $data['list_of_pending_record'] = $this->contractor_bill_model->show_contractor_bill_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/view_contractor_bill', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function details_contractor_bill()
    {
        if (!file_exists(APPPATH . '/views/pages/contractor_bill_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('contractor_bill_model');
                $data['contractor_bill_complete_info'] = $this->contractor_bill_model->get_contractor_bill_details($id);
                //print_r($data['contractor_bill_complete_info']);
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/contractor_bill_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }


    // status controller : controll the approve and refuse add money proposal
    public function contractor_bill_status()
    {
        $id = $this->uri->segment(2);
        $data = array(
            'status' => 'approved'
        );
        $this->load->model('contractor_bill_model');
        $result = $this->contractor_bill_model->approvecontractor_bill($data, $id);
        //print_r($result);
        if ($result == true) {
            $this->session->set_userdata('status', 'Approved');
            redirect('contractor-bill-list');
        }
    }


    // status controller : controll the approve and refuse add money proposal

    //---delete update controller : edit contractor_bill details controller

    public function delete_single_contractor_bill()
    {

        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {
            $id  = $this->uri->segment(2);
            $this->load->model('contractor_bill_model');
            $result = $this->contractor_bill_model->delete_contractor_bill($id);
            if ($result == true) {
                $this->session->set_userdata('status', 'Delete Successfully');
                redirect('contractor-bill-list');
            }
        }
    }


    //---/delete update controller : edit contractor_bill details controller

    //---edit update controller : edit contractor_bill details controller

    public function edit_contractor_bill_details()
    {
        if (!file_exists(APPPATH . '/views/pages/edit_contractor_bill_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('contractor_bill_model');

                $data['single_post_data'] = $this->contractor_bill_model->get_single_post_details($id);
                //$data['all_head_list'] = $this->contractor_bill_model->get_head_info();
                //$data['all_bank_list'] = $this->contractor_bill_model->get_bank_names();
                //print_r($data);
                if (isset($data['single_post_data']['info']->file_info)) {
                    $this->session->set_userdata('editable_file_path', $data['single_post_data']['info']->file_info);
                }
                //print_r($data['single_post_data']);

                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/edit_contractor_bill_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function update_contractor_bill()
    {
        // File Upload function Start
        $contractor_billid = $this->input->post('billid');
        $data = array();
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

        $data = array(
            'bill_id'       => $this->input->post('billid'),
            'contractor_id' => $this->input->post('contractor_name'),
            'session'       => $this->input->post('session'),
            'project_id'    => $this->input->post('projectid'),
            'project_name'  => $this->input->post('projectname'),
            'contract_price' => $this->input->post('contract_price'),
            'advance_price' => $this->input->post('advance_paid'),
            'perfor_comi'   => $this->input->post('perfor_parc'),
            'perfor_amout'  => $this->input->post('performance'),
            'vat_comi'      => $this->input->post('vat_parc'),
            'vat_amount'    => $this->input->post('vat_amount'),
            'income_comi'   => $this->input->post('income_parc'),
            'income_amount' => $this->input->post('income_tax'),
            'total_amount'  => $this->input->post('amount'),
            'details'       => $this->input->post('details'),
            'add_date'      => $this->input->post('date'),
            'status'        => 'Pending',
            'add_person'    => $this->input->post('uid'),

        );

        if ($fileUploadPath != null) {
            $data = ['file_info' => $fileUploadPath];
        }
        if (is_array($this->input->post('challan'))) {
            $data = [
                'challan'       => implode(",", $this->input->post('challan')),
                'voucher'       => implode(",", $this->input->post('voucher')),
                'amount'        => implode(",", $this->input->post('amount')),
                'pay_to'        => implode(",", $this->input->post('payto')),
            ];
        }
        // print_r($data);

        $this->load->model('contractor_bill_model');
        $this->contractor_bill_model->UpdateExistingcontractor_bill($data, $contractor_billid);
    }

    //---/edit update controller : edit contractor_bill details controller

    public function contractor_bill_list()
    {
        if (!file_exists(APPPATH . '/views/pages/contractor_bill_list.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('contractor_bill_model');
                $data['list_of_contractor_bill_record'] = $this->contractor_bill_model->show_all_contractor_bill_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/contractor_bill_list', $data);
                $this->load->view('templates/footer');
            }
        }
    }
}
