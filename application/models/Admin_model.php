<?php 
    class Admin_model extends CI_Model{
        public function user_login_info($user_type,$user_name,$password)
        {
            $this->db->select('*');
            $this->db->from('user_info');
            $this->db->where('user_type',$user_type);
            $this->db->where('user_id',$user_name);
            $this->db->where('password',$password);
            $query_result=$this->db->get();
            $result = $query_result->row();
            return $result;

        }
    }