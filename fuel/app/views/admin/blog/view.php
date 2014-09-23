<div class="row">
	<aside class="large-3 medium-3 small-12 columns">
		<h5>Admin Management</h5>
		<ul class="side-nav">
			<li><?= Html::anchor('admin', 'Create a post') ?></li>
			<li><?= Html::anchor('admin/blog', 'Blog posts') ?></li>
			<li><?= Html::anchor('admin', 'Artist List') ?></li>
			<!-- <li><?= Html::anchor('admin', 'another function') ?></li> -->
		</ul>
	</aside>

	<div class="small-9 columns" role="content">
		<article>
			<h2><?= $post->title ?></h2>
			<h6 class="subheader small">Written by <?= $post->author->username;?> on <?= $post->format_time($post->created_at);?> </h6>
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
				</div>
			</div>
		</article>
	</div>

</div>