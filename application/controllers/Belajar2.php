<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar2 extends CI_Controller {

	public function index(){
		$this->load->helper('html');
		$this->load->model("m_belajar2");

		echo heading("Selamat datang !", 1);
		echo ul(array(
			'data pertama',
			'data kedua',
			'data ketiga'
		));

		echo ol(array(
			'data pertama',
			'data kedua',
			'data ketiga'
		));

		$dataArr = $this->m_belajar2->getData();

		// echo "Nama : " . $dataArr["nama"] . '<br>';
		// echo "Status : " . $dataArr["status"] . '<br>';
		// echo " Website : " . $dataArr["website"] . '<br>';

		//$this->load->view('v_belajar2');


		$this->load->view('v_belajar2', array('data' => $dataArr));

	}


}

?>