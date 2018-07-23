<?php 

/**
 * 
 */
class Belajar14_ubahdata extends CI_Controller
{
	
public function index(){
		$this->load->model('m_belajar14_ubahdata');
		$ubah = $this->m_belajar14_ubahdata->ubah(array(
			'nama' => 'Wahyu Nur Syiar Samudro'
		),'AH001');

		if ($ubah){
			echo "Data berhasil perbaharui";
		}
	}
}

 ?>