<?php
class project_tender_model extends CI_Model
{
    public function get_head_info()
    {
        $this->db->select('*');
        $this->db->from('main_head');
        $this->db->where('headtype', 'project_tender');
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
    public function insertNewproject_tender($data)
    {
       
       
        $this->db->insert('project_tender', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'New project_tender added successfully !!');
            redirect('record-project-tender');
        }
    }

    public function show_project_tender_list()
    {
        $this->db->select('*');
        $this->db->order_by('id', 'DESC');
        $sql = $this->db->get('project_tender');
        $rec = $sql->result();
        return $rec;
    }

    public function get_project_tender_details($id)
    {
        $this->db->select('*');
        $this->db->from('project_tender');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        //print_r($query_result);
        return $result;
    }

    public function delete_project_tender($id)
    {
        $this->db->where('id', $id);
        $sqlQuery = $this->db->get('project_tender');
        $wholeData = $sqlQuery->row();
        $file_path = $wholeData->ex_file;

        unlink($file_path);

        $this->db->where('id', $id);
        $this->db->delete('project_tender');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_single_post_details($id)
    {
        $this->db->select('*');
        $this->db->from('project_tender');
        $this->db->where('id', $id);

        $sqlproject_tender = $this->db->get();
        $result = $sqlproject_tender->row();
        $data['info'] = $result;
        return $data;
    }

    //UpdateExistingproject_tender
    public function UpdateExistingproject_tender($data, $project_tender_id)
    {
        $this->db->where('id', $project_tender_id);
        $this->db->update('project_tender', $data);

        //print_r($data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'update successfully !!');
            redirect('record-project-tender');
        }
    }
    public function show_all_project_tender_list()
    {

        $this->db->order_by('id', 'DESC');
        $this->db->where('status', 'approved');
        $sql = $this->db->get('project_tender');

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
