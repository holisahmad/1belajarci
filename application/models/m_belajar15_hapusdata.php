<?php 

/**
 * 
 */
class M_belajar15_hapusdata extends CI_Model
{
	
	public function hapus($kode){
		$this->load->database();
		$this->db->where('kode', $kode);
		return $this->db->delete("masuk");

	}
}

 ?>