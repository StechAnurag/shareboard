<div class="container">
	<center>
	<div class="col-md-8">
	<div class="card text-left" style="margin-top: 5px;">
	  <h5 class="card-header">Register User</h5>
	  <div class="card-body">
	    <!-- <h5 class="card-title">Special title treatment</h5>
	    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
	    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
	    	<div class="from-group">
	    		<label>Name</label>
	    		<input type="text" name="name" placeholder="Title" class="form-control">
	    	</div>
	    	<br>
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
	    		<input type="submit" class="btn btn-primary" name="submit" value="Register">
	    	</div>
	    </form>    
	  </div>
	</div>
	</div>
	</center>
</div>