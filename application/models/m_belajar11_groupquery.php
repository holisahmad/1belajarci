<?php 

/**
 * 
 */
class M_belajar11_groupquery extends CI_Model
{
	
	public function get(){
		$this->load->database();
		$this->db->select("*");
		$this->db->group_by("nama");
		$query = $this->db->get('masuk');
		return $query->result();

	}
}

 ?>