<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class rdform1PLT extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {	
	$this->load->view('header');
	$this->load->view('RDForms/v_rdform1PLT');
	$this->load->view('footer');
/*	$this->load->helper('form');
    $this->load->view('login');*/

  }
} 
?>