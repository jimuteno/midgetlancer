<?php

class Model_role extends CI_Model {
// dont get this quite yet
 public function scalar($username,$type){

$this->db->where('username',$this->input->post('username'));
$this->db->select($type); #Because I need the value
//$this->db->field_data($role);
// $this->db->where($where); #Because I need the variable column entitled siteoverview
$query = $this->db->get($username); #From the settings table
$row = $query->row_array(); // get the row
return $row['type']; // return the value
} 
}

?>