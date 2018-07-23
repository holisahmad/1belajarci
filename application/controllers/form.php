<?php

class Form extends CI_Controller
{
     
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->helper('url');
        
        $this->load->library('form_validation');
        
    }

    function index() {
        
        // $data['title'] = "Form Validation";
        // $data['judul'] = "Membuat form validation";
        // $this->load->view('v_form', $data);
        
        $data['title'] = "Form Validation";
        $data['judul'] = "Membuat form validation";
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() != false) {
            # code...
            echo "Form Validation Oke";
        } else {
            # code...
            $this->load->view('v_form', $data);

        }

    }

    public function form_valid()
    {
        $data['title'] = "Form Validation Waroeng SS";
        $data['header'] = "About Form Validation Waroeng SS";
        $data['judul'] = "Halaman tentang Form Validation waroeng SS Indonesia";
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
       
        if ($this->form_validation->run() != false) {
            # code...
            
            $this->load->view('v_header', $data);
            //echo "Form Validation Oke";
            $this->load->view('v_form_sukses', $data);
            $this->load->view('v_footer', $data);
        } else {
            # code...
           // $this->load->view('v_form', $data);
            $this->load->view('v_header', $data);
            $this->load->view('v_form', $data);
            $this->load->view('v_footer', $data);

        }


    }
    // function aksi() {

    //     $data['title'] = "Form Validation";
    //     $data['judul'] = "Membuat form validation";
    //     $this->form_validation->set_rules('kode', 'Kode', 'required');
    //     $this->form_validation->set_rules('nama', 'Nama', 'required');

    //     if ($this->form_validation->run() != FALSE) {
    //         # code...
    //         echo "Form Validation Oke";
    //     } else {
    //         # code...
    //         $this->load->view('v_form', $data);
            
    //     }

    // }
    
}
