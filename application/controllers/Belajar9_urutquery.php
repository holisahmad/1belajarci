<?php 

/**
 * 
 */
class Belajar9_urutquery extends CI_Controller
{
	
public function index(){
		$this->load->model('m_belajar9_urutquery');

		echo "<pre>";
		print_r($this->m_belajar9_urutquery->get());	
		echo "</pre>";
	}
}

 ?>