<?php
class insert_ctrl extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->model('insert_model');
}
function index()
{
// Including Validation Library
$this->load->library('form_validation');
$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
// Validating Name Field
$this->form_validation->set_rules('dname', 'Username', 'required|min_length[5]|max_length[15]');
// Validating Email Field
$this->form_validation->set_rules('demail', 'Email', 'required|valid_email');
// Validating Mobile no. Field
$this->form_validation->set_rules('dmobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');
// Validating Address Field
$this->form_validation->set_rules('daddress', 'Address', 'required|min_length[10]|max_length[50]');
if ($this->form_validation->run() == FALSE)
{
$this->load->view('Atester/insert_view');
}
else
{
// Setting Values For Tabel Columns
$data = array(
'Student_Name' => $this->input->post('dname'),
'Student_Email' => $this->input->post('demail'),
'Student_Mobile' => $this->input->post('dmobile'),
'Student_Address' => $this->input->post('daddress')
);
// Transfering Data To Model
$this->insert_model->form_insert($data);
// Loading View
$this->load->view('Atester/insert_view');
}
}
}
?>