<?php 
    class income_details_model extends CI_Model{
        public function get_income_details($id)
        {
            $this->db->select('*');
            $this->db->from('income');
            $this->db->where('id',$id);
            $query_result=$this->db->get();
            $result = $query_result->row();
            print_r($query_result);
            return $result;

        }
        public function get_single_post_details($id){

            $this->db->select('*');
            $this->db->where('id',$id);
            $check_field_sql=$this->db->get('income');
            $check_field=$check_field_sql->row();
            

            $this->db->select('*');
            $this->db->from('income');
            $this->db->join('main_head','main_head.id=income.main_head');
            if($check_field->bank != null){
                $this->db->join('bank_info','bank_info.id=income.bank');
            }
            if($check_field->sub_head != null){
                $this->db->join('sub_head','sub_head.id=income.sub_head');
            }
            $this->db->where('income.id',$id);
            
			$sqlIncome = $this->db->get();
			$result = $sqlIncome->row();
            //print_r($result);
            return $result;
        }
        

    }