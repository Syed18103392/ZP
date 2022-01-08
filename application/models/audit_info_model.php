<?php
class audit_info_model extends CI_Model
{
    public function get_head_info()
    {
        $this->db->select('*');
        $this->db->from('main_head');
        $this->db->where('headtype', 'audit_info');
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
    public function insertNewaudit_info($data)
    {


        $this->db->insert('audit_info', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'New audit_info added successfully !!');
            redirect('record-audit-info');
        }
    }

    public function show_audit_info_list()
    {
        $this->db->select('*');
        $this->db->order_by('id', 'DESC');
        $sql = $this->db->get('audit_info');
        $rec = $sql->result();
        return $rec;
    }

    public function get_audit_info_details($id)
    {
        $this->db->select('*');
        $this->db->from('audit_info');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        //print_r($query_result);
        return $result;
    }

    public function delete_audit_info($id)
    {
        $this->db->where('id', $id);
        $sqlQuery = $this->db->get('audit_info');
        $wholeData = $sqlQuery->row();
        $file_path = $wholeData->ex_file;

        unlink($file_path);

        $this->db->where('id', $id);
        $this->db->delete('audit_info');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_single_post_details($id)
    {
        $this->db->select('*');
        $this->db->from('audit_info');
        $this->db->where('id', $id);

        $sqlaudit_info = $this->db->get();
        $result = $sqlaudit_info->row();
        $data['info'] = $result;
        return $data;
    }

    //UpdateExistingaudit_info
    public function UpdateExistingaudit_info($data, $audit_info_id)
    {
        $this->db->where('id', $audit_info_id);
        $this->db->update('audit_info', $data);

        print_r($data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'update successfully !!');
            redirect('record-audit-info');
        }
    }
    public function show_all_audit_info_list()
    {

        $this->db->order_by('id', 'DESC');
        $this->db->where('status', 'approved');
        $sql = $this->db->get('audit_info');

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
