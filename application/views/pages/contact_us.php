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
					<li class="active"><a href="#"><span class="glyphicon glyphicon-comment"></span> Contact Us</a></li>
				</ul>
					
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a id="sign_in" href="#"><i class="fa fa-google-plus"></i> | Sign in with Google</a>
					</li>

				</ul>

			</div><!-- /.navbar-collapse -->

		</div><!-- /.container -->
	</nav>

	<div class="jumbotron jumbotron-sm">
		<div class="container">
			<h1>Contact us</h1>
			<h4>Feel free to contact us</h4>
		</div>
	</div>

	<!--contact us form-->
	<div class="container">
		<div class="well well-sm">

			<?php echo validation_errors(); ?><!--display validation errors-->

			<?php echo form_open('contact_us_controller') ?>
			<!--form method="post" action="<?php echo base_url(); ?>index.php/contact_us_controller/"-->
				<div class="row">
				
					<div class="col-md-6">
					
						<div class="form-group">
							<label for="name">Name</label>
							<input name="name" type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
						</div>

						<div class="form-group">
							<label for="email">Email Address</label>
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
								<input name="email" type="email" class="form-control" id="email" placeholder="Enter email" required="required" />
							</div>
						</div>

						<div class="form-group">
							<label for="subject">Subject</label>
							<input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="required" />
						</div>

					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Message</label>
							<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
						</div>
					</div>

					<div class="col-md-12">
						<button type="submit" class="btn btn-primary pull-right" id="btnContactUs">Send Message</button>
					</div>
				</div> <!--/.row-->
			</form>
		</div> <!--/.well-->
	</div> <!--/.container-->