<?php
class land_recoad_model extends CI_Model
{
    public function get_head_info()
    {
        $this->db->select('*');
        $this->db->from('main_head');
        $this->db->where('headtype', 'land_recoad');
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
    public function insertNewland_recoad($data)
    {
        $this->db->insert('land_recoad', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'New land_recoad added successfully !!');
            redirect('record-land-recoad');
        }
    }
    public function show_land_recoad_list()
    {
        $this->db->select('*');
        $this->db->order_by('id', 'DESC');
       // $this->db->where('status', 'Pending');
        $sql = $this->db->get('land_recoad');
        $rec = $sql->result();
        return $rec;
    }

    public function get_land_recoad_details($id)
    {
        $this->db->select('*');
        $this->db->from('land_recoad');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        //print_r($query_result);
        return $result;
    }
    public function approveland_recoad($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('land_recoad', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete_land_recoad($id)
    {
        $this->db->where('id', $id);
        $sqlQuery = $this->db->get('land_recoad');
        $wholeData = $sqlQuery->row();
        $file_path = $wholeData->ex_file;

        unlink($file_path);

        $this->db->where('id', $id);
        $this->db->delete('land_recoad');
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
        $check_field_sql = $this->db->get('land_recoad');
        $check_field = $check_field_sql->row();
        //print_r( $check_field );
        $this->db->select('*');
        $this->db->from('land_recoad');
        $this->db->join('main_head', 'main_head.id=land_recoad.main_head');
        if ($check_field->bank != null) {
            $this->db->join('bank_info', 'bank_info.id=land_recoad.bank');
        }
        if ($check_field->sub_head != null) {
            $this->db->join('sub_head', 'sub_head.id=land_recoad.sub_head');
        }
        $this->db->where('land_recoad.id', $id);

        $sqlland_recoad = $this->db->get();
        $result = $sqlland_recoad->row();
        $data['sub_head_id'] = $check_field->sub_head;
        $data['info'] = $result;
        //print_r($data);
        return $data;
    }

    //UpdateExistingland_recoad
    public function UpdateExistingland_recoad($data, $land_recoad_id)
    {
        $old_file_path = $this->session->userdata('editable_file_path');
        $new_file_path = $data->ex_file;

        if ($old_file_path != $new_file_path) {
            unlink($old_file_path);
        }
        $this->db->where('land_recoad_id', $land_recoad_id);
        $this->db->update('land_recoad', $data);

        //print_r($data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'update successfully !!');
            redirect('view_land_recoad');
        }
    }
    public function show_all_land_recoad_list()
    {

        $this->db->order_by('id', 'DESC');
        $this->db->where('status', 'approved');
        $sql = $this->db->get('land_recoad');

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
