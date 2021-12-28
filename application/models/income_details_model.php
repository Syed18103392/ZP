<?php 
    class income_details_model extends CI_Model{
        public function get_income_details($id)
        {
            $this->db->select('*');
            $this->db->from('income');
            $this->db->where('id',$id);
            $query_result=$this->db->get();
            $result = $query_result->row();
            return $result;

        }
    }