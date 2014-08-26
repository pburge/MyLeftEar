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
					<?php echo Asset::img('arts/' . $post->post_img); ?>
				</div>
			</div>
		</article>
	</div>
</div>