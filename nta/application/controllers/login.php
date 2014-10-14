<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('Users');
    $this->load->model('model_role');
  }

  function index()
  {	
	$this->load->view('header');
	$this->load->view('login/v_login');
	$this->load->view('footer');
/*	$this->load->helper('form');
    $this->load->view('login');*/

  }
  

  public function validate_credentials()
  {    
     $loginCheck = $this->Users->validate_user();

  	if (! $loginCheck)	
    {
      $this->session->set_userdata('latest_message',"Login Failed! Try again.");
  	  redirect(base_url().'login', 'refresh');
  	  $this->session->set_userdata('logged_in', FALSE);
    }
  	else
    {    	
//     $this->session->set_userdata('latest_message',"Login successful!");
  //    var_dump($loginCheck);
		$this->session->set_userdata('login_details',$loginCheck);
        $this->session->set_userdata('is_logged_in',true);
     //$this->session->set_userdata('latest_message',"Login Successful! <br>Sign in again?");
  	  redirect(base_url().'logged', 'refresh');
  	  
	  
    }
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