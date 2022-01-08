
<?php
class fdr_info_model extends CI_Model
{
    public function get_bank_names()
    {
        $this->db->select('*');
        $this->db->from('bank_info');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function insertNewfdr_info($data)
    {


        $this->db->insert('fdr_info', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'New fdr_info added successfully !!');
            redirect('record-fdr-info');
        }
    }

    public function show_fdr_info_list()
    {

        $this->db->select('*');
        $this->db->order_by('id', 'DESC');
        $sql = $this->db->get('fdr_info');
        $rec = $sql->result();
        return $rec;
    }

    public function get_fdr_info_details($id)
    {
        $this->db->select('*');
        $this->db->from('fdr_info');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        //print_r($query_result);
        return $result;
    }

    public function delete_fdr_info($id)
    {
        $this->db->where('id', $id);
        $sqlQuery = $this->db->get('fdr_info');
        $wholeData = $sqlQuery->row();
        $file_path = $wholeData->ex_file;

        unlink($file_path);

        $this->db->where('id', $id);
        $this->db->delete('fdr_info');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_single_post_details($id)
    {
        $this->db->select('*');
        $this->db->from('fdr_info');
        $this->db->where('id', $id);

        $sqlfdr_info = $this->db->get();
        $result = $sqlfdr_info->row();
        $data['info'] = $result;
        return $data;
    }

    //UpdateExistingfdr_info
    public function UpdateExistingfdr_info($data, $fdr_info_id)
    {
        $this->db->where('id', $fdr_info_id);
        $this->db->update('fdr_info', $data);

        print_r($data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('status', 'update successfully !!');
            redirect('record-fdr-info');
        }
    }
    public function show_all_fdr_info_list()
    {

        $this->db->order_by('id', 'DESC');
        $this->db->where('status', 'approved');
        $sql = $this->db->get('fdr_info');

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
