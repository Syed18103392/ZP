<?php
class expenses_model extends CI_Model
{
    public function get_head_info()
    {
        $this->db->select('*');
        $this->db->from('main_head');
        $this->db->where('headtype', 'Expenses');
        $this->db->order_by('id', 'ASC');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function get_bank_names()
    {
        $this->db->select('*');
        $this->db->from('bank_info');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function insertNewExpenses($data)
    {
        $this->db->insert('expenses', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'New Expenses added successfully !!');
            redirect('view_expenses');
        }
    }

    public function get_expenses_details($id)
    {
        $this->db->select('*');
        $this->db->from('expenses');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        //print_r($query_result);
        return $result;
    }
}
