<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tracking extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {	
	$this->load->view('header');
	$this->load->view('tracking/v_tracking');
	$this->load->view('footer');
/*	$this->load->helper('form');
    $this->load->view('login');*/

  }
  

  function validate_credentials()
  {
    $this->load->model('Users');
    $loginCheck = $this->Users->validate_user();

  	if ($loginCheck)	
    {
      $this->session->set_userdata('latest_message',"Login successful!");
      $this->session->set_userdata( array(
                            'userid'       => $this->input->post('username'),
                            'login_type'   => "Normal"
                          ));
      $this->load->view('login_success');
    }
  	else
    {
      $this->session->set_userdata('latest_message',"Login not successful. Try again.");
  	 redirect('/login', 'refresh');
    }
  }

}

?>