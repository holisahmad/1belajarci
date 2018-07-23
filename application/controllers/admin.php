<?php 

class Admin extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }

    function index() {
     $data['title'] = "Halaman Admin";
     $data['judul'] = "Sukses masuk Halaman Admin";
     $this->load->view('v_admin', $data);
     
    }
    
}
