<div class="wrap">
	<h2>
		<?php _e( 'Content Batches' ); ?>
		<a class="add-new-h2" href="<?php echo admin_url( 'admin.php?page=sme-edit-batch&id=0' ); ?>">Add New</a>
	</h2>
	<form method="post" action="<?php echo admin_url( 'admin-post.php' ); ?>">
		<?php $table->display(); ?>
	</form>
</div>