<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// ------------------------------------------------------------------------

/*
 * Encode to JSON, AJAX 
 */

function ajax_the_results($val)
{
	if ( ! is_array($val))
		return FALSE;
	
	foreach ($val as $key => $val)
		$data[$key] = str_replace(array("\n", "\t", "\r"), '', $val);
	
	echo json_encode($data);
}


/* End of file tools_helper.php */
/* Location: ./system/helpers/tools_helper.php */