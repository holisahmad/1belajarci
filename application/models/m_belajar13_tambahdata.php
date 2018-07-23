<?php 

/**
 * 
 */
class M_belajar13_tambahdata extends CI_Model
{
	
	public function tambah($data = array()){
		$this->load->database();

		return $this->db->insert("masuk", $data);

	}
}

 ?>