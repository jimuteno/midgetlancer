<html>
<head>
<link href="<?php base_url()?>static/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php base_url()?>static/css/custom.css" rel="stylesheet" type="text/css">
<link href="<?php base_url()?>static/css/bootstrap.css" rel="stylesheet" type="text/css">
<script src="<?php base_url()?>static/js/jquery-2.1.1.min.js" type="text/javascript"></script> 
<script src="<?php base_url()?>static/js/bootstrap.js" type="text/javascript"></script>

</head>

<body background="<?php base_url()?>static/img/SAM_1112.jpg">

	<div class = "navbar navbar-inverse navbar-static-top"  >
		<div class = "container">
			
			<a href ="<?php base_url()?>welcome/showmeadragon" class = "navbar-brand" style="height: 60px; padding: 10 0 0 0">
			<img src="<?php base_url()?>static/img/NTA_clear.png" alt="NTA" height="42" width="42">
				<?php 
					$test = "NTA-LIS";
				?> 
				
				<?php 
				echo $test 
				?>
				
			</a>
			
			<button class = "navbar-toggle" data-toggle = "collapse" data-target=".navHeaderCollapse">
				<span class = "icon-bar"></span>
				<span class = "glyphicon glyphicon-chevron-down"> </span>
				<span class = "icon-bar"></span>
				
				
			</button>
				
			<div class= "collapse navbar-collapse navHeaderCollapse">

					<ul class = "nav navbar-nav navbar-right">
						
						<li>						<a href= "<?php base_url()?>welcome">Home</a>				</li>
						<li>						<a href= "<?php base_url()?>Login">Login</a>					</li>
						<li>						<a href= "<?php base_url()?>apps">Applications</a>			</li>
						<li> 					<a href= "<?php base_url()?>tracking"> Tracking</a>			</li>
						<li> 					<a href= "<?php base_url()?>About"> About Us</a>									</li>
						<li> 					<a href= "<?php base_url()?>Contact"> Contact Us</a>								</li>
					</ul>
			</div>
			
		</div>
	</div>
