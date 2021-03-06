<?php if($alert):?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="alert alert-warning alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Warning!</strong> <?php echo($alert["message"]);?>
			</div>
		</div>
	</div>
<?php endif;?>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
	<h1 class="text-center">BrewThis</h1>
	<p class="text-center">Register</p>
		<form method="post">
			<div class="form-group">
				<label>Username:</label>
				<input class="form-control" name="username" type="text">
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input class="form-control" name="email" type="text">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input class="form-control" name="password" type="password">
			</div>
			<div class="form-group">
				<button class="btn btn-success">Register</button><br/>
				<p>Have an account already? <a href="login.php">Login</a></p>
			</div>
		</form>
		<br/>
		<p>Or Register with</p>
		<?php foreach($logins as $key => $login):?>
			<a class="btn btn-primary" href="<?php echo $login["url"] ?>">
				<i class="fa fa-<?php echo($login["icon"]);?>"></i>
				<?php echo($login["name"]);?>
			</a>
		<?php endforeach;?>
	</div>
	
</div>
<code>
</code>