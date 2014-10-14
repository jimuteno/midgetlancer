<?php 
$this->load->helper('file');
//CodeIgniter Way

//$imago_file = read_file(IMAGO_DIR.$file_name);

//echo 'Files from '.site_url('uploads').'/'.$file_name;
$filenamesarehappy = get_filenames(IMAGO_DIR);

//var_dump($filenamesarehappy);

//echo '<a href="'.site_url(IMAGO_DIR).'/'.$filenamesarehappy[7].'" target="_blank">'.$filenamesarehappy[7].'</a>';
echo 'count($filenamesarehappy)<br>';
//$lines       = explode("\n", $imago_file);
/*$lines will how an array of lines from the file.
  *Note that explode just makes a entire line of string (psion file) 
   to split via a delimiter (marker to let you know boundaries)
*/

  /*

		for loop counter++

		echo '<a href="'.site_url(IMAGO_DIR).'/'.$filenamesarehappy[$counter_var].'" target="_blank">'.$filenamesarehappy[$counter_var].'</a>';

  */
	
	$counter_var=0;
	while ($counter_var< count($filenamesarehappy))
	{
		echo '<a href="'.site_url(IMAGO_DIR).'/'.$filenamesarehappy[$counter_var].'" target="_blank">'.$filenamesarehappy[$counter_var].'</a><br>';
		$counter_var++;
	}

	
