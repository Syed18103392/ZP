<?php
class person_land_info_model extends CI_Model
{
    public function get_head_info()
    {
        $this->db->select('*');
        $this->db->from('main_head');
        $this->db->where('headtype', 'person_land_info');
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
    public function insertNewperson_land_info($data)
    {
        $this->db->insert('person_land_info', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'New person_land_info added successfully !!');
            redirect('record-land-record_info');
        }
    }
    public function show_person_land_info_list()
    {
        $this->db->select('*');
        $this->db->order_by('id', 'DESC');
        // $this->db->where('status', 'Pending');
        $sql = $this->db->get('person_land_info');
        $rec = $sql->result();
        return $rec;
    }

    public function get_person_land_info_details($id)
    {
        $this->db->select('*');
        $this->db->from('person_land_info');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        //print_r($query_result);
        return $result;
    }
    public function approveperson_land_info($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('person_land_info', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete_person_land_info($id)
    {
        $this->db->where('id', $id);
        $sqlQuery = $this->db->get('person_land_info');
        $wholeData = $sqlQuery->row();
        $land_record_id = $wholeData->record_id;
        print_r($land_record_id);

        $this->db->where('receoad_id', $land_record_id);
        $this->db->delete('person_land_info_details');

        $this->db->where('id', $id);
        $this->db->delete('person_land_info');

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
        // $check_field_sql = $this->db->get('person_land_info');
        // $check_field = $check_field_sql->row();
        //print_r( $check_field );
        $this->db->select('*');
        $this->db->from('person_land_info');

        $this->db->where('person_land_info.id', $id);

        $sqlperson_land_info = $this->db->get();
        $result = $sqlperson_land_info->row();
        // $data['sub_head_id'] = $check_field->sub_head;
        $data['info'] = $result;
        //print_r($data);
        return $data;
    }

    //UpdateExistingperson_land_info
    public function UpdateExistingperson_land_info($data, $person_land_info_id)
    {
        $old_file_path = $this->session->userdata('editable_file_path');
        $new_file_path = $data->ex_file;

        if ($old_file_path != $new_file_path) {
            unlink($old_file_path);
        }
        $this->db->where('person_land_info_id', $person_land_info_id);
        $this->db->update('person_land_info', $data);

        //print_r($data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'update successfully !!');
            redirect('view_person_land_info');
        }
    }
    public function show_all_person_land_info_list()
    {

        $this->db->order_by('id', 'DESC');
        $this->db->where('status', 'approved');
        $sql = $this->db->get('person_land_info');

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
