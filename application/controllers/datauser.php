<?php 
class Datauser extends CI_Controller
{
    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('user_agent');
    }

    function index() {
        if ($this->agent->is_browser()) {
            # code...
            $agent = $this->agent->browser().' '.$this->agent->version();
        }elseif ($this->agent->is_mobile()) {
            # code...
            $agent = $this->agent->mobile();
        }else {
            $agent = 'Data user gagal didapatkan';
        }

        echo "Diakses dari :<br>";
        echo "Browser = ". $agent . "<br>";
        echo "Sistem operasi = " . $this->agent->platform() ."<br>";
        echo "IP = " . $this->input->ip_address();
    }
    
}
