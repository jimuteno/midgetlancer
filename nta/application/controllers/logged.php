<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class logged extends CI_Controller {

 //var $dataarray = array()
  function __construct()
  {
    parent::__construct();
  }

  function index()
  {	

/*	$this->load->helper('form');
    $this->load->view('login');*/
	//how will i know who is the user?
	
	$dataarray['active'] = $this->session->userdata('last_activity');
	
	$dataarray['sessid'] = $this->session->userdata('session_id');
	
	$dataarray['sessip'] = $this->session->userdata('ip_address');

	$dataarray['agent'] = $this->session->userdata('user_agent');
	// y not work?!!?!
/*	$datarray['username'] = $this->session->userdata('username');
	
	$datarray['user'] = $this->session->userdata('userid');
*/	
	$this->load->view('header');
	$this->load->view('logged/v_logged',$dataarray);
	$this->load->view('footer');
	
	

  }
  function signout()
  {
  $this->session->unset_userdata('session_id');
	$this->session->unset_userdata('ip_address');
	$this->session->unset_userdata('user_agent');
	$this->session->unset_userdata('last_activity');
	$this->session->sess_destroy();
	redirect(base_url().'login', 'refresh' );  // <!-- note that
	//you should specify the controller(/method) name here
  }
  
  }
  

?>