<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->helper('url');
        
    }
//halaman utama - holis
    public function index() {
        $data['judul'] = "Halaman depan";
        $data['title'] = "Halaman index";
        $data['header'] = "Waroeng SS Indonesia";
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);

            
    }
//halaman about -holis
    public function about() {
        $data['title'] = "Tentang Waroeng SS";
        $data['header'] = "About Waroeng SS";
        $data['judul'] = "Halaman tentang waroeng SS Indonesia";
        $this->load->view('v_header', $data);
        $this->load->view('v_about', $data);
        $this->load->view('v_footer', $data);

    }

    
}
