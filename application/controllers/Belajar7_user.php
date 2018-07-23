<?php 


class Belajar7_user extends CI_Controller
{
	
	public function index(){
		$this->load->model('m_belajar7_user');
		$this->load->model('m_belajar8_query');

		echo "<pre>";
		print_r($this->m_belajar7_user->get());	
		echo "</pre>";


		echo "<br>Menggunakan QUERY SELECT *";
		echo "<br><pre>";
		print_r($this->m_belajar8_query->get());	
		echo "</pre>";
	}
}

 ?>