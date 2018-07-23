<?php 

/**
 * 
 */
class M_belajar7_user extends CI_Model
{
	
	public function get(){
		$this->load->database();
		$this->db->select("*");
		$query = $this->db->get('masuk');
		return $query->result();
	}
}

 ?>