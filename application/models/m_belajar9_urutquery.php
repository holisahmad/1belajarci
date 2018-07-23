<?php 

/**
 * 
 */
class M_belajar9_urutquery extends CI_Model
{
	
	public function get(){
		$this->load->database();
		$this->db->select("*");
		$this->db->order_by('nama', 'desc');
		$query = $this->db->get('masuk');
		return $query->result();

	}
}

 ?>