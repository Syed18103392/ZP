<?php
    class view_income_model extends CI_Model{
        public function show_income_list(){

            $this->db->order_by('id','DESC');
            $this->db->where('status','Panding');
            $sql= $this->db->get(' income');
            $rec = $sql->result();
            return $rec;
        }

        public function approveIncome($data,$id){
            $this->db->where('id',$id);
            $this->db->update('income',$data);
             if($this->db->affected_rows() > 0){
                 return true;
                  
               }
               else{
                   return false;
               }	
        }
        
    }