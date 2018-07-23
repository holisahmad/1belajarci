<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar1 extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		//Mengaktifkan helper - holis
		$this->load->helper('html');
		
		$this->load->model('m_data');
		
		
	}
	
	public function index()
	{
		//$this->load->view('welcome_message');
		//menampilkan data langsung dari controllers - holis
		echo "belajar ci";
	}

	public function halo() {
		//membuat fungsi halo - holis
		
		$this->load->view('coba1/v_belajar2'); 
		
	}

	public function halo2() {
		//membuat parsing data ke view - holis
		$data['title'] = "Membuat parsing data";
		$data['namaweb'] = "Waroengss.com";
		//load data dari folder view - holis
		$this->load->view('coba1/v_belajar1', $data);
	
	}

	public function user() {
		$data['title'] = "Data User Waroeng SS";
		$data['judul'] = "Mengenal Model dan Koneksi ke database";
		//mengambil data pada tabel masuk yang terdapat pada model => fungsi ambil_data() - holis
		$data['user'] = $this->m_data->ambil_data()->result();
		
		$this->load->view('v_user', $data);
		
	}

}
