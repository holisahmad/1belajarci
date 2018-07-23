<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->helper(array('url', 'download'));
        
    }

    public function index()
    {
        //$this->load->view('v_download');
        $data['title'] = "Form Download";
        $data['judul'] = "Form download file/gambar";

        $this->load->view('v_download', $data);
        
    }
    
    public function di_download() 
    {
        force_download('gambar/kalkulasi.png',NULL);
        
    }

}