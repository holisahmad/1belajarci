<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_data');
	}
	
	public function index()
	{
		$data['title'] = "Membuat Pagination";
		$data['judul'] = "Membuat Pagination Pada CodeIgniter";
		$this->load->database();
		$jml_data = $this->m_data->jml_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'welcome/index/';
		$config['total_rows'] = $jml_data;
		$config['per_page'] = 5;

		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);
		$data['user'] = $this->m_data->data($config['per_page'], $from);
		$this->load->view('v_data', $data);
		//$this->load->view('welcome_message');
	}
}
