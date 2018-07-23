<?php 

/**
 * 
 */
class M_belajar12_wherequery extends CI_Model
{
	
	public function get(){
		$this->load->database();
		$this->db->select("*");
		$this->db->where("nama", "Ahmad");
		$query = $this->db->get('masuk');
		return $query->result();

	}
}

 ?>