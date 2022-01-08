<?php
class case_info_model extends CI_Model
{

    public function insertNewcase_info($data)
    {


        $this->db->insert('case_info', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'New case_info added successfully !!');
            redirect('record-case-info');
        }
    }

    public function show_case_info_list()
    {
        $this->db->select('*');
        $this->db->order_by('id', 'DESC');
        $sql = $this->db->get('case_info');
        $rec = $sql->result();
        return $rec;
    }

    public function get_case_info_details($id)
    {
        $this->db->select('*');
        $this->db->from('case_info');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        //print_r($query_result);
        return $result;
    }

    public function delete_case_info($id)
    {
        $this->db->where('id', $id);
        $sqlQuery = $this->db->get('case_info');
        $wholeData = $sqlQuery->row();
        $file_path = $wholeData->ex_file;

        unlink($file_path);

        $this->db->where('id', $id);
        $this->db->delete('case_info');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_single_post_details($id)
    {
        $this->db->select('*');
        $this->db->from('case_info');
        $this->db->where('id', $id);

        $sqlcase_info = $this->db->get();
        $result = $sqlcase_info->row();
        $data['info'] = $result;
        return $data;
    }

    //UpdateExistingcase_info
    public function UpdateExistingcase_info($data, $case_info_id)
    {
        $this->db->where('id', $case_info_id);
        $this->db->update('case_info', $data);

        print_r($data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'update successfully !!');
            redirect('record-case-info');
        }
    }
    public function show_all_case_info_list()
    {

        $this->db->order_by('id', 'DESC');
        $this->db->where('status', 'approved');
        $sql = $this->db->get('case_info');

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
