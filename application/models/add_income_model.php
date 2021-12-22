<?php 
    class add_income_model extends CI_Model{
        public function get_head_info()
        {
            $this->db->select('headname');
            $this->db->from('main_head');
            $this->db->where('headtype','income');

            $query_result=$this->db->get();
            $result = $query_result->result();
            return $result;


        }
    }