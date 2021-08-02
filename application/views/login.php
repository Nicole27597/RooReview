<body>
<br>
<div id="button" class="col-6 col-sm-4">
   <form>
      <input type="button" value="Go Back" onclick="history.back()">
   </form>
</div>
<div id="login" class="container">
      <div class="col-4 offset-4">
			<?php echo form_open(base_url().'login/check_login'); ?>
				<h1 class="text-center">Login</h1>       
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Email" required="required" name="email">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" required="required" name="password">
					</div>
					<div class="form-group">
					<?php echo $error; ?>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block">Log in</button>
					</div>
					<div class="clearfix">
						<label class="float-left form-check-label"><input type="checkbox" name="remember"> Remember me</label>
						<a href="#" class="float-right">Forgot Password?</a>
					</div>    
			<?php echo form_close(); ?>
	</div>
</div>
</body>

<style>
	body {
      background-color: #DCDCDC;
    }

	#button {
		font-size: 18px;
	}
</style>