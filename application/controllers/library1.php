<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

echo "<title>Belajar library</title>";

class Library1 extends CI_Controller
{
    function index() {
    $this->load->library('l_belajar1');
    
    $this->l_belajar1->nama_saya();
    echo "<br>";
    $this->l_belajar1->nama_kamu("Nuraini");
    
    }
}

