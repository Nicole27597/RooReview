<body>
<br>
<div id="button" class="col-6 col-sm-4">
   <form>
      <input type="button" value="Go Back" onclick="history.back()">
   </form>
</div>
<div id="signup" class="container">
      <div class="col-4 offset-4">
			<?php echo form_open(base_url().'user/signup'); ?>
				<h1 class="text-center">Sign Up!</h1>  
                    <div class="form-group">
						<input type="text" name="name" placeholder="Name" value="<?php echo set_value('name'); ?>" class="form-control">
					</div>     
					<div class="form-group">
						<input type="text" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>"  class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>"  class="form-control">
					</div>
                    <div class="form-group">
						<input type="text" name="passconf" placeholder="Confirm Password" value="<?php echo set_value('passconf'); ?>"  class="form-control">
					</div>
					<div class="form-group">
					
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block">Sign Up</button>
					</div>
					<div class="clearfix">
						<a href="login" class="float-right">Login</a>
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