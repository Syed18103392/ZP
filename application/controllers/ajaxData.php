<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ajaxData extends CI_Controller
{ 
   public function getMainHead(){

		$main_head = $this->input->post('main_head'); # add this
		$this->db->select('*');
		$this->db->where('main_head',$main_head);
		$result=$this->db->from('sub_head')->get()->result();
		if($result){
			echo '<option value=""> খাত নির্বাচন করুন </option>';
			foreach($result as $value):
			echo '<option value="'.$value->id.'">'.$value->sub_head.'</option>';
			endforeach;
		}
	}
}