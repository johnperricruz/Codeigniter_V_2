<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class get_data extends CI_Model {

	public function base_query(){
		$sql = "";
		$result = $this->db->query($sql);	
		if($result){
			return $result->result();
		}else{
			return false;
		}
		$result->free_result();	
	}
	
}