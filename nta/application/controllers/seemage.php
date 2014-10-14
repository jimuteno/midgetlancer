<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class seemage extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {	
		$ldeet = $this->session->userdata('login_details');
			if($this->session->userdata('is_logged_in')&& $ldeet['type']=='client')
			{
  
							$this->load->view('header');
							$this->load->view('seemage/v_seemage');
							$this->load->view('footer');
						/*	$this->load->helper('form');
							$this->load->view('login');*/

							
				}
			else
			{
				redirect(base_url().'welcome');
			}				
							
							
  }
  

  

}

?>