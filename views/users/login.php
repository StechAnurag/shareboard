<div class="container">
	<center>
	<div class="col-md-8">
	<div class="card text-left" style="margin-top: 5px;">
	  <h5 class="card-header">User Login</h5>
	  <div class="card-body">
	    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
	    	<div class="from-group">
	    		<label>Email</label>
	    		<input type="text" name="email" placeholder="Email" class="form-control">
	    	</div>
	    	<br>
	    	<div class="from-group">
	    		<label>Password</label>
	    		<input type="password" name="password" placeholder="password" class="form-control">
	    	</div>
	    	<br>
	    	<div class="from-group" style="margin-top: 10px;">
	    		<input type="submit" class="btn btn-primary" name="submit" value="Login">
	    	</div>
	    </form>    
	  </div>
	</div>
	</div>
	</center>
</div>