<?php
class user_model extends CI_Model
{

    public function insertNewuser($data)
    {
        $this->db->insert('user_info', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'User Information Add Successfully');
            redirect('view-users');
        }
    }

    public function show_user_list()
    {
        $this->db->order_by('id', 'ASC');
        $sql = $this->db->get('user_info');
        $rec = $sql->result();
        return $rec;
    }

    public function get_user_details($id)
    {
        $this->db->where('id', $id);
        $sql = $this->db->get('user_info');
        $sql = $sql->row();
        return $sql;
    }

    public function update_user($uid,$data){
        $this->db->where('id', $uid);
        $this->db->update('user_info', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'User Information Update Successfully');
            redirect('view-users');
        }
    }

    public function approve_user($id,$data){
        $this->db->where('id', $id);
        $this->db->update('user_info', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'Status Update Successfully Completed');
            redirect('view-users');
        }	
    }
    public function decline_user($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('user_info', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'Status Update Successfully Completed');
            redirect('view-users');
        }
    }

    public function delete_user($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_info');
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'Information Delete Successfully');
            redirect('view-users');
        }
    }

}
