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
					<li class="active"><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
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

	<div class="jumbotron text-center">
		<h1>Organizy</h1>
		<h4>Organize Eazy<sub>(Beta)</sub></h4>
		<p>We help you organize your life.</p>
		<a class="btn btn-lg btn-danger" href="<?php echo base_url(); ?>index.php/login_controller/"><i class="fa fa-google-plus"></i> | Sign in with Google</a>
	</div>
     
     <!--content-->
	<div class="container">
		<div class="row" id="features">
				
			<div class="col-md-6">
				<img class="img-responsive img-circle center-block" src="<?php echo base_url(); ?>images/Infinity.Time1.000.jpg">
				<h3 class="text-center">Task Reminder</h3>
				<p  style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean hendrerit quis augue sit amet mollis. Mauris id turpis diam. Ut pellentesque justo dolor, nec eleifend mauris euismod vitae. Morbi diam est, ornare non felis sit amet, elementum ultricies ante. Mauris id condimentum mauris. Nunc eleifend et enim eu sagittis. In congue, sapien nec vulputate pulvinar, tellus leo porttitor nibh, at rhoncus tellus lacus ac metus. Vestibulum pharetra scelerisque est sed tincidunt. Ut congue, quam a molestie luctus, quam orci congue erat, laoreet interdum lectus justo ac urna. Vestibulum eleifend tellus sit amet urna egestas tempus. Proin ac pretium nisi. Phasellus sit amet tincidunt magna, quis tincidunt sapien. Quisque quis pretium diam, ut consectetur ligula. Sed condimentum purus viverra auctor porta. Ut in bibendum velit. Curabitur eu leo mattis, pretium sapien sed, iaculis mauris.</p>
			</div>

			<div class="col-md-6">
				<img class="img-responsive img-circle center-block" src="<?php echo base_url(); ?>images/108..VVKXpiT.jpg">
				<h3 class="text-center">Object Tracker</h3>
				<p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean hendrerit quis augue sit amet mollis. Mauris id turpis diam. Ut pellentesque justo dolor, nec eleifend mauris euismod vitae. Morbi diam est, ornare non felis sit amet, elementum ultricies ante. Mauris id condimentum mauris. Nunc eleifend et enim eu sagittis. In congue, sapien nec vulputate pulvinar, tellus leo porttitor nibh, at rhoncus tellus lacus ac metus. Vestibulum pharetra scelerisque est sed tincidunt. Ut congue, quam a molestie luctus, quam orci congue erat, laoreet interdum lectus justo ac urna. Vestibulum eleifend tellus sit amet urna egestas tempus. Proin ac pretium nisi. Phasellus sit amet tincidunt magna, quis tincidunt sapien. Quisque quis pretium diam, ut consectetur ligula. Sed condimentum purus viverra auctor porta. Ut in bibendum velit. Curabitur eu leo mattis, pretium sapien sed, iaculis mauris.</p>
			</div>

		</div><!-- /#features -->

		<div class="text-center">
			<h3>Join now and start organizing, for free!!</h3>
			<a class="btn btn-lg btn-danger" href="<?php echo base_url(); ?>index.php/login_controller/"><i class="fa fa-google-plus"></i> | Sign in with Google</a>
		</div>

	</div><!-- /.container -->