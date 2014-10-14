<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class zAIMT extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {	
	$this->load->view('header');
	$this->load->view('zAIMT/v_zAIMT');
	$this->load->view('footer');
/*	$this->load->helper('form');
    $this->load->view('login');*/

  }
} 
?>