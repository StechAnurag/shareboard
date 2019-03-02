<div>
	<?php if (isset($_SESSION['is_user_loggedin'])): ?>
		<a href="<?php echo ROOT_PATH; ?>shares/addshare" class="btn btn-success btn-share">Share something</a>
	<?php endif; ?>
	<?php foreach ($viewmodel as $item) : ?>
		<div class="card custom-card">
		  <!-- <div class="card-header">
		    Featured
		  </div> -->
		  <div class="card-body">
		    <h5 class="card-title"><?php echo $item['title']; ?></h5>
		    <small><?php echo $item['created_at']; ?></small>
		    <hr>
		    <p class="card-text"><?php echo $item['body']; ?></p>
		    <a href="<?php echo $item['link']; ?>" class="btn btn-light" target="_blank">check now</a>
		  </div>
		</div>
	<?php endforeach; ?>
</div>