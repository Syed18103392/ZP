<?php
class management_model extends CI_Model
{
    public function get_head_info()
    {
        $this->db->select('*');
        $this->db->from('main_head');
        $this->db->where('headtype', 'management');
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
    public function insertNewmanagement($data)
    {


        $this->db->insert('management', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'New management added successfully !!');
            redirect('record-project-tender');
        }
    }

    public function show_management_list()
    {
        $this->db->select('*');
        $this->db->order_by('id', 'DESC');
        $sql = $this->db->get('management');
        $rec = $sql->result();
        return $rec;
    }

    public function get_management_details($id)
    {
        $this->db->where('id', $id);
        $sql = $this->db->get('management');
        $sql = $sql->row();

        $results['management']=$sql;
        $this->db->where('management_id', $id);
        $query = $this->db->get('management_country_tour');
        $results['management_country_tour'] = $query;
        return $results;
    }

    public function delete_management($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('management');

        $this->db->where('management_id', $id);
        $this->db->delete('management_country_tour');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_single_post_details($id)
    {
        $this->db->where('id', $id);
        $sql = $this->db->get('management');
        $sql = $sql->row();
        $data['management']= $sql;

        $this->db->where('management_id', $id);
        $sqlQ2 = $this->db->get('management_country_tour');
        $data['management_country_tour']= $sqlQ2;
        return $data;
    }
    
}
