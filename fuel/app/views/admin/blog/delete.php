<!-- <h1>blog/delete.php</h1> -->
<div class="row">
	<aside class="large-3 medium-3 small-12 columns">
		<h5>Admin Management</h5>
		<ul class="side-nav">
			<li><?= Html::anchor('admin', 'Create a post') ?></li>
			<li><?= Html::anchor('admin/blog', 'Blog posts') ?></li>
			<!-- <li><?= Html::anchor('admin', 'another function') ?></li> -->
		</ul>
	</aside>

	<div class="small-9 columns" role="content">
		<h3 class='text-center'>Are you sure you want to delete this post?</h3><br>
		<h4 class='text-center'> <?= $post->title ?></h4><br><br>
		<div class='row'>
 			<div class="large-4 medium-2 columns"><p></p></div>
			<div class='large-4 columns'>
				<?= Form::open(array('method' => 'post')); ?>
					<?php echo Html::anchor('admin/blog', 'No, save it', array('class' => 'button success expand'));?>
					<!-- <button type="submit" class='button small success show-for-medium-up'>Update Post</button> -->
					<?= Form::button('delete_post','Yes, delete it.', array('class' => 'button alert expand'));?>
					<?// echo Html::anchor('blog/delete', 'Yes, delete it.', array('class' => 'button alert expand')); ?>
				<?= Form::close(); ?>
			</div>
 			<div class="large-1 medium-1 columns"><p></p></div>
 		</div>
	</div>
</div>