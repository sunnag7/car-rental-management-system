<!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

	    <title>Car Rental Management System | Home</title>

	    <!-- Bootstrap core CSS -->
	    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
	    <link href="<?php echo base_url(); ?>public/css/custom.css" rel="stylesheet">
  	</head>

	  <body>

	    <!-- Fixed navbar -->
		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
			    <div class="navbar-header">
			       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			          	<span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
			        <!-- <a class="navbar-brand" href="">Project name</a> -->
			    </div>  
								
			    <div class="collapse navbar-collapse">
			    	<ul class="nav navbar-nav">
						
						<li><a href="<?php echo base_url();?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
						
						<?php 
							$session = $this->session->userdata("loggedIn");
			    			if($session) {
			    				echo "<li><a href='" . base_url() . "profile'><i class='glyphicon glyphicon-user'></i> Dashboard</a></li>"; 
			    			}
						?>
						
											
						<li><a href="#"><i class="glyphicon glyphicon-picture"></i> Gallery</a></li>
					
					</ul>
			    	<ul class="nav navbar-nav navbar-right">
			    		<?php 
			    			$username = $this->session->userdata("username");
				    		if($session) {
				    			echo "
					    		<li class='dropdown'>
					    			<a href='#'' class='dropdown-toggle' data-toggle='dropdown'>". $username ." <b class='caret'></b></a>
					    			<ul class='dropdown-menu'>
		               				<li><a href='" . base_url() . "'><span class='glyphicon glyphicon-home'></span> Home</a></li>
		               				<li><a href='" . base_url() . "profile'><span class='glyphicon glyphicon-user'></span> Dashboard</a></li>
		                			<li><a href='" . base_url() . "profile/settings'><span class='glyphicon glyphicon-cog'></span> Settings</a></li>
		                			<li class='divider'></li>
		                			<li><a href='" . base_url() . "home/logout'><span class='glyphicon glyphicon-off'></span> Logout</a></li>
		              				</ul>
					    		</li>";

				    		} else {
				    			echo "<a href=' " . base_url() . "login' class='btn btn-primary btn-success navbar-btn navbar-right'>Sign in</a>";
				    		}
			    		?>
			    	</ul>
			    	
			    </div><!--/.nav-collapse -->

			</div>
		</div>	

    	<!-- Container -->
		<div class="container">