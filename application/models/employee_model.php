<?php
class employee_model extends CI_Model
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
    public function insertNewemployee($data)
    {


        $this->db->insert('register_file', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'New employee added successfully !!');
            redirect('view-all-registers');
        }
    }

    public function show_employee_list()
    {
        $this->db->order_by('id', 'ASC');
        $sql = $this->db->get('personal_information');
        $rec = $sql->result();
        return $rec;
    }

    public function get_employee_details($id)
    {
        $this->db->where('id', $id);
        $sql = $this->db->get('personal_information');
        $sql = $sql->row();
        return $sql;
    }

    public function delete_employee($id)
    {
        $this->db->where('person_id', $id);
        $this->db->delete('personal_information');

        $this->db->where('person_id', $id);
        $this->db->delete('person_edu');

        $this->db->where('person_id', $id);
        $this->db->delete('person_job');

        $this->db->where('person_id', $id);
        $this->db->delete('person_tranning');

        $this->db->where('person_id', $id);
        $this->db->delete('person_leave');

        $this->db->where('person_id', $id);
        $this->db->delete('person_pomoson');

        $this->db->where('person_id', $id);
        $this->db->delete('person_crime');


        $this->db->where('person_id', $id);
        $this->db->delete('person_posting');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_single_post_details($id)
    {
        $this->db->where('id', $id);
        $sql = $this->db->get('personal_information');
        $sql = $sql->row();
        return $sql;
    }
}
