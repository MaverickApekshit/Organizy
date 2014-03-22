
<div class="jumbotron jumbotron-sm">
	<div class="container">
		<h1>Error!</h1>
	</div>
</div>

<?php
	
	if($title == 'not_logged_in')

		echo '<div class="container alert alert-danger">
				<strong><span class="glyphicon glyphicon-warning-sign"></span> The user has not logged in.</strong>
			</div>';

	elseif ($title == 'please_login')
	{
		echo '<div class="container alert alert-danger">
				<strong><span class="glyphicon glyphicon-warning-sign"></span> Please login to continue.</strong>
			</div>';
	}

?>