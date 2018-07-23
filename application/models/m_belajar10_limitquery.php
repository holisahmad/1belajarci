<?php 

/**
 * 
 */
class M_belajar10_limitquery extends CI_Model
{
	
	public function get(){
		$this->load->database();
		$this->db->select("*");
		$this->db->limit(1,0);
		$query = $this->db->get('masuk');
		return $query->result();

	}
}

 ?>