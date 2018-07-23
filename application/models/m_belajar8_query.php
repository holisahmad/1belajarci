<?php 

/**
 * 
 */
class M_belajar8_query extends CI_Model
{
	
	public function get(){
		$this->load->database();

		$query = $this->db->query("select*from masuk");
		return $query->result();
	}
}

 ?>