<?php

class Users extends CI_Model {

	function validate_user()
	{
		$this->db->where('userName', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('account');
		
		if($query->num_rows == 1)
		{
			foreach($query->result() as $row)
				{
				$data['username']   = $row->userName;
				$data['login_type'] = "Normal";
				$data['type']		= $row->type;
				$data['is_logged_in'] = true;
				//return true;
				}
			return $data;
			//return 
		}
		else
		{
			return false;
		}
	}
	
}