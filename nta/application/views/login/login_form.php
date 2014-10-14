	<div id="loginForm">
	<?php 
        $msg = $this->session->userdata('latest_message');
        if ($msg<>"")
            echo $msg;
        echo form_open('login/validate_credentials'); 
    ?>
		Username:
        <input type="text" name="username" id="username" />
        <br>
        Password:
        <input type="password" name="password" id="password" />
        <br>
       <input type="submit" id="login" value="Sign in" />
	    
	</div>