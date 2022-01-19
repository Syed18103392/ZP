<?php 

class report_model extends CI_Model{
    public function income_report(){

        $this->db->where('status', 'approved');
        $this->db->order_by('id', 'DESC');
        $sql = $this->db->get('income');

        $rec = $sql->result();
        return $rec;
    }
    public function Balance_sheet(){

        $this->db->where('status', 'approved');
        $this->db->order_by('id', 'DESC');
        $sql = $this->db->get('income');

        $rec = $sql->result();
        return $rec;
    }
     public function expenses_report(){
        $this->db->where('status', 'approved');
        $this->db->order_by('id', 'DESC');
        $sql = $this->db->get('expenses');

        $rec = $sql->result();
        $result['expenses']=$rec;

        // contractor_bill 
        $this->db->where('status', 'approved');
        $this->db->order_by('id', 'DESC');
        $sql = $this->db->get('contractor_bill');

        $rec = $sql->result();
        $result['contractor_bill'] = $rec;
        return $result;
     }
      public function bank_report(){

        $this->db->order_by('id', 'ASC');
        $sql = $this->db->get('bank_info');
        $rec = $sql->result();
        $result['bank_info']=$rec;
        return $result;

      }
      public function land_recoad_report(){

        $this->db->order_by('id', 'ASC');
        $sql = $this->db->get('bank_info');
        $rec = $sql->result();
        $result['bank_info']=$rec;
        return $result;

      }
      public function fdr_report(){

        $this->db->order_by('id', 'DESC');
        $this->db->where('status', 'Pending');
        $sql = $this->db->get('fdr_info');
        $rec = $sql->result();
        return $rec;

      }
}