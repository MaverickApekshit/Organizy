<body>

	<!--navigation bar-->
	<nav class="navbar-wrapper navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
				
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url(); ?>">Organizy<sub>(Beta)</sub></a>
			</div>

			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="<?php echo base_url(); ?>#features"><span class="glyphicon glyphicon-star"></span> Features</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
					<li><a href="<?php echo base_url(); ?>index.php/contact_us"><span class="glyphicon glyphicon-comment"></span> Contact Us</a></li>
				</ul>
					
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a id="sign_in" href="<?php echo base_url(); ?>index.php/login_controller/"><i class="fa fa-google-plus"></i> | Sign in with Google</a>
					</li>

				</ul>

			</div><!-- /.navbar-collapse -->

		</div><!-- /.container -->
	</nav>