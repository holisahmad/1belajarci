<?php 
/**
 * 
 */
class Belajar4_session extends CI_Controller
{

	public function index(){
		$this->load->library('session');
		$this->session->set_userdata("nama", "Ahmad Holis");

		echo 'Nama Anda : ' . $this->session->userdata("nama");
		echo '<br>Session di hapus <br>';

		$this->session->unset_userdata("nama");
		echo 'Nama Anda : ' . $this->session->userdata("nama");
	}
}

?>