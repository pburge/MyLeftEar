<!-- <h1>blog/delete.php</h1> -->

<div class='row'>
	<div class='large-12 columns'>
		<h3 class='text-center'>Are you sure you want to delete this post?</h3><br>
		<h4 class='text-center'> <?= $post->title ?></h4><br><br>
		<div class='row'>
 		<div class="large-4 medium-2 columns"><p></p></div>
		<div class='large-4 columns'>
			<?= Form::open(array('action' => 'delete', 'method' => 'post')); ?>
				<?php echo Html::anchor('admin/blog', 'No, save it', array('class' => 'button success expand'));?>
				<?php echo Html::anchor('blog/delete', 'Yes, delete it.', array('class' => 'button alert expand')); ?>
			<?= Form::close(); ?>
		</div>
 		<div class="large-1 medium-1 columns"><p></p></div>
 		</div>
<!--  		<pre>
 			<hr>
 			<? var_export($post)?>
 		</pre> -->
	</div>
</div>