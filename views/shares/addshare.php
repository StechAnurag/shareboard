<div class="card" style="margin-top: 5px;">
  <h5 class="card-header">Share Something</h5>
  <div class="card-body">
    <!-- <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="from-group">
    		<label>Share Title</label>
    		<input type="text" name="title" placeholder="Title" class="form-control">
    	</div>
    	<div class="from-group">
    		<label>Body</label>
    		<textarea name="body" placeholder="Something to share .." class="form-control" rows="5"></textarea>
    	</div>
    	<div class="from-group">
    		<label>Link</label>
    		<input type="text" name="link" placeholder="Link to resource" class="form-control">
    	</div>
    	<div class="from-group" style="margin-top: 10px;">
    		<input type="submit" class="btn btn-primary" name="submit" value="Submit">
    		<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
    	</div>
    </form>
    
  </div>
</div>