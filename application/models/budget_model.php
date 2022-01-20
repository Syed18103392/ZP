<?php
class budget_model extends CI_Model
{
    public function get_head_info()
    {
        $this->db->select('*');
        $this->db->from('main_head');
        $this->db->where('headtype', 'register_file');
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
    public function insertNewbudget($data)
    {


        $this->db->insert('register_file', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'New budget added successfully !!');
            redirect('view-all-registers');
        }
    }

    public function add_new_budget_summery($data)
    {


        $this->db->insert('budget_income', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'New budget added successfully !!');
            redirect('view-budgets');
        }
    }
 
    public function add_new_budget_ex($data)
    {


        $this->db->insert('budget_expenses', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'New budget expenses added successfully !!');
            redirect('view-budgets');
        }
    }

    public function show_budget_list()
    {
        $this->db->order_by('id', 'DESC');
        $sql = $this->db->get('budget_income');
        $rec = $sql->result();
        return $rec;
    }

    public function get_budget_details($id)
    {
        $this->db->where('id', $id);
        $sql = $this->db->get('register_file');
        $sql = $sql->row();
        return $sql;
    }

    public function delete_budget($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('register_file');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_single_post_details($id)
    {
        $this->db->where('id', $id);
        $sql = $this->db->get('register_file');
        $sql = $sql->row();
        return $sql;
    }
}
