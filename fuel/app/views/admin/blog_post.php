<!-- admin/blog_post.php -->
<div class="row">
	<div class="small-12 columns" role="content">
		<article>
			<h2><?= $post['post_title'] ?></h2>
			<h6 class="subheader small">Written by <?= $post['post_author'] ?> on <?= time(); ?> </h6>
			<br>
			<br>
			<div class="row">
				<div class="large-6 columns">
					<p> <?= $post['post_body'] ?> </p>
				</div>
				<div class="large-6 columns">
					<? //Asset::img(DOCROOT.'assets/img/arts/' . $post->saved_as); ?>
				</div>
			</div>
		</article>
	</div>
</div>

<pre>
	<hr>
	<?= var_dump($post)?>
</pre>

