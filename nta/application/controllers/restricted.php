<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class restricted extends CI_Controller {

  function __construct()
  { 
    parent::__construct();
  }

  function index()
  {	
	$this->load->view('header');
	$this->load->view('restricted/v_restricted');
	$this->load->view('footer');


  }
  

 
}

?>