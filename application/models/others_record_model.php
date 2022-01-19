<?php
class others_record_model extends CI_Model
{
    public function get_head_info()
    {
        $this->db->select('*');
        $this->db->from('main_head');
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
    public function insertNewothers_record($data)
    {
        $this->db->insert('others_record', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'New others_record added successfully !!');
            redirect('record-others-record');
        }
    }
    public function show_others_record_list()
    {
        $this->db->select('*');
        $this->db->order_by('id', 'DESC');
        // $this->db->where('status', 'Pending');
        $sql = $this->db->get('others_record');
        $rec = $sql->result();
        return $rec;
    }

    public function get_others_record_details($id)
    {
        $this->db->select('*');
        $this->db->from('others_record');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        //print_r($query_result);
        return $result;
    }
    public function approveothers_record($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('others_record', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete_others_record($id)
    {
        $this->db->where('id', $id);
 
        $this->db->where('id', $id);
        $this->db->delete('others_record');

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
        // $check_field_sql = $this->db->get('others_record');
        // $check_field = $check_field_sql->row();
        //print_r( $check_field );
        $this->db->select('*');
        $this->db->from('others_record');

        $this->db->where('others_record.id', $id);

        $sqlothers_record = $this->db->get();
        $result = $sqlothers_record->row();
        // $data['sub_head_id'] = $check_field->sub_head;
        $data['info'] = $result;
        //print_r($data);
        return $data;
    }

    //UpdateExistingothers_record
    public function UpdateExistingothers_record($data, $others_record_id)
    {

            $this->db->where('id', $others_record_id);
            $this->db->update('others_record', $data);

        print_r($data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'update successfully !!');
            redirect('record-others-record');
        }
    }
    public function show_all_others_record_list()
    {

        $this->db->order_by('id', 'DESC');
        $this->db->where('status', 'approved');
        $sql = $this->db->get('others_record');

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
