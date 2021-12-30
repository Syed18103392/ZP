<?php
class income_model extends CI_Model
{
    public function get_head_info()
    {
        $this->db->select('*');
        $this->db->from('main_head');
        $this->db->where('headtype', 'income');

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
    public function insertNewIncome($data)
    {
        $this->db->insert('income', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'New income add successfully !!');
            redirect('view_income');
        }
    }
    //UpdateExistingIncome
    public function UpdateExistingIncome($data, $income_id)
    {
        $old_file_path = $this->session->userdata('editable_file_path');
        $new_file_path = $data->file_info;

        if ($old_file_path != $new_file_path) {
            unlink($old_file_path);
        }
        $this->db->where('incomeid', $income_id);
        $this->db->update('income', $data);

        print_r($data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'update successfully !!');
            redirect('view_income');
        }
    }


    public function get_income_details($id)
    {
        $this->db->select('*');
        $this->db->from('income');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        //print_r($query_result);
        return $result;
    }
    public function get_single_post_details($id)
    {

        $this->db->select('*');
        $this->db->where('id', $id);
        $check_field_sql = $this->db->get('income');
        $check_field = $check_field_sql->row();


        $this->db->select('*');
        $this->db->from('income');
        $this->db->join('main_head', 'main_head.id=income.main_head');
        if ($check_field->bank != null) {
            $this->db->join('bank_info', 'bank_info.id=income.bank');
        }
        if ($check_field->sub_head != null) {
            $this->db->join('sub_head', 'sub_head.id=income.sub_head');
        }
        $this->db->where('income.id', $id);

        $sqlIncome = $this->db->get();
        $result = $sqlIncome->row();
        $data['sub_head_id'] = $check_field->sub_head;
        $data['info'] = $result;
        //print_r($data);
        return $data;
    }

    public function delete_income($id)
    {
        $this->db->where('id', $id);
        $sqlQuery = $this->db->get('income');
        $wholeData = $sqlQuery->row();
        $file_path = $wholeData->file_info;
        print_r($file_path);
        unlink($file_path);
        $this->db->where('id', $id);
        $this->db->delete('income');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function show_income_list()
    {

        $this->db->order_by('id', 'DESC');
        $this->db->where('status', 'Panding');
        $sql = $this->db->get(' income');
        $rec = $sql->result();
        return $rec;
    }
    public function show_all_income_list()
    {

        $this->db->order_by('id', 'DESC');
        $this->db->where('status', 'approved');
        $sql = $this->db->get('income');

        $rec = $sql->result();
        return $rec;
    }

    public function approveIncome($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('income', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function add_new_opening_amount($data)
    {
        $this->db->insert('opening_balance', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }
    public function get_all_opening_amount_list()
    {
        $this->db->order_by('id', 'DESC');
        $sql = $this->db->get('opening_balance');
        $rec = $sql->result();
        return $rec;
    }
    public function approve_opening_income($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('opening_balance', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_opening_income($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('opening_balance');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
