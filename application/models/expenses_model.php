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
    public function show_expenses_list()
    {
        $this->db->select('*');
        $this->db->order_by('id', 'DESC');
        $this->db->where('status', 'Pending');
        $sql = $this->db->get('expenses');
        $rec = $sql->result();
        return $rec;
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
    public function approveExpenses($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('expenses', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete_expenses($id)
    {
        $this->db->where('id', $id);
        $sqlQuery = $this->db->get('expenses');
        $wholeData = $sqlQuery->row();
        $file_path = $wholeData->ex_file;

        unlink($file_path);

        $this->db->where('id', $id);
        $this->db->delete('expenses');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_single_post_details($id)
    {

        $this->db->select('*');
        $this->db->where('id', $id);
        $check_field_sql = $this->db->get('expenses');
        $check_field = $check_field_sql->row();
        //print_r( $check_field );
        $this->db->select('*');
        $this->db->from('expenses');
        $this->db->join('main_head', 'main_head.id=expenses.main_head');
        if ($check_field->bank != null) {
            $this->db->join('bank_info', 'bank_info.id=expenses.bank');
        }
        if ($check_field->sub_head != null) {
            $this->db->join('sub_head', 'sub_head.id=expenses.sub_head');
        }
        $this->db->where('expenses.id', $id);

        $sqlexpenses = $this->db->get();
        $result = $sqlexpenses->row();
        $data['sub_head_id'] = $check_field->sub_head;
        $data['info'] = $result;
        //print_r($data);
        return $data;
    }

    //UpdateExistingexpenses
    public function UpdateExistingExpenses($data, $expenses_id)
    {
        $old_file_path = $this->session->userdata('editable_file_path');
        $new_file_path = $data->ex_file;

        if ($old_file_path != $new_file_path) {
            unlink($old_file_path);
        }
        $this->db->where('expenses_id', $expenses_id);
        $this->db->update('expenses', $data);

        //print_r($data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'update successfully !!');
            redirect('view_expenses');
        }
    }
    public function show_all_expenses_list()
    {

        $this->db->order_by('id', 'DESC');
        $this->db->where('status', 'approved');
        $sql = $this->db->get('expenses');

        $rec = $sql->result();
        return $rec;
    }
    public function show_contractor_bill_list()
    {

        $this->db->order_by('id', 'DESC');
        $this->db->where('status', 'Panding');
        $sql = $this->db->get('contractor_bill');
        $rec = $sql->result();
        return $rec;
    }
}
