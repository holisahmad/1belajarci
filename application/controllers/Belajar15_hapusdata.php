<?php 

/**
 * 
 */
class Belajar15_hapusdata extends CI_Controller
{
	
public function index(){
		$this->load->model('m_belajar15_hapusdata');
		$hapus = $this->m_belajar15_hapusdata->hapus('AH001');

		if ($hapus){
			echo "Data berhasil dihapus";
		}
	}
}

 ?>