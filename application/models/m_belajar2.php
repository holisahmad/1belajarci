<?php 

class M_belajar2 extends CI_Model
{
	
	function __construct()
	{
		# code...
	}

	public function getData(){
		$data = array(
			'nama' => 'Ahmad Holis',
			'status' => 'Karyawan Swasta',
			'website' => 'http://komplainwss.com'
		);
		return $data;
	}
}
?>