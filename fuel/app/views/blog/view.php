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
	<div class="large-9 columns" role="content">
		<article>
			<h2><?= $post->title ?></h2>
			<h6 class="subheader small">Written by <?= $post->author->username;?> on <?= $post->format_time($post->created_at);?> </h6>
			<br><br>
			<div class="large-12 columns show-for-small-only">
				<?if( $post->post_img) : ?>
					<?php echo Asset::img('blog_imgs/' . $post->post_img); ?>
				<? endif ; ?>
				<br><br><br><br>
			</div>
			<div class="large-6 columns show-for-medium-only">
				<?if( $post->post_img) : ?>
					<?php echo Asset::img('blog_imgs/' . $post->post_img); ?>
				<? endif ; ?>
				<br><br><br><br>
			</div>
			<div class="row">
				<div class="large-6 columns">
					<p> <?= nl2br($post->body);?> </p>
				</div>
				<div class="large-6 columns show-for-large-up">
					<?if( $post->post_img) : ?>
						<?php echo Asset::img('blog_imgs/' . $post->post_img); ?>
					<? endif ; ?>
				</div>
			</div>
		</article>
	</div>



</div>