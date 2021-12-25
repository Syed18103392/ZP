<?php 
    class add_income extends CI_Controller{
        public function Add_income(){
            // File Upload function Start
            $income_id = $this->input->post('incomeid');
               $data = array();
               $error='';
               $sdata = array();
               $fileUploadPath='';
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';
                $this->load->library('upload',$config);

                //print_r($this->upload->do_upload('userFiles'));

                if(!$this->upload->do_upload('userFiles')){
                    $error = $this->upload->display_errors();
                }
                else{
                    $sdata = $this->upload->data();
                    print_r($config['upload_path']);
                    $fileUploadPath =$config['upload_path'].$sdata['file_name'];  
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
               'payment_mode'=> $this->input->post('paymentmode'),
               'method_others'=> $this->input->post('other_pay_method'),
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
             
            $this->load->model('add_income_model');
            $this->add_income_model->insertNewIncome($data);
      }

}