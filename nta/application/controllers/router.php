<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Router extends CI_Controller {

	/**
	 * This should handle most (static) link parts.
	 */
	public function index()
	{
		$this->load->view('mainpagetemp');
	}
	
	public function placeholder1()
	{
		$this->load->view('Content1');
	
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */