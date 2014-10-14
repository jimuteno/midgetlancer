<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact extends CI_Controller {

  function __construct()
  { 
    parent::__construct();
  }
/*
  function index()
  {	
	$this->load->view('header');
	$this->load->view('contact/v_contact');
	$this->load->view('footer');


  }
  */

 public function index()
	{
		$ldeet = $this->session->userdata('login_details');
			if($this->session->userdata('is_logged_in')&& $ldeet['type']=='admin')
			{
					$this->load->view('header');
					$this->load->view('contact/v_contact');
					$this->load->view('footer');
 
			}
			else
			{
				redirect(base_url().'restricted');
			}

	}
}

?>