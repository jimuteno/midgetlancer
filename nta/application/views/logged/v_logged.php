<h1 style="color:white;"><?php
echo "CONGRATULATIONS! <br>LOGIN SUCCESSFUL!!!!!";
?></h1>

<h2>

<?php 
	$log = $this->session->userdata( 'logged_in');
	echo $log;
	?>

</h2>
<form method="post"action="<?php echo base_url('login/signout')?>">
	<button  type="submit" "> signout(destroy session) 
			</button>
			
</form>

<form method="post"action="<?php echo base_url('logged')?>">
	<button  type="submit" "> display session
<p style="font-family:arial;color:black;">displays here
	<br>
	<?php 
	
	echo $active;
	?>
	<br>
	<?php 
	
	echo $sessid;
	?>
	<br>
	<?php 
	
	echo $sessip;
	?>
	<br>
	<?php 
	
	echo $agent;
	?>
	<br>
	<?php 
	
	//echo $userid;
	echo $userid;
	?>
	<br>
	<?php 
	
	//echo $login_type;
	echo $username;
	?> 
	
	<?php
		$tables = $this->db->list_tables();

			foreach ($tables as $table)
				{
				   echo $table;
				}

		if ($this->db->table_exists('account'))
				{
				  echo yesh;
				}

		$query = $this->db->get('account');

		foreach ($query->result() as $row)
			{
  				  echo $row->userName;
  				  echo "<br>";
			}
	?>
	
	</p>
		</button>
	</form>