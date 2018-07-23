<?php 

/**
 * 
 */
class Belajar13_tambahdata extends CI_Controller
{
	
public function index(){
		$this->load->model('m_belajar13_tambahdata');
		$tambah = $this->m_belajar13_tambahdata->tambah(array(
			'kode' => 'AH001',
			'nama' => 'Wahyu NS'
		));

		if ($tambah){
			echo "Data berhasil ditambahkan";
		}
	}
}

 ?>