<?php 

/**
 * 
 */
class Belajar12_wherequery extends CI_Controller
{
	
public function index(){
		$this->load->model('m_belajar12_wherequery');
		echo "Menggunakan WHERE<br>";
		echo "<pre>";
		print_r($this->m_belajar12_wherequery->get());	
		echo "</pre>";
	}
}

 ?>