<?php
class all_register_model extends CI_Model
{
    public function get_head_info()
    {
        $this->db->select('*');
        $this->db->from('main_head');
        $this->db->where('headtype', 'register_file');
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
    public function insertNewall_register($data)
    {


        $this->db->insert('register_file', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'New all_register added successfully !!');
            redirect('view-all-registers');
        }
    }

    public function show_all_register_list()
    {
        $this->db->order_by('id', 'ASC');
        $sql = $this->db->get('register_file');
        $rec = $sql->result();
        return $rec;
    }

    public function get_all_register_details($id)
    {
        $this->db->where('id', $id);
        $sql = $this->db->get('register_file');
        $sql = $sql->row();
        return $sql;
    }

    public function delete_all_register($id)
    {
        
        $this->db->where('id', $id);
        $this->db->delete('register_file');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_single_post_details($id)
    {
        $this->db->where('id', $id);
        $sql = $this->db->get('register_file');
        $sql = $sql->row();
        return $sql;
    }
}
