<?php 

/**
 * 
 */
class M_belajar14_ubahdata extends CI_Model
{
	
	public function ubah($data = array(), $kode){
		$this->load->database();
		$this->db->where('kode', $kode);
		return $this->db->update("masuk", $data);

	}
}

 ?>