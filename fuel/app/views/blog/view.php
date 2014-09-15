<!-- <h1>blog/view.php</h1> -->

<div class="row">
	<aside class="large-3 columns">
		<h5>Categories</h5>
		<ul class="side-nav">
			<li><a href="#">Site News</a></li>
			<li><a href="#">Featured Artist</a></li>
			<li><a href="#">Art Exhibits</a></li>
			<li><a href="#">Random Stuff</a></li>
		</ul>
	</aside>
	<div class="small-9 columns" role="content">
		<article>
			<h2><?= $post->title ?></h2>
			<h6 class="subheader small">Written by <?= $post->author->username;?> on <?= $post->created_at;?> </h6>
			<br>
			<br>
			<div class="row">
				<div class="large-6 columns">
					<p> <?= $post->body;?> </p>
				</div>
				<div class="large-6 columns">
					<?if( $post->post_img) : ?>
						<?php echo Asset::img('blog_imgs/' . $post->post_img); ?>
					<? endif ; ?>
					<?php //if( $post->post_img) : ?>
					<?php // echo Asset::img(DOCROOT.'img/arts/' . $post->post_img); ?>
					<?php // endif ; ?>
				</div>
			</div>
		</article>

		<?php if($auth_user && $auth_user->group_id == 6) : ?>
			<div class="row">
				<div class="large-6 columns">
					<ul class="inline-list right">
						<br><br>
						<li><p>Would you like to edit or delete this post?</p></li>
						<li><?php echo Html::anchor($post->edit_url(), 'Edit', array('class' => 'button success show-for-medium-up')); ?></li>
						<li><?php echo Html::anchor($post->delete_url(), 'Delete', array('class' => 'button alert show-for-medium-up'));?></li>
					</ul>
				</div>
			</div>
		<?php endif ;?>

<!-- 		<pre>
			<hr>
			<? var_export($post)?>
		</pre> -->
	</div>

</div>