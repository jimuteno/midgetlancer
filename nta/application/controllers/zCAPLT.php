<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class zCAPLT extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {	
	$this->load->view('header');
	$this->load->view('zCAPLT/v_zCAPLT');
	$this->load->view('footer');
/*	$this->load->helper('form');
    $this->load->view('login');*/

  }
} 
?>