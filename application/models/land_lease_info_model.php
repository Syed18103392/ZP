<?php
class land_lease_info_model extends CI_Model
{
    public function get_head_info()
    {
        $this->db->select('*');
        $this->db->from('main_head');
        $this->db->where('headtype', 'land_lease_info');
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
    public function insertNewland_lease_info($data)
    {

        $this->db->insert('land_lease_info', $data['A_data']);
       // $this->db->insert_batch('landlease_rent_cal', $data['A2_data']);
        //$this->db->insert('land_lease_info', $data['A2_data']);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'New land_lease_info added successfully !!');
            redirect('record-land-lease');
        }
    }

    public function show_land_lease_info_list()
    {
        $this->db->select('*');
        $this->db->order_by('id', 'DESC');
        $sql = $this->db->get('land_lease_info');
        $rec = $sql->result();
        return $rec;
    }

    public function get_land_lease_info_details($id)
    {
        $this->db->select('*');
        $this->db->from('land_lease_info');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $resultA = $query_result->row();
        $leaseId = $resultA->lease_id;
        $this->db->where('land_lease_info', $leaseId);
        $resultB=$this->db->get('landlease_rent_cal');
//        $resultB=$resultB->row();
        $result['land_lease_info']=$resultA;
        $result['landlease_rent_cal']=$resultB;

        return $result;
    }

    public function delete_land_lease_info($id)
    {
        $this->db->where('id', $id);
        $sqlQuery = $this->db->get('land_lease_info');
        $wholeData = $sqlQuery->row();
        $file_path = $wholeData->ex_file;

        unlink($file_path);

        $this->db->where('id', $id);
        $this->db->delete('land_lease_info');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_single_post_details($id)
    {
        $this->db->select('*');
        $this->db->from('land_lease_info');
        $this->db->where('id', $id);

        $sqlland_lease_info = $this->db->get();
        $result = $sqlland_lease_info->row();
        $data['info'] = $result;
        return $data;
    }

    //UpdateExistingland_lease_info
    public function UpdateExistingland_lease_info($data, $land_lease_info_id)
    {
        $this->db->where('id', $land_lease_info_id);
        $this->db->update('land_lease_info', $data);

        print_r($data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'update successfully !!');
            redirect('record-land-lease-info');
        }
    }
    public function show_all_land_lease_info_list()
    {

        $this->db->order_by('id', 'DESC');
        $this->db->where('status', 'approved');
        $sql = $this->db->get('land_lease_info');

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
