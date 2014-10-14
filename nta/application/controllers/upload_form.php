<?php

class Upload_form extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
	}

	function index()
	{
		$this->load->view('header');
		$this->load->view('upload_form/v_upload_form', array('error' => ' ' ));
		$this->load->view('footer');
	}

	function do_upload()
	{
		//$custom_folder = ""
		//$myfilename = "waksa"; //definite 
		/*if (comdingtion) 
		     $myfile = Cond1;
		  else
		  	$myfile = whatever;*/
		// error here $config['overwrite'] = false;
		$config['upload_path'] = './uploads'/*/.$custom_folder*/;
		$config['file_name'] = "shizzle";
		$config['allowed_types'] = 'jpg';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			//$this->load->view('header');
			//redirect page?

			//redirect(base_url().'place in here fail controller');
			$this->load->view('upload_form/v_upload_form', $error);
			//$this->load->view('footer');
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			//$this->load->view('header');
			redirect(base_url().'upload_success',$data);
			//$this->load->view('upload_form/v_upload_success', $data);
			//$this->load->view(base_url().'footer');
		}
	}
}
?>