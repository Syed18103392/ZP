<?php
class expenses_controller extends CI_Controller
{
    public function view_add_expences($slug = 'add_income')
    {
        if (!file_exists(APPPATH . '/views/pages/' . $slug . '.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } 
            else {
                $this->load->model('expenses_model');
                $main_head_values = $this->expenses_model->get_head_info();
                $banks_list = $this->expenses_model->get_bank_names();

                $data['main_head_values'] = $main_head_values;
                $data['banks_info'] = $banks_list;
                $data['userid'] = $login_status_check;
                $this->load->view('templates/header');
                $this->load->view('/pages/dashboard');
                $this->load->view('/pages/add_expenses', $data);
                $this->load->view('templates/footer');
            }
        }
    }
    public function add_expenses()
    {
        // File Upload function Start
        $expensesid = $this->input->post('expensesid');
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
            'expenses_id'   => $expensesid,
			'main_head'     => $this->input->post('mainhead'),
			'sub_head'      => $this->input->post('subhead'),
			'porject_type'  => $this->input->post('projecttype'),
			'project_ty_other'  => $this->input->post('others_projecttype'),
			'project_title' => $this->input->post('projectname'),
			'bank'          => $this->input->post('bank'),
			'branch'        => $this->input->post('bank_branch'),
			'account'       => $this->input->post('accountno'),
			'payment_mode'  => $this->input->post('paymentmode'),
			'project_ty_other'  => $this->input->post('other_pay_method'),
			'pay_date'      => $this->input->post('date'),
			'challan'       => implode(",", $this->input->post('challan')),
			'voucher'       => implode(",", $this->input->post('voucher')),
			'amount'        => implode(",", $this->input->post('amount')),
			'pay_to'        => implode(",", $this->input->post('payto')),
			'details'       => $this->input->post('details'),
			'ex_file'       => $fileUploadPath,
			'status'        => 'Pending',
			'year'          => $year,
			'add_person'    => $this->input->post('uid')

        );
        print_r($data);

        $this->load->model('expenses_model');
        $this->expenses_model->insertNewExpenses($data);
    }

    public function view_expenses()
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
                $this->load->view('/pages/view_expenses', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function details_expenses()
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
                $this->load->model('expenses_model');
                $data['income_complete_info'] = $this->expenses_model->get_expenses_details($id);
                //print_r($data['income_complete_info']);
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/expenses_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }

   
}
