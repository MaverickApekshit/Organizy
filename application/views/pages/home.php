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
					<a class="navbar-brand" href="#">Organizy<sub>(Beta)</sub></a>
				</div>

				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="#features"><span class="glyphicon glyphicon-star"></span> Features</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-user"></span> About Us</a></li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<span class="glyphicon glyphicon-log-in"></span> Sign in
							</a>
							<ul class="dropdown-menu">
								<li><a class="btn btn-success btn-lg" href="#">Login with Gmail</a></li>
								<li class="divider"></li>
								<li><a class="btn btn-primary btn-lg" href="#">Login with Facebook</a></li>
							</ul>
						</li>

					</ul>

				</div><!-- /.navbar-collapse -->

			</div><!-- /.container -->
		</nav>
    
		<div id="wrap" class="jumbotron text-center">
			<h1>Organizy</h1>
			<h4>Organize Eazy<sub>(Beta)</sub></h4>
			<p>We help you organize your life.</p>
			<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Its free, Sign in</button>
			<a class="btn btn-primary btn-lg" href="#features">Learn more</a>
		</div>

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div ="row">
				<div class="col-sm-6 col-sm-offset-3 text-center screen_center">
					<a class="btn btn-success btn-lg" href="#">Login with Gmail</a><hr>
					<a class="btn btn-block btn-social btn-facebook" href="#"><i class="fa fa-facebook"></i>Login with Facebook</a>
				</div>
			</div>
		</div>    
     
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

			<div id="wrap" class="col-md-12 text-center">
				<h3>Join now and start organizing, for free!!</h3>
				<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Sign in</button>
			</div>

		</div><!-- /.container -->
<!-- </body> in \views\templates\footer.php-->