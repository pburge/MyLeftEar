<!-- <h1>blog/delete.php</h1> -->

<div class='row'>
	<div class='large-12 columns'>
		<h3 class='text-center'>Are you sure you want to delete this post?</h3>
		<div class='row'>
 		<div class="large-3 medium-2 columns"><p></p></div>
		<div class='large-8 columns'>
			<?= Form::open(array('action' => 'delete', 'method' => 'post')); ?>
			<ul class="inline-list">
				<br><br>
				<li><?php echo Html::anchor('blog', 'Yes, delete it.', array('class' => 'button alert show-for-medium-up')); ?></li>
				<li><?php echo Html::anchor($post->url(), 'No, save it for now', array('class' => 'button success show-for-medium-up'));?></li>
			</ul>
			<?= Form::close(); ?>
		</div>
 		<div class="large-2 medium-1 columns"><p></p></div>
 		</div>
 		<pre>
 			<hr>
 			<? var_export($post)?>
 		</pre>
	</div>
</div>