<?php

class Belajar3_upload extends CI_Controller {

	public function index(){
		$error = "";
		$data = "";

		if ($this->input->method() == "post") {

			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('uploads')){
				// $error = array('error' => $this->upload->display_errors());
				$error = $this->upload->display_errors();
			}
			else{
				$data = $this->upload->data();
				// $data = array('upload_data' => $this->upload->data());
				//echo "success";
			}
			
		}
		$this->load->view('v_belajar3_upload', array(
			'error' => $error,
			'data' => $data
		));
	}
}
?>