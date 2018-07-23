<?php 

class Belajar6_uri extends CI_Controller
{
	
	public function data($parameter){
		echo "<title>Belajara URI</title>";
		echo "Class : " . $this->router->fetch_class();
		echo "<br>Fungsi : " . $this->router->fetch_method();
		echo "<br>Parameter : " . $parameter;
	}
}
 ?>