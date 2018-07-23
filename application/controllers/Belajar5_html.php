<?php 

class Belajar5_html extends CI_Controller
{
	
	public function index(){
		$this->load->library('table');
		$template = array(
			"table_open" => "<table border='1' cellpadding='2'>"
		);

		echo "<title>Table HTML</title>";
		$this->table->set_template($template);
		$this->table->set_caption("<h1>Menampikan table dengan HTML table class</h1>");
		$data = array(
			array('Nama', 'Email', 'Jenis Kelamin'),
			array('Ahmad', 'Ahmad@gmail.com', 'Laki-laki'),
			array('Holis', 'Holis@gmail.com', 'Laki-laki'),
			array('Ahmad Holis', 'ahmadholis@gmail.com', 'Laki-laki')
		);
		echo $this->table->generate($data);
	}
}
 ?>