
<div class="container">
	<div class="col-xs-2"	>
	<form method="post"action="<?php echo base_url('login/signout')?>">
	<button  type="submit" "> destroy session
			</button>
	</form>
	</div>
	<div class="col-xs-8" id="custom_main_div" style="background-color:#d3b015;">
	
		<h2 class="form-signin-heading">Company Sign-in </h2>
		 <h4 align='center'><?php
		$msg = $this->session->userdata('latest_message');
        if ($msg<>"")
            echo $msg;
         ?></h4>
   	<form class="form-signin" role="form" method="post"
		  action="<?php echo base_url('login/validate_credentials')?>">
			<input type="text" name="username" class="form-control" 
				placeholder="Username" required autofocus>
			<input type="password" name="password" class="form-control"
				 placeholder="Password" required>
				
				<button class="btn btn-lg btn-primary btn-block"
				 type="submit"> Sign in
			</button>
	</form>
	</div>
	<div class="col-xs-2"	>
	<h1>User Details</h1>
	<h3><p style="font-family:arial;color:white;">
	<?php /*
	$active = $this->session->userdata('last_activity');
	echo $active;
	?>
	<br>
	<?php 
	$sessid = $this->session->userdata('session_id');
	echo $sessid;
	?>
	<br>
	<?php 
	$sessip = $this->session->userdata('ip_address');
	echo $sessip;
	?>
	<br>
	<?php 
	$agent = $this->session->userdata('user_agent');
	echo $agent;
	 */?></p>
	</h3></div>
</div>	



