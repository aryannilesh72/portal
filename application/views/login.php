<div class = "container">
	<div class = "col-md-4"></div>
	
	<div class = "col-md-4">
	<br><br><br>
		<div class = "login-panel panel panel-default" style = "border-radius:0px;">
			<div class = "panel-body">
				<CENTER><img src = "<?php echo base_url('images/logo.jpg');?>"></CENTER>
				<h2 class = "text-center"><b>Login</b></h2>
				<br>
				<form class = "form-signin" method="post" action="<?php echo site_url('login/verifylogin');?>">
					<?php 
		if($this->session->flashdata('message')){
			?>
			<div class="alert alert-danger">
			<?php echo $this->session->flashdata('message');?>
			</div>
		<?php	
		}
		?>	
				<div class="form-group">	 
					<label for="inputEmail">Email ID:</label> 
					<input type="email" id="inputEmail" name="email" class="form-control"required autofocus>
			</div>
			<div class="form-group">	  
					<label for="inputPassword">Password:</label>
					<input type="password" id="inputPassword" name="password" class="form-control" required >
			 </div>
			<div class="form-group">	  
					<button class="btn btn-lg btn-primary btn-block" type="submit" style = "border-radius:0px;">Login</button>
			</div>
				</form>
		<a href="<?php echo site_url('login/registration');?>">New User?</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo site_url('login/forget');?>">Forgot Password?</a>
			</div><!--End Panel Body-->

		</div><!--End Panel Default-->
	</div>
</div>