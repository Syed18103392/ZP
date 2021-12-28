<?php 
    class add_income_model extends CI_Model{
        public function get_head_info()
        {
            $this->db->select('*');
            $this->db->from('main_head');
            $this->db->where('headtype','income');

            $query_result=$this->db->get();
            $result = $query_result->result();
            return $result;


        }
        public function get_bank_names()
        {
            $this->db->select('*');
            $this->db->from('bank_info');

            $query_result=$this->db->get();
            $result = $query_result->result();
            return $result;
        }
        public function insertNewIncome($data)
        {
            $this->db->insert('income',$data);
            if($this->db->affected_rows() > 0){
                $this->session->set_userdata('status','New income add successfully !!');
                redirect('view_income');
            }
        }



        

    }