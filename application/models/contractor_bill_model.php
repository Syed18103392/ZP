<?php
class contractor_bill_model extends CI_Model
{
    public function get_head_info()
    {
        $this->db->select('*');
        $this->db->from('main_head');
        $this->db->where('headtype', 'contractor_bill');
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
    public function insertNewcontractor_bill($data)
    {
        $this->db->insert('contractor_bill', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'New contractor_bill added successfully !!');
            redirect('contractor_bill');
        }
    }
    public function show_contractor_bill_list()
    {
        $this->db->select('*');
        $this->db->order_by('id', 'DESC');
        $this->db->where('status', 'Pending');
        $sql = $this->db->get('contractor_bill');
        $rec = $sql->result();
        return $rec;
    }

    public function get_contractor_bill_details($id)
    {
        $this->db->select('*');
        $this->db->from('contractor_bill');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        //print_r($query_result);
        return $result;
    }
    public function approvecontractor_bill($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('contractor_bill', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete_contractor_bill($id)
    {
        $this->db->where('id', $id);
        $sqlQuery = $this->db->get('contractor_bill');
        $wholeData = $sqlQuery->row();
        $file_path = $wholeData->file_info;

        unlink($file_path);

        $this->db->where('id', $id);
        $this->db->delete('contractor_bill');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_single_post_details($id)
    {

        // $this->db->select('*');
        // $this->db->where('id', $id);
        // $check_field_sql = $this->db->get('contractor_bill');
        // $check_field = $check_field_sql->row();
        //print_r( $check_field );
        $this->db->select('*');
        $this->db->from('contractor_bill');
        // $this->db->join('main_head', 'main_head.id=contractor_bill.main_head');
        // if ($check_field->bank != null) {
        //     $this->db->join('bank_info', 'bank_info.id=contractor_bill.bank');
        // }
        // if ($check_field->sub_head != null) {
        //     $this->db->join('sub_head', 'sub_head.id=contractor_bill.sub_head');
        // }
        $this->db->where('id', $id);

        $sqlcontractor_bill = $this->db->get();
        $result = $sqlcontractor_bill->row();
        //$data['sub_head_id'] = $check_field->sub_head;
        $data['info'] = $result;
        //print_r($data);
        return $data;
    }

    //UpdateExistingcontractor_bill
    public function UpdateExistingcontractor_bill($data, $contractor_bill_id)
    {
        $old_file_path = $this->session->userdata('editable_file_path');
        print_r($data);
        $new_file_path = $data->file_info;

        if ($old_file_path != $new_file_path) {
            unlink($old_file_path);
        }
        $this->db->where('bill_id', $contractor_bill_id);
        $this->db->update('contractor_bill', $data);

        //print_r($data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'update successfully !!');
            redirect('contractor_bill');
        }
    }
    public function show_all_contractor_bill_list()
    {

        $this->db->order_by('id', 'DESC');
        $this->db->where('status', 'approved');
        $sql = $this->db->get('contractor_bill');

        $rec = $sql->result();
        return $rec;
    }
}
