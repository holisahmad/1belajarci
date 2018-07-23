<?php 

/**
 * 
 */
class Belajar10_limitquery extends CI_Controller
{
	
public function index(){
		$this->load->model('m_belajar10_limitquery');
		echo "Menggunakan limit<br>";
		echo "<pre>";
		print_r($this->m_belajar10_limitquery->get());	
		echo "</pre>";
	}
}

 ?>