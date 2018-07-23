<?php 

/**
 * 
 */
class Belajar11_groupquery extends CI_Controller
{
	
public function index(){
		$this->load->model('m_belajar11_groupquery');
		echo "Menggunakan limit<br>";
		echo "<pre>";
		print_r($this->m_belajar11_groupquery->get());	
		echo "</pre>";
	}
}

 ?>